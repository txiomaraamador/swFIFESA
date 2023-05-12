<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * LaborCatalogues Controller
 *
 * @property \App\Model\Table\LaborCataloguesTable $LaborCatalogues
 * @method \App\Model\Entity\LaborCatalogue[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LaborCataloguesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employees'],
        ];
        $laborCatalogues = $this->paginate($this->LaborCatalogues);

        $this->set(compact('laborCatalogues'));
    }

    /**
     * View method
     *
     * @param string|null $id Labor Catalogue id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $laborCatalogue = $this->LaborCatalogues->get($id, [
            'contain' => ['Employees'],
        ]);

        $this->set(compact('laborCatalogue'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $laborCatalogue = $this->LaborCatalogues->newEmptyEntity();
        if ($this->request->is('post')) {
            $laborCatalogue = $this->LaborCatalogues->patchEntity($laborCatalogue, $this->request->getData());
            if ($this->LaborCatalogues->save($laborCatalogue)) {
                $this->Flash->success(__('The labor catalogue has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The labor catalogue could not be saved. Please, try again.'));
        }
        $employees = $this->LaborCatalogues->Employees->find('list', ['limit' => 200])->all();
        $this->set(compact('laborCatalogue', 'employees'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Labor Catalogue id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $laborCatalogue = $this->LaborCatalogues->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $laborCatalogue = $this->LaborCatalogues->patchEntity($laborCatalogue, $this->request->getData());
            if ($this->LaborCatalogues->save($laborCatalogue)) {
                $this->Flash->success(__('The labor catalogue has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The labor catalogue could not be saved. Please, try again.'));
        }
        $employees = $this->LaborCatalogues->Employees->find('list', ['limit' => 200])->all();
        $this->set(compact('laborCatalogue', 'employees'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Labor Catalogue id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $laborCatalogue = $this->LaborCatalogues->get($id);
        if ($this->LaborCatalogues->delete($laborCatalogue)) {
            $this->Flash->success(__('The labor catalogue has been deleted.'));
        } else {
            $this->Flash->error(__('The labor catalogue could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
