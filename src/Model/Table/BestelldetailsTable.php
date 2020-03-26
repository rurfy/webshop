<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bestelldetails Model
 *
 * @method \App\Model\Entity\Bestelldetail newEmptyEntity()
 * @method \App\Model\Entity\Bestelldetail newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Bestelldetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bestelldetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\Bestelldetail findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Bestelldetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Bestelldetail[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bestelldetail|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bestelldetail saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bestelldetail[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Bestelldetail[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Bestelldetail[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Bestelldetail[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class BestelldetailsTable extends Table
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

        $this->setTable('bestelldetails');
        $this->setDisplayField('DetailID');
        $this->setPrimaryKey('DetailID');
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
            ->integer('DetailID')
            ->allowEmptyString('DetailID', null, 'create');

        $validator
            ->integer('BestellNr')
            ->requirePresence('BestellNr', 'create')
            ->notEmptyString('BestellNr');

        $validator
            ->integer('ProduktID')
            ->requirePresence('ProduktID', 'create')
            ->notEmptyString('ProduktID');

        $validator
            ->integer('Menge')
            ->requirePresence('Menge', 'create')
            ->notEmptyString('Menge');

        $validator
            ->scalar('Groesse')
            ->maxLength('Groesse', 5)
            ->requirePresence('Groesse', 'create')
            ->notEmptyString('Groesse');

        return $validator;
    }
}
