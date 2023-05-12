<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Settlements Model
 *
 * @property \App\Model\Table\EmployeesTable&\Cake\ORM\Association\BelongsTo $Employees
 * @property \App\Model\Table\VacationsTable&\Cake\ORM\Association\BelongsTo $Vacations
 * @property \App\Model\Table\PayrollsTable&\Cake\ORM\Association\BelongsTo $Payrolls
 *
 * @method \App\Model\Entity\Settlement newEmptyEntity()
 * @method \App\Model\Entity\Settlement newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Settlement[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Settlement get($primaryKey, $options = [])
 * @method \App\Model\Entity\Settlement findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Settlement patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Settlement[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Settlement|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Settlement saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Settlement[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Settlement[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Settlement[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Settlement[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SettlementsTable extends Table
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

        $this->setTable('settlements');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Employees', [
            'foreignKey' => 'employees_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Vacations', [
            'foreignKey' => 'vacations_id',
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
            ->integer('vacations_id')
            ->notEmptyString('vacations_id');

        $validator
            ->integer('payrolls_id')
            ->notEmptyString('payrolls_id');

        $validator
            ->numeric('daily_amount')
            ->requirePresence('daily_amount', 'create')
            ->notEmptyString('daily_amount');

        $validator
            ->integer('days_to_date')
            ->requirePresence('days_to_date', 'create')
            ->notEmptyString('days_to_date');

        $validator
            ->numeric('vacations')
            ->requirePresence('vacations', 'create')
            ->notEmptyString('vacations');

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
        $rules->add($rules->existsIn('vacations_id', 'Vacations'), ['errorField' => 'vacations_id']);
        $rules->add($rules->existsIn('payrolls_id', 'Payrolls'), ['errorField' => 'payrolls_id']);

        return $rules;
    }
}
