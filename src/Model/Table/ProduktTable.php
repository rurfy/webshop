<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Produkt Model
 *
 * @method \App\Model\Entity\Produkt newEmptyEntity()
 * @method \App\Model\Entity\Produkt newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Produkt[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Produkt get($primaryKey, $options = [])
 * @method \App\Model\Entity\Produkt findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Produkt patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Produkt[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Produkt|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Produkt saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Produkt[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Produkt[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Produkt[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Produkt[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProduktTable extends Table
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

        $this->setTable('produkt');
        $this->setDisplayField('ProduktID');
        $this->setPrimaryKey('ProduktID');
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
            ->integer('ProduktID')
            ->allowEmptyString('ProduktID', null, 'create');

        $validator
            ->scalar('Bezeichnung')
            ->maxLength('Bezeichnung', 255)
            ->requirePresence('Bezeichnung', 'create')
            ->notEmptyString('Bezeichnung');

        $validator
            ->scalar('Farbe')
            ->maxLength('Farbe', 50)
            ->requirePresence('Farbe', 'create')
            ->notEmptyString('Farbe');

        $validator
            ->scalar('Art')
            ->maxLength('Art', 50)
            ->requirePresence('Art', 'create')
            ->notEmptyString('Art');

        $validator
            ->numeric('Preis')
            ->requirePresence('Preis', 'create')
            ->notEmptyString('Preis');

        $validator
            ->scalar('Bild')
            ->maxLength('Bild', 255)
            ->requirePresence('Bild', 'create')
            ->notEmptyString('Bild');

        return $validator;
    }
}
