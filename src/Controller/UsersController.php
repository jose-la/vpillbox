<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;
// use Illuminate\Support\Facades\Auth;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $session = $this->request->getSession();
        if ($session->read('Auth.role') !== 'medico') {  
            $redirect = $this->request->getQuery('redirect', [
                'controller' => 'Calendar',
                'action' => 'index',
            ]);
            return $this->redirect($redirect);
        }else{
            $users = $this->paginate($this->Users);
            // $user = Auth::user();
            $this->set(compact('users'));
        }
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        
        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        
        $users = $this->getTableLocator()->get('Users');
        $query = $users->find();
        
        $medico = [];
        foreach ($query->all() as $usuario) {
            if ($usuario->role === "medico") {
                array_push($medico, $usuario);
                $this->set('medicoAsignado', $medico);
            }
        }

        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            
            $check = false;
            foreach ($query->all() as $usuario) {
                if ($usuario->num_ss === $user->num_ss) {
                    $check = true;
                    break;
                }
            }
            
            if ($check == true) {
                $this->Flash->error(__("Este Numero de la SS ya existe"));
            }elseif ($this->Users->save($user)) {
                $this->Flash->success(__('Usuario creado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El usuario no se ha podido crear. Inténtelo más tarde, por favor.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $users = $this->getTableLocator()->get('Users');
        $query = $users->find();
        $medico = [];
        foreach ($query->all() as $usuario) {
            if ($usuario->role === "medico") {
                array_push($medico, $usuario);
                $this->set('medicoAsignado', $medico);
            }
        }

        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());

            $imagenTemp = $this->request->getData("imagen");
            if ($imagenTemp) {
                // HACER LO DE LA IMAGEN, REVISAR SI FUNCIONA SIN ESTO
                echo "ok";
            }

            $check = false;
            foreach ($query->all() as $usuario) {
                if ($usuario->num_ss === $user->num_ss) {
                    $check = true;
                    break;
                }
            }
            
            if ($check == true) {
                $this->Flash->error(__("Este Numero de la SS ya existe"));
            }elseif ($this->Users->save($user)) {
                $this->Flash->success(__('Usuario editado.'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('El usuario no se ha podido editar. Inténtelo más tarde, por favor.'));
            

            // Check if image file is a actual image or fake image
            /* $check = getimagesize($this->request->getData('imagen'));
            echo $check;
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            } */

            // Check if file already exists
            /* if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            } */
            
            // Check file size
            /* if ($this->request->getData('imagen')["size"] > 1000000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            } */
            
            // Allow certain file formats
            /* if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                echo "Sorry, only JPG, JPEG & PNG files are allowed.";
                $uploadOk = 0;
            } */

            // Check if $uploadOk is set to 0 by an error
            /* if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($this->request->getData('imagen'), $target_file)) {
                    echo "The file ". htmlspecialchars( basename( $this->request->getData('imagen'))). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            } */


            // $target_dir = "/img/usuarios/";
            // $target_file = $target_dir . basename($this->request->getData('imagen'));
            // $uploadOk = 1;
            // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // echo $target_file . "<br>";
            // echo $imageFileType . "<br>";

            // echo "-----------------------------------------------------------------------------------------------------------";
            // echo $this->Form->create($document, ['enctype' => 'multipart/form-data']);
            // echo $this->Form->file('submittedfile');

            // function beforeMarshal(\Cake\Event\EventInterface $event, \ArrayObject $data, \ArrayObject $options)
            // {
            //     if ($data['submittedfile'] === '') {
            //         unset($data['submittedfile']);
            //     }
            // }
            // $fileobject = $this->request->getData('submittedfile');
            // $destination = UPLOAD_DIRECTORY . $fileobject->getClientFilename();

            // // Existing files with the same name will be replaced.
            // $fileobject->moveTo($destination);

            
            // if ($this->request->is('post')) {
            //     $fileobject = $this->request->getData('imagen');
            //     $uploadPath = '../uploads/';
            //     $destination = $uploadPath.$fileobject->getClientFilename();
            //     // Existing files with the same name will be replaced.
            //     $fileobject->moveTo($destination);
            // }
        }
        $this->set(compact('user'));
    }

    /* public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuario editado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El usuario no se ha podido editar. Inténtelo más tarde, por favor.'));
        }
        $this->set(compact('user'));
    } */

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('Usuario eliminado.'));
        } else {
            $this->Flash->error(__('El usuario no se ha podido eliminar. Inténtelo más tarde, por favor.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login()
    {
        $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();
        if ($result->isValid()) {
            $users = $this->getTableLocator()->get('Users');
            $query = $users->find("all", array('conditions'=>array('Users.num_ss'=>$_POST['num_ss'])));
            foreach ($query->all() as $usuario) {
                if ($usuario->role === 'medico') {
                    $redirect = $this->request->getQuery('redirect', [
                        'controller' => 'Users',
                        'action' => 'pacientes'
                    ]);
                    return $this->redirect($redirect);
                }else{
                    $redirect = $this->request->getQuery('redirect', [
                        'controller' => 'Calendar',
                        'action' => 'index',
                        $usuario->id
                    ]);
                    return $this->redirect($redirect);
                }
            }
        }
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('Numero de SS o contraseña inválida'));
        }
    }

    public function pacientes($id = null) {
        $users = $this->paginate($this->Users);
        $this->set(compact('users'));
    }

    /* public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        
        $this->set(compact('user'));
    } */

    public function logout()
    {
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result->isValid()) {
            $this->Authentication->logout();
            return $this->redirect(['controller' => 'Users', 'action' => 'login']);
        }
    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['login']);
    }




    

    // Check if image file is a actual image or fake image
    /* if(isset($_POST["submit"])) {
        // $target_dir = "\img\usuarios";
        $target_dir = "/img/usuarios";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

        if($check !== false) {
        echo "El archivo es una imagen - " . $check["mime"] . ".";
        $uploadOk = 1;
        } else {
        echo "El archivo no es una imagen.";
        $uploadOk = 0;
        }
    

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Lo siento, el archivo seleccionado ya existe.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 1000000) {
            echo "Lo siento, su foto pesa demasiado.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            // echo "Lo siento, solo se permiten archivos JPG, JPEG & PNG.";
            $uploadOk = 0;
        }
        var_dump($imageFileType);
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            } else {
            echo "Sorry, there was an error uploading your file.";
            }
        }

    }

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload" id="submit" name="submit">
    </form>
 */


}
