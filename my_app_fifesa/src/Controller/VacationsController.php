<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Vacations Controller
 *
 * @property \App\Model\Table\VacationsTable $Vacations
 * @method \App\Model\Entity\Vacation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VacationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employees', 'Payrolls'],
        ];
        $vacations = $this->paginate($this->Vacations);

        $this->set(compact('vacations'));
    }

    /**
     * View method
     *
     * @param string|null $id Vacation id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vacation = $this->Vacations->get($id, [
            'contain' => ['Employees', 'Payrolls'],
        ]);

        $this->set(compact('vacation'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vacation = $this->Vacations->newEmptyEntity();
        if ($this->request->is('post')) {
            $vacation = $this->Vacations->patchEntity($vacation, $this->request->getData());
            if ($this->Vacations->save($vacation)) {
                $this->Flash->success(__('The vacation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vacation could not be saved. Please, try again.'));
        }
        $employees = $this->Vacations->Employees->find('list', ['limit' => 200])->all();
        $payrolls = $this->Vacations->Payrolls->find('list', ['limit' => 200])->all();
        $this->set(compact('vacation', 'employees', 'payrolls'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Vacation id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vacation = $this->Vacations->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vacation = $this->Vacations->patchEntity($vacation, $this->request->getData());
            if ($this->Vacations->save($vacation)) {
                $this->Flash->success(__('The vacation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vacation could not be saved. Please, try again.'));
        }
        $employees = $this->Vacations->Employees->find('list', ['limit' => 200])->all();
        $payrolls = $this->Vacations->Payrolls->find('list', ['limit' => 200])->all();
        $this->set(compact('vacation', 'employees', 'payrolls'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Vacation id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vacation = $this->Vacations->get($id);
        if ($this->Vacations->delete($vacation)) {
            $this->Flash->success(__('The vacation has been deleted.'));
        } else {
            $this->Flash->error(__('The vacation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
