<?php
namespace App\Controller;

use App\Model\Entity\Role;

class AdminController extends AppController
{

    public function index()
    {
        //exit('hello');
    }

    /**
     * Settings form
     *
     * @return \Cake\Http\Response|null Redirects to itself after saving.
     */
    public function settings()
    {
        $settings = $this->Settings->find()->firstOrFail();

        if ($this->request->is(['patch', 'post', 'put'])) {
            $settings = $this->Settings->patchEntity($settings, $this->request->getData());
            if ($this->Settings->save($settings)) {
                $this->Flash->success(__('The setting has been saved.'));

                return $this->redirect(['action' => 'settings']);
            }
            $this->Flash->error(__('The setting could not be saved. Please, try again.'));
        }
        $this->set(compact('settings'));
    }
}
