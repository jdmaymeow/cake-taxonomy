<?php
namespace CakeTaxonomy\Controller;

use CakeTaxonomy\Controller\AppController;

/**
 * Vocabularies Controller
 *
 * @property \CakeTaxonomy\Model\Table\VocabulariesTable $Vocabularies
 */
abstract class AbstractVocabulariesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $vocabularies = $this->paginate($this->Vocabularies);

        $this->set(compact('vocabularies'));
        $this->set('_serialize', ['vocabularies']);
    }

    /**
     * View method
     *
     * @param string|null $id Vocabulary id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vocabulary = $this->Vocabularies->get($id, [
            'contain' => ['Terms']
        ]);

        $this->set('vocabulary', $vocabulary);
        $this->set('_serialize', ['vocabulary']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vocabulary = $this->Vocabularies->newEntity();
        if ($this->request->is('post')) {
            $vocabulary = $this->Vocabularies->patchEntity($vocabulary, $this->request->data);
            if ($this->Vocabularies->save($vocabulary)) {
                $this->Flash->success(__('The vocabulary has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The vocabulary could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('vocabulary'));
        $this->set('_serialize', ['vocabulary']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Vocabulary id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vocabulary = $this->Vocabularies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vocabulary = $this->Vocabularies->patchEntity($vocabulary, $this->request->data);
            if ($this->Vocabularies->save($vocabulary)) {
                $this->Flash->success(__('The vocabulary has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The vocabulary could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('vocabulary'));
        $this->set('_serialize', ['vocabulary']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Vocabulary id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vocabulary = $this->Vocabularies->get($id);
        if ($this->Vocabularies->delete($vocabulary)) {
            $this->Flash->success(__('The vocabulary has been deleted.'));
        } else {
            $this->Flash->error(__('The vocabulary could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
