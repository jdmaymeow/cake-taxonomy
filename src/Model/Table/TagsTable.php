<?php
namespace CakeTaxonomy\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tags Model
 *
 * @method \CakeTaxonomy\Model\Entity\Tag get($primaryKey, $options = [])
 * @method \CakeTaxonomy\Model\Entity\Tag newEntity($data = null, array $options = [])
 * @method \CakeTaxonomy\Model\Entity\Tag[] newEntities(array $data, array $options = [])
 * @method \CakeTaxonomy\Model\Entity\Tag|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \CakeTaxonomy\Model\Entity\Tag patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \CakeTaxonomy\Model\Entity\Tag[] patchEntities($entities, array $data, array $options = [])
 * @method \CakeTaxonomy\Model\Entity\Tag findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TagsTable extends Table
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

        $this->table('tags');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('CakeUtility.Sluggable', [
            'field' => 'name'
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
}
