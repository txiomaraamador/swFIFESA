<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Payrolls Model
 *
 * @property \App\Model\Table\EmployeesTable&\Cake\ORM\Association\BelongsTo $Employees
 *
 * @method \App\Model\Entity\Payroll newEmptyEntity()
 * @method \App\Model\Entity\Payroll newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Payroll[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Payroll get($primaryKey, $options = [])
 * @method \App\Model\Entity\Payroll findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Payroll patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Payroll[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Payroll|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Payroll saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Payroll[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Payroll[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Payroll[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Payroll[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PayrollsTable extends Table
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

        $this->setTable('payrolls');
        $this->setDisplayField('employees_id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Employees', [
            'foreignKey' => 'employees_id',
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
            ->integer('employees_id')
            ->notEmptyString('employees_id');

        $validator
            ->numeric('salary')
            ->requirePresence('salary', 'create')
            ->notEmptyString('salary');

        $validator
            ->numeric('bond')
            ->requirePresence('bond', 'create')
            ->notEmptyString('bond');

        $validator
            ->integer('business_days')
            ->requirePresence('business_days', 'create')
            ->notEmptyString('business_days');

        $validator
            ->integer('faults')
            ->requirePresence('faults', 'create')
            ->notEmptyString('faults');

        $validator
            ->numeric('extra')
            ->requirePresence('extra', 'create')
            ->notEmptyString('extra');

        $validator
            ->integer('rest')
            ->requirePresence('rest', 'create')
            ->notEmptyString('rest');

        $validator
            ->numeric('production')
            ->requirePresence('production', 'create')
            ->notEmptyString('production');

        $validator
            ->numeric('irs')
            ->requirePresence('irs', 'create')
            ->notEmptyString('irs');

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
        $rules->add($rules->existsIn('employees_id', 'Employees'), ['errorField' => 'employees_id']);

        return $rules;
    }
}
