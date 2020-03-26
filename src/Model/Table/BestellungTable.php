<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bestellung Model
 *
 * @method \App\Model\Entity\Bestellung newEmptyEntity()
 * @method \App\Model\Entity\Bestellung newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Bestellung[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bestellung get($primaryKey, $options = [])
 * @method \App\Model\Entity\Bestellung findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Bestellung patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Bestellung[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bestellung|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bestellung saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bestellung[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Bestellung[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Bestellung[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Bestellung[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class BestellungTable extends Table
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

        $this->setTable('bestellung');
        $this->setDisplayField('BestellNr');
        $this->setPrimaryKey('BestellNr');
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
            ->integer('BestellNr')
            ->allowEmptyString('BestellNr', null, 'create');

        $validator
            ->integer('Menge')
            ->requirePresence('Menge', 'create')
            ->notEmptyString('Menge');

        $validator
            ->scalar('Groesse')
            ->maxLength('Groesse', 50)
            ->requirePresence('Groesse', 'create')
            ->notEmptyString('Groesse');

        $validator
            ->date('Datum')
            ->requirePresence('Datum', 'create')
            ->notEmptyDate('Datum');

        $validator
            ->scalar('Zahlungsart')
            ->maxLength('Zahlungsart', 50)
            ->requirePresence('Zahlungsart', 'create')
            ->notEmptyString('Zahlungsart');

        $validator
            ->integer('KundeID')
            ->requirePresence('KundeID', 'create')
            ->notEmptyString('KundeID');

        $validator
            ->integer('StatusID')
            ->requirePresence('StatusID', 'create')
            ->notEmptyString('StatusID');

        return $validator;
    }
}
