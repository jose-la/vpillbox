<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Asignacion Controller
 *
 * @property \App\Model\Table\AsignacionTable $Asignacion
 * @method \App\Model\Entity\Asignacion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AsignacionController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $asignacion = $this->paginate($this->Asignacion);

        $this->set(compact('asignacion'));
    }

    /**
     * View method
     *
     * @param string|null $id Asignacion id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $asignacion = $this->Asignacion->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('asignacion'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $this->set('idUsuario', $id);
        // CHECKEAR CUANDO SE VAYA A CREAR UNA ASIGNACION, QUE NO SE REPITA, DE 1 ID_USUARIO PUEDE HABER VARIOS ID_FARMACOS, PERO SIN REPETIR EL MISMO, NO PUEDE HABER 2 ASIGANACIONES CON EL MISMO ID_USER Y MISMO ID_FARMACO.
        $asignacion = $this->Asignacion->newEmptyEntity();
        
        $asignaciones = $this->getTableLocator()->get('Asignacion');
        $query = $asignaciones->find();
        
        // $check = false;
        // foreach ($query->all() as $asignacion2) {
        //     // if ($asignacion2->num_ss === $user->num_ss) {
        //     //     $check = true;
        //     //     break;
        //     // }
        // }

        /* if ($check == true) {
            $this->Flash->error(__("Este Numero de la SS ya existe"));
        }elseif ($this->Users->save($user)) {
            $this->Flash->success(__('Usuario creado.'));

            return $this->redirect(['action' => 'index']);
        } */



        $farmacos = $this->getTableLocator()->get('pastillas');
        $queryFarmacos = $farmacos->find();
        $arrayFarmacos = [];
        foreach ($queryFarmacos->all() as $farmaco) {
            array_push($arrayFarmacos, $farmaco);
            $this->set('farmacosCompletos', $arrayFarmacos);
        }

        if ($this->request->is('post')) {
            $asignacion = $this->Asignacion->patchEntity($asignacion, $this->request->getData());
            if ($this->Asignacion->save($asignacion)) {
                $this->Flash->success(__('Asignación creada.'));
                return $this->redirect(['controller' => 'Calendar', 'action' => 'index', $id]);
            }
            $this->Flash->error(__('La asignación no se ha podido crear. Por favor, inténtelo otra vez.'));
        }
        $this->set(compact('asignacion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Asignacion id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $asignacion = $this->Asignacion->get($id, [
            'contain' => [],
        ]);

        $farmacos = $this->getTableLocator()->get('pastillas');
        $query = $farmacos->find();
        $arrayFarmacos = [];
        foreach ($query->all() as $farmaco) {
            array_push($arrayFarmacos, $farmaco);
            $this->set('farmacosCompletos', $arrayFarmacos);
        }

        if ($this->request->is(['patch', 'post', 'put'])) {
            $asignacion = $this->Asignacion->patchEntity($asignacion, $this->request->getData());
            if ($this->Asignacion->save($asignacion)) {
                $this->Flash->success(__('Asignación editada.'));

                return $this->redirect(['controller' => 'Calendar', 'action' => 'index', $id]);
            }
            $this->Flash->error(__('No se ha podido editar la asignación. Por favor, inténtelo otra vez.'));
        }
        $this->set(compact('asignacion'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Asignacion id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $asignacion = $this->Asignacion->get($id);
        if ($this->Asignacion->delete($asignacion)) {
            $this->Flash->success(__('Asignacion borrada correctamente.'));
        } else {
            $this->Flash->error(__('No se ha podido eliminar esta asignacion. Por favor, inténtelo otra vez.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}