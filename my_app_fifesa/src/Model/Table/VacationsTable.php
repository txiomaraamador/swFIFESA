<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vacations Model
 *
 * @property \App\Model\Table\EmployeesTable&\Cake\ORM\Association\BelongsTo $Employees
 * @property \App\Model\Table\PayrollsTable&\Cake\ORM\Association\BelongsTo $Payrolls
 *
 * @method \App\Model\Entity\Vacation newEmptyEntity()
 * @method \App\Model\Entity\Vacation newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Vacation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vacation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vacation findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Vacation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vacation[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vacation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vacation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vacation[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vacation[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vacation[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vacation[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class VacationsTable extends Table
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

        $this->setTable('vacations');
        $this->setDisplayField('employees_id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Employees', [
            'foreignKey' => 'employees_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Payrolls', [
            'foreignKey' => 'payrolls_id',
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
            ->integer('payrolls_id')
            ->notEmptyString('payrolls_id');

        $validator
            ->scalar('post')
            ->maxLength('post', 15)
            ->requirePresence('post', 'create')
            ->notEmptyString('post');

        $validator
            ->numeric('weekly_salary')
            ->requirePresence('weekly_salary', 'create')
            ->notEmptyString('weekly_salary');

        $validator
            ->integer('vacation_days')
            ->requirePresence('vacation_days', 'create')
            ->notEmptyString('vacation_days');

        $validator
            ->date('date_admission')
            ->allowEmptyDate('date_admission');

        $validator
            ->date('start_vacation')
            ->allowEmptyDate('start_vacation');

        $validator
            ->date('return_vacations')
            ->allowEmptyDate('return_vacations');

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
        $rules->add($rules->existsIn('payrolls_id', 'Payrolls'), ['errorField' => 'payrolls_id']);

        return $rules;
    }
}
