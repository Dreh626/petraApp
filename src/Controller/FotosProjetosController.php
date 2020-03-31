<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * FotosProjetos Controller
 *
 * @property \App\Model\Table\FotosProjetosTable $FotosProjetos
 *
 * @method \App\Model\Entity\FotosProjeto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FotosProjetosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ProjetosRealizados'],
        ];
        $fotosProjetos = $this->paginate($this->FotosProjetos,['limit' => 10]);

        $this->set(compact('fotosProjetos'));
    }

    /**
     * View method
     *
     * @param string|null $id Fotos Projeto id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fotosProjeto = $this->FotosProjetos->get($id, [
            'contain' => ['ProjetosRealizados'],
        ]);

        $this->set('fotosProjeto', $fotosProjeto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fotosProjeto = $this->FotosProjetos->newEmptyEntity();
        if ($this->request->is('post')) {
            $fotosProjeto = $this->FotosProjetos->patchEntity($fotosProjeto, $this->request->getData());
            
            // Se não tiver erro de validação
            if (!$fotosProjeto->getErrors()) {

                // Recupera o arquivo para Upload
                $file = $this->request->getData('foto');

                // Se existir arquivo para Upload
                if(!empty($file)){

                    // Pega o nome, a extensão e o nome temporário do arquivo
                    $file_fullName = strtolower($file->getClientFilename());
                    $file_name = explode('.',$file_fullName);
                    $file_extension = array_pop($file_name);
                    $file_tmpName = $file->getStream()->getMetadata('uri');

                    // Dou um get()->find() para trazer os dados do projeto onde "id" = "projeto_id"
                    $projeto = $this->FotosProjetos->ProjetosRealizados->find()
                    ->where(['id' => $fotosProjeto->projeto_id])->first();

                    // Recupera nome da foto para renomear o arquivo
                    // O nome é convertido para minusculo e sem espaços
                    // Renomeia nome para tudo junto sem espaço
                    $nome = trim(strtolower($fotosProjeto->nome));
                    $nome = str_replace(' ', '', $nome);
                    $fotosProjeto['nome'] = $nome;

                    // O nome da foto será "nomefoto-nomeprojeto"
                    // Define o caminho onde será "upado" o arquivo
                    // Define: "caminho/nome_arquivo.extensão"
                    $nomeFoto = $nome.'-'.$projeto->nome;
                    $uploadPath = WWW_ROOT . 'img/projetos/fotos/';
                    $uploadFile = $uploadPath.$nomeFoto.'.'.$file_extension;

                    // Renomeia a foto para "nome.extensao"
                    $fotosProjeto['foto'] = $nomeFoto.'.'.$file_extension;

                    // Se dados puderam ser salvos
                    if ($this->FotosProjetos->save($fotosProjeto)) {

                        // Se fizer o Upload, altera o nome do arquivo para "nome.extensao" e salva os dados
                        if (move_uploaded_file($file_tmpName, $uploadFile) ){
                            $this->Flash->success(__('Foto de Projeto atualizada com sucesso.'));
                            return $this->redirect(['action' => 'index']);
                        }else{
                            $this->Flash->error(__('Os Dados foram salvos, mas Houve Falha no Upload!'));
                        }
                        
                    }else{
                        $this->Flash->error(__('A Foto de Projeto não pode ser atualizada. Por favor, tente novamente.'));
                    }

                }else{
                    $this->Flash->error(__('Falha ao obter arquivo de Upload!'));
                }

            }
            else{
                $this->Flash->error(__('Erro ao validar dados!'));
            }

        }
        $projetosRealizados = $this->FotosProjetos->ProjetosRealizados->find('list', [
            'keyField' => 'id',
            'valueField' => 'nome',
            'groupField' => 'cidade',
            'order' => ['id' => 'ASC'],
            'limit' => 200
        ]);
        $this->set(compact('fotosProjeto', 'projetosRealizados'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fotos Projeto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fotosProjeto = $this->FotosProjetos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fotosProjeto = $this->FotosProjetos->patchEntity($fotosProjeto, $this->request->getData());
            
            // Se não tiver erro de validação
            if (!$fotosProjeto->getErrors()) {

                // Recupera o arquivo para Upload
                $file = $this->request->getData('foto');

                // Se existir arquivo para Upload
                if(!empty($file)){

                    // Pega o nome, a extensão e o nome temporário do arquivo
                    $file_fullName = strtolower($file->getClientFilename());
                    $file_name = explode('.',$file_fullName);
                    $file_extension = array_pop($file_name);
                    $file_tmpName = $file->getStream()->getMetadata('uri');

                    // Dou um get()->find() para trazer os dados do projeto onde "id" = "projeto_id"
                    $projeto = $this->FotosProjetos->ProjetosRealizados->find()
                    ->where(['id' => $fotosProjeto->projeto_id])->first();

                    // Recupera nome da foto para renomear o arquivo
                    // O nome é convertido para minusculo e sem espaços
                    // Renomeia nome para tudo junto sem espaço
                    $nome = trim(strtolower($fotosProjeto->nome));
                    $nome = str_replace(' ', '', $nome);
                    $fotosProjeto['nome'] = $nome;

                    // O nome da foto será "nomefoto-nomeprojeto"
                    // Define o caminho onde será "upado" o arquivo
                    // Define: "caminho/nome_arquivo.extensão"
                    $nomeFoto = $nome.'-'.$projeto->nome;
                    $uploadPath = WWW_ROOT . 'img/projetos/fotos/';
                    $uploadFile = $uploadPath.$nomeFoto.'.'.$file_extension;

                    // Renomeia a foto para "nome.extensao"
                    $fotosProjeto['foto'] = $nomeFoto.'.'.$file_extension;

                    // Se dados puderam ser salvos
                    if ($this->FotosProjetos->save($fotosProjeto)) {

                        // Se fizer o Upload, altera o nome do arquivo para "nome.extensao" e salva os dados
                        if (move_uploaded_file($file_tmpName, $uploadFile) ){
                            $this->Flash->success(__('Foto de Projeto atualizada com sucesso.'));
                            return $this->redirect(['action' => 'index']);
                        }else{
                            $this->Flash->error(__('Os Dados foram salvos, mas Houve Falha no Upload!'));
                        }
                        
                    }else{
                        $this->Flash->error(__('A Foto de Projeto não pode ser atualizada. Por favor, tente novamente.'));
                    }

                }else{
                    $this->Flash->error(__('Falha ao obter arquivo de Upload!'));
                }

            }
            else{
                $this->Flash->error(__('Erro ao validar dados!'));
            }

            
        }
        $projetosRealizados = $this->FotosProjetos->ProjetosRealizados->find('list', [
            'keyField' => 'id',
            'valueField' => 'nome',
            'groupField' => 'cidade',
            'order' => ['id' => 'ASC'],
            'limit' => 200
        ]);
        $this->set(compact('fotosProjeto', 'projetosRealizados'));        
    }

    /**
     * Delete method
     *
     * @param string|null $id Fotos Projeto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fotosProjeto = $this->FotosProjetos->get($id);
        if ($this->FotosProjetos->delete($fotosProjeto)) {
            $this->Flash->success(__('The fotos projeto has been deleted.'));
        } else {
            $this->Flash->error(__('The fotos projeto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
