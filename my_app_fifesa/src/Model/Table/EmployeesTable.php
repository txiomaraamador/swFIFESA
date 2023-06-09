<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Employees Model
 *
 * @method \App\Model\Entity\Employee newEmptyEntity()
 * @method \App\Model\Entity\Employee newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Employee[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Employee get($primaryKey, $options = [])
 * @method \App\Model\Entity\Employee findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Employee patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Employee[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Employee|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employee saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EmployeesTable extends Table
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

        $this->setTable('employees');
        $this->setDisplayField('employee_name');
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
            ->scalar('employee_name')
            ->maxLength('employee_name', 255)
            ->requirePresence('employee_name', 'create')
            ->notEmptyString('employee_name');

        $validator
            ->scalar('position')
            ->maxLength('position', 30)
            ->requirePresence('position', 'create')
            ->notEmptyString('position');

        $validator
            ->scalar('nss')
            ->maxLength('nss', 11)
            ->requirePresence('nss', 'create')
            ->notEmptyString('nss');

        $validator
            ->scalar('rfc')
            ->maxLength('rfc', 13)
            ->allowEmptyString('rfc');

        $validator
            ->scalar('curp')
            ->maxLength('curp', 18)
            ->requirePresence('curp', 'create')
            ->notEmptyString('curp');

        $validator
            ->numeric('base_salary')
            ->requirePresence('base_salary', 'create')
            ->notEmptyString('base_salary');

        $validator
            ->scalar('motion')
            ->maxLength('motion', 15)
            ->requirePresence('motion', 'create')
            ->notEmptyString('motion');

        $validator
            ->date('date')
            ->allowEmptyDate('date');

        return $validator;
    }
}
