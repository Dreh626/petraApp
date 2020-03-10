<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProjetosRealizados Model
 *
 * @method \App\Model\Entity\ProjetosRealizado get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProjetosRealizado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProjetosRealizado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProjetosRealizado|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProjetosRealizado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProjetosRealizado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProjetosRealizado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProjetosRealizado findOrCreate($search, callable $callback = null, $options = [])
 */
class ProjetosRealizadosTable extends Table
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

        $this->setTable('projetos_realizados');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('cidade')
            ->maxLength('cidade', 255)
            ->requirePresence('cidade', 'create')
            ->notEmptyString('cidade','A cidade deve ser preenchida!');

        $validator
            ->scalar('uf')
            ->maxLength('uf', 2)
            ->requirePresence('uf', 'create')
            ->notEmptyString('uf','A Unidade da Federação deve ser preenchida!');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->requirePresence('descricao', 'create')
            ->notEmptyString('descricao');

        $validator
            ->scalar('foto')
            ->maxLength('foto', 255)
            ->requirePresence('foto', 'create')
            ->notEmptyString('foto','A foto deve ser preenchida!');

        return $validator;
    }
}
