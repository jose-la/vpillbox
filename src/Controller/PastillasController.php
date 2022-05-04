<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Pastillas Controller
 *
 * @method \App\Model\Entity\Pastilla[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PastillasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $pastillas = $this->paginate($this->Pastillas);

        $this->set(compact('pastillas'));
    }

    /**
     * View method
     *
     * @param string|null $id Pastilla id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pastilla = $this->Pastillas->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('pastilla'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pastilla = $this->Pastillas->newEmptyEntity();
        if ($this->request->is('post')) {
            $pastilla = $this->Pastillas->patchEntity($pastilla, $this->request->getData());
            if ($this->Pastillas->save($pastilla)) {
                $this->Flash->success(__('Fármaco añadido.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El fármaco no se ha podido añadir. Inténtelo más tarde, por favor.'));
        }
        $this->set(compact('pastilla'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pastilla id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pastilla = $this->Pastillas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pastilla = $this->Pastillas->patchEntity($pastilla, $this->request->getData());
            if ($this->Pastillas->save($pastilla)) {
                $this->Flash->success(__('Fármaco editado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El fármaco no se ha podido editar. Inténtelo más tarde, por favor.'));
        }
        $this->set(compact('pastilla'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pastilla id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pastilla = $this->Pastillas->get($id);
        if ($this->Pastillas->delete($pastilla)) {
            $this->Flash->success(__('Fármaco eliminado.'));
        } else {
            $this->Flash->error(__('El fármaco no se ha podido eliminar. Inténtelo más tarde, por favor.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
