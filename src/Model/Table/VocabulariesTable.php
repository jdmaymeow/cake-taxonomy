<?php
namespace CakeTaxonomy\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vocabularies Model
 *
 * @property \Cake\ORM\Association\HasMany $Terms
 *
 * @method \CakeTaxonomy\Model\Entity\Vocabulary get($primaryKey, $options = [])
 * @method \CakeTaxonomy\Model\Entity\Vocabulary newEntity($data = null, array $options = [])
 * @method \CakeTaxonomy\Model\Entity\Vocabulary[] newEntities(array $data, array $options = [])
 * @method \CakeTaxonomy\Model\Entity\Vocabulary|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \CakeTaxonomy\Model\Entity\Vocabulary patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \CakeTaxonomy\Model\Entity\Vocabulary[] patchEntities($entities, array $data, array $options = [])
 * @method \CakeTaxonomy\Model\Entity\Vocabulary findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VocabulariesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('vocabularies');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Terms', [
            'foreignKey' => 'vocabulary_id',
            'className' => 'CakeTaxonomy.Terms'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        return $validator;
    }
}
