<?php
namespace CakeTaxonomy\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Terms Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Vocabularies
 *
 * @method \CakeTaxonomy\Model\Entity\Term get($primaryKey, $options = [])
 * @method \CakeTaxonomy\Model\Entity\Term newEntity($data = null, array $options = [])
 * @method \CakeTaxonomy\Model\Entity\Term[] newEntities(array $data, array $options = [])
 * @method \CakeTaxonomy\Model\Entity\Term|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \CakeTaxonomy\Model\Entity\Term patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \CakeTaxonomy\Model\Entity\Term[] patchEntities($entities, array $data, array $options = [])
 * @method \CakeTaxonomy\Model\Entity\Term findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TermsTable extends Table
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

        $this->table('terms');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('CakeUtility.Sluggable', [
            'field' => 'name'
        ]);

        $this->belongsTo('Vocabularies', [
            'foreignKey' => 'vocabulary_id',
            'joinType' => 'INNER',
            'className' => 'CakeTaxonomy.Vocabularies'
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

        //$validator
        //    ->requirePresence('slug', 'create')
        //    ->notEmpty('slug');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['vocabulary_id'], 'Vocabularies'));

        return $rules;
    }
}
