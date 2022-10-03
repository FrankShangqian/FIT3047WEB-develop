<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * OrderLine Controller
 *
 * @property \App\Model\Table\OrderLineTable $OrderLine
 * @method \App\Model\Entity\OrderLine[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrderLineController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products', 'Orders'],
        ];
        $orderLine = $this->paginate($this->OrderLine);

        $this->set(compact('orderLine'));
    }

    /**
     * View method
     *
     * @param string|null $id Order Line id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orderLine = $this->OrderLine->get($id, [
            'contain' => ['Products', 'Orders'],
        ]);

        $this->set(compact('orderLine'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $orderLine = $this->OrderLine->newEmptyEntity();
        if ($this->request->is('post')) {
            $orderLine = $this->OrderLine->patchEntity($orderLine, $this->request->getData());
            if ($this->OrderLine->save($orderLine)) {
                $this->Flash->success(__('The order line has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The order line could not be saved. Please, try again.'));
        }
        $products = $this->OrderLine->Products->find('list', ['limit' => 200])->all();
        $orders = $this->OrderLine->Orders->find('list', ['limit' => 200])->all();
        $this->set(compact('orderLine', 'products', 'orders'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Order Line id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orderLine = $this->OrderLine->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orderLine = $this->OrderLine->patchEntity($orderLine, $this->request->getData());
            if ($this->OrderLine->save($orderLine)) {
                $this->Flash->success(__('The order line has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The order line could not be saved. Please, try again.'));
        }
        $products = $this->OrderLine->Products->find('list', ['limit' => 200])->all();
        $orders = $this->OrderLine->Orders->find('list', ['limit' => 200])->all();
        $this->set(compact('orderLine', 'products', 'orders'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Order Line id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $orderLine = $this->OrderLine->get($id);
        if ($this->OrderLine->delete($orderLine)) {
            $this->Flash->success(__('The order line has been deleted.'));
        } else {
            $this->Flash->error(__('The order line could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
