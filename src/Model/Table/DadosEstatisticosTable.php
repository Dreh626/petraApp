<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DadosEstatisticos Model
 *
 * @method \App\Model\Entity\DadosEstatistico get($primaryKey, $options = [])
 * @method \App\Model\Entity\DadosEstatistico newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DadosEstatistico[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DadosEstatistico|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DadosEstatistico saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DadosEstatistico patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DadosEstatistico[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DadosEstatistico findOrCreate($search, callable $callback = null, $options = [])
 */
class DadosEstatisticosTable extends Table
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

        $this->setTable('dados_estatisticos');
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
            ->decimal('numero')
            ->requirePresence('numero', 'create')
            ->notEmptyString('numero','Numero deve ser preenchido!');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->requirePresence('descricao', 'create')
            ->notEmptyString('descricao','A descrição deve ser preenchida!');

        return $validator;
    }
}
