<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FotosProjetos Model
 *
 * @property \App\Model\Table\ProjetosRealizadosTable&\Cake\ORM\Association\BelongsTo $ProjetosRealizados
 *
 * @method \App\Model\Entity\FotosProjeto get($primaryKey, $options = [])
 * @method \App\Model\Entity\FotosProjeto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FotosProjeto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FotosProjeto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FotosProjeto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FotosProjeto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FotosProjeto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FotosProjeto findOrCreate($search, callable $callback = null, $options = [])
 */
class FotosProjetosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('fotos_projetos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('ProjetosRealizados', [
            'foreignKey' => 'projeto_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 255)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome','O nome deve ser preenchido!');
        
        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');

        $validator
            ->integer('projeto_id')
            ->requirePresence('projeto_id')
            ->notEmptyString('projeto_id','Algum projeto deve ser escolhido!');

        $validator
            ->notEmptyFile('foto','A foto deve ser preenchida!')
            ->add('foto', [
                'mimeType' => [
                    'rule' => ['mimeType', ['image/jpg','image/JPG','image/jpeg','image/JPEG','image/png','image/PNG']],
                    'message' => 'A foto só poderá ser dos tipos: "jpg", "jpeg" ou "png" !'
                ],
                'fileSize' => [
                    'rule' => ['fileSize', '<=', '10MB'],
                    'message' => 'A foto deve ter no máximo 10 MB de tamanho !'
                ]
            ]);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['nome'],'O nome da foto já existe!'));

        $rules->add($rules->existsIn(['projeto_id'], 'ProjetosRealizados', 'ID do Projeto não existe!'));

        return $rules;
    }


}
