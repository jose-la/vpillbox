<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from templates/Pages/
 *
 * @link https://book.cakephp.org/4/en/controllers/pages-controller.html
 */
class CalendarController extends AppController
{
    public function index($id = null)
    {
        $this->set('idPaciente', $id);
        $queryUsers = $this->getTableLocator()->get('Users');
        $query = $queryUsers->find();
        $pacientes = [];
        foreach ($query->all() as $usuario) {
            array_push($pacientes, $usuario);
            $this->set('paciente', $pacientes);
        }

        $queryAsignacion = $this->getTableLocator()->get('Asignacion');
        $query2 = $queryAsignacion->find();
        $arrayAsignacion = [];
        foreach ($query2->all() as $asignacion) {
            array_push($arrayAsignacion, $asignacion);
            $this->set('asignaciones', $arrayAsignacion);
        }

        $queryFarmacos = $this->getTableLocator()->get('Pastillas');
        $query3 = $queryFarmacos->find();
        $farmacos = [];
        foreach ($query3->all() as $farmaco) {
            array_push($farmacos, $farmaco);
            $this->set('farmacos', $farmacos);
        }
    }

    public function logout()
    {
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result->isValid()) {
            $this->Authentication->logout();
            return $this->redirect(['controller' => 'Users', 'action' => 'login']);
        }
    }
}
