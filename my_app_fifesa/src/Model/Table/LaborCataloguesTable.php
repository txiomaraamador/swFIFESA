<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LaborCatalogues Model
 *
 * @property \App\Model\Table\EmployeesTable&\Cake\ORM\Association\BelongsTo $Employees
 *
 * @method \App\Model\Entity\LaborCatalogue newEmptyEntity()
 * @method \App\Model\Entity\LaborCatalogue newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\LaborCatalogue[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LaborCatalogue get($primaryKey, $options = [])
 * @method \App\Model\Entity\LaborCatalogue findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\LaborCatalogue patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LaborCatalogue[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\LaborCatalogue|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LaborCatalogue saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LaborCatalogue[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LaborCatalogue[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\LaborCatalogue[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LaborCatalogue[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class LaborCataloguesTable extends Table
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

        $this->setTable('labor_catalogues');
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
            ->date('date_hire')
            ->requirePresence('date_hire', 'create')
            ->notEmptyDate('date_hire');

        $validator
            ->integer('years_working')
            ->requirePresence('years_working', 'create')
            ->notEmptyString('years_working');

        $validator
            ->integer('holidays')
            ->requirePresence('holidays', 'create')
            ->notEmptyString('holidays');

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
