<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Kunde Model
 *
 * @method \App\Model\Entity\Kunde newEmptyEntity()
 * @method \App\Model\Entity\Kunde newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Kunde[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Kunde get($primaryKey, $options = [])
 * @method \App\Model\Entity\Kunde findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Kunde patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Kunde[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Kunde|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Kunde saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Kunde[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Kunde[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Kunde[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Kunde[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class KundeTable extends Table
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

        $this->setTable('kunde');
        $this->setDisplayField('KundeID');
        $this->setPrimaryKey('KundeID');
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
            ->integer('KundeID')
            ->allowEmptyString('KundeID', null, 'create');

        $validator
            ->scalar('Vorname')
            ->maxLength('Vorname', 100)
            ->requirePresence('Vorname', 'create')
            ->notEmptyString('Vorname');

        $validator
            ->scalar('Nachname')
            ->maxLength('Nachname', 100)
            ->requirePresence('Nachname', 'create')
            ->notEmptyString('Nachname');

        $validator
            ->scalar('EMail')
            ->maxLength('EMail', 100)
            ->requirePresence('EMail', 'create')
            ->notEmptyString('EMail');

        $validator
            ->scalar('Adresse')
            ->maxLength('Adresse', 100)
            ->requirePresence('Adresse', 'create')
            ->notEmptyString('Adresse');

        $validator
            ->scalar('PLZ')
            ->maxLength('PLZ', 10)
            ->requirePresence('PLZ', 'create')
            ->notEmptyString('PLZ');

        $validator
            ->scalar('Stadt')
            ->maxLength('Stadt', 50)
            ->requirePresence('Stadt', 'create')
            ->notEmptyString('Stadt');

        $validator
            ->scalar('Land')
            ->maxLength('Land', 50)
            ->requirePresence('Land', 'create')
            ->notEmptyString('Land');

        $validator
            ->scalar('Benutzername')
            ->maxLength('Benutzername', 100)
            ->requirePresence('Benutzername', 'create')
            ->notEmptyString('Benutzername');

        $validator
            ->scalar('Passwort')
            ->maxLength('Passwort', 100)
            ->requirePresence('Passwort', 'create')
            ->notEmptyString('Passwort');

        return $validator;
    }

    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['Benutzername']));

        return $rules;
    }
}
