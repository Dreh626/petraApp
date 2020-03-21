<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

use Cake\Controller\Controller;

// Importa TableRegistry para query de dados no banco
use Cake\ORM\TableRegistry;

// Importa MailerAwareTrait para enviar e-mail
use Cake\Mailer\MailerAwareTrait;


/**
 * Static content controller
 *
 * This controller will render views from templates/Pages/
 *
 * @link https://book.cakephp.org/4/en/controllers/pages-controller.html
 */
class HomeController extends AppController
{

    /**
     * metodo simulacao
     *
     * Chamada pelo botão enviar na pagina principal do site.
     * Responsável por salvar os dados do usuário no Banco e enviar e-mail de novo interessado.
     */
    // usa classe MailerAwareTrait para o envio de e-mail
    use MailerAwareTrait;
    public function simulacao()
    {
        // Em um método do controller.
        $this->loadModel('Interessados');
        $interessado = $this->Interessados->newEmptyEntity();
        if ($this->request->is('post')) {
            $interessado = $this->Interessados->patchEntity($interessado, $this->request->getData());
            if ($this->Interessados->save($interessado)) {

                //  Envia e-mail através do getMailer para o InteressadosMailer, 
                //chamando a função novoInteressado e passando o objeto $interessado
                $this->getMailer('Interessados')->send('novoInteressado', [$interessado]);

                $this->Flash->success(__('Simulação enviada com sucesso.'));
                
                return $this->redirect(['controller' => 'Home', 'action' => 'display', 'index']);
            }
            $this->Flash->error(__('Sua solicitação de Simulação não pode ser enviada! Por favor, tente novamente.'));
        }
        $this->set(compact('interessado'));
    }


    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\View\Exception\MissingTemplateException When the view file could not
     *   be found and in debug mode.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found and not in debug mode.
     * @throws \Cake\View\Exception\MissingTemplateException In debug mode.
     */

    public function display(...$path): ?Response
    {
        if (!$path) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        
        $this->set(compact('page', 'subpage'));

        try {
            
            // Dou um get()->find() para trazer todos os dados estatisticos da tabela
            $dados = TableRegistry::getTableLocator()->get('DadosEstatisticos')->find();
            $this->set("dadosEstatisticos",$dados); // Passa pra view os dados no objeto "dadosEstatisticos"

            // Dou um get()->find() para trazer todos os projetos realizados da tabela
            $projetos = TableRegistry::getTableLocator()->get('ProjetosRealizados')->find();
            $this->set("projetosRealizados",$projetos); // Passa pra view os dados no objeto "projetosRealizados"

            return $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }

        return $this->render();
    }

}
