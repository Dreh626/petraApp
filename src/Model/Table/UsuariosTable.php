<?php
declare(strict_types=1);

namespace App\Model\Table;

use App\Model\Entity\Usuario;
use Cake\Event\Event;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


/**
 * Usuarios Model
 *
 * @method \App\Model\Entity\Usuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Usuario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Usuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Usuario|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usuario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario findOrCreate($search, callable $callback = null, $options = [])
 */
class UsuariosTable extends Table
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

        $this->setTable('usuarios');
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
            ->minLength('nome', 3,'O nome deve conter ao mínimo 3 caracteres!')
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome','O nome deve ser preenchido!');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email','O email deve ser preenchido!');

        $validator
            ->scalar('login')
            ->maxLength('login', 255)
            ->minLength('login', 5,'O login deve conter ao mínimo 5 caracteres!')
            ->notEmptyString('login','O login deve ser preenchido!');

        $validator
            ->scalar('senha')
            ->maxLength('senha', 255)
            ->minLength('senha', 5,'A senha deve conter ao mínimo 5 caracteres!')
            ->requirePresence('senha', 'create')
            ->notEmptyString('senha','A senha deve ser preenchida!');

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
        $rules->add($rules->isUnique(['login']));

        return $rules;
    }

    public function beforeSave(Event $event, Usuario $entity)
    {
        $entity->senha = \Cake\Utility\Security::hash($entity->senha,'sha256');
        // debug($entity);
        // exit();
    }

}
