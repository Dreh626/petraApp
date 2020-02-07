<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Interessados Model
 *
 * @method \App\Model\Entity\Interessado get($primaryKey, $options = [])
 * @method \App\Model\Entity\Interessado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Interessado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Interessado|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Interessado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Interessado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Interessado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Interessado findOrCreate($search, callable $callback = null, $options = [])
 */
class InteressadosTable extends Table
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

        $this->setTable('interessados');
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
            ->scalar('nome')
            ->maxLength('nome', 255)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome','O nome deve ser preenchido!');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email','O email deve ser preenchido!');

        $validator
            ->scalar('celular')
            ->maxLength('celular', 11)
            ->requirePresence('celular', 'create')
            ->notEmptyString('celular','O celular deve ser preenchido!');

        $validator
            ->scalar('endereco')
            ->maxLength('endereco', 255)
            ->requirePresence('endereco', 'create')
            ->notEmptyString('endereco','O endereço deve ser preenchido!');

        $validator
            ->scalar('tipo_instalacao')
            ->maxLength('tipo_instalacao', 255)
            ->requirePresence('tipo_instalacao', 'create')
            ->notEmptyString('tipo_instalacao','O tipo de instalação deve ser preenchido!');

        $validator
            ->decimal('metragem')
            ->requirePresence('metragem', 'create')
            ->notEmptyString('metragem','A metragem deve ser preenchida!');

        $validator
            ->decimal('conta_atual')
            ->requirePresence('conta_atual', 'create')
            ->notEmptyString('conta_atual');

        return $validator;
    }
}
