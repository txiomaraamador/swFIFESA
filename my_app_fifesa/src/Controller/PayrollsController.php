<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Payrolls Controller
 *
 * @property \App\Model\Table\PayrollsTable $Payrolls
 * @method \App\Model\Entity\Payroll[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PayrollsController extends AppController
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
        $payrolls = $this->paginate($this->Payrolls);

        $this->set(compact('payrolls'));
    }

    /**
     * View method
     *
     * @param string|null $id Payroll id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $payroll = $this->Payrolls->get($id, [
            'contain' => ['Employees'],
        ]);

        $this->set(compact('payroll'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $payroll = $this->Payrolls->newEmptyEntity();
        if ($this->request->is('post')) {
            $payroll = $this->Payrolls->patchEntity($payroll, $this->request->getData());
            if ($this->Payrolls->save($payroll)) {
                $this->Flash->success(__('The payroll has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The payroll could not be saved. Please, try again.'));
        }
        $employees = $this->Payrolls->Employees->find('list', ['limit' => 200])->all();
        $this->set(compact('payroll', 'employees'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Payroll id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $payroll = $this->Payrolls->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $payroll = $this->Payrolls->patchEntity($payroll, $this->request->getData());
            if ($this->Payrolls->save($payroll)) {
                $this->Flash->success(__('The payroll has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The payroll could not be saved. Please, try again.'));
        }
        $employees = $this->Payrolls->Employees->find('list', ['limit' => 200])->all();
        $this->set(compact('payroll', 'employees'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Payroll id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $payroll = $this->Payrolls->get($id);
        if ($this->Payrolls->delete($payroll)) {
            $this->Flash->success(__('The payroll has been deleted.'));
        } else {
            $this->Flash->error(__('The payroll could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
