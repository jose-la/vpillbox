<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
echo $this->Html->css('calendario');
echo $this->Html->script('calendario');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?= $this->Html->link(__('Log Out'), ['action' => 'logout'], ['class' => 'button float-right']) ?>
        <?php
            $arrayPacientes = [];
            foreach ($paciente as $value) {
                if ($value->id == $idPaciente) {
                    $arrayPacientes += [h($value->id) => h($value->nombre) . " " . h($value->apellidos)];
                }
            }
        ?>
        <h3>Bienvenid@ <strong><?= $this->Identity->get('nombre'); ?> <?= $this->Identity->get('apellidos'); ?></strong></h3>
        <?php
            $session = $this->request->getSession();
            if ($session->read('Auth.role') === 'medico') {
                echo $this->Html->link(__('Elegir Paciente'), ['controller' => 'Users', 'action' => 'pacientes'], ['class' => 'button float-right']);
        ?>
        
        <?php
            foreach ($arrayPacientes as $pacientes) {
                echo "<h3><strong>Usuario: </strong>" . h($pacientes) . "</h3>";
            }
            echo $this->Html->link(__('Ver Asignaciones'), ['controller' => 'Asignacion', 'action' => 'index'], ['class' => 'button']);
        ?>
        <?= $this->Html->link(__('Nueva Asignacion'), ['controller' => 'Asignacion', 'action' => 'add', $idPaciente], ['class' => 'button float-right']) ?>

        <?php
            }
        ?>

        <br><br>
        <div id="containerAgregarFarmaco">
            <form>
                <div id="parteArribaFormulario">
                    <div id="divFarmaco" class="form-group">
                        <label for="farmaco" class="control-label">Fármaco</label>
                        <?php
                            // AQUI HAY QUE HACER UNA CONSULTA A LA BD PARA HACER UN SELECT CON LOS NOMBRES DE LOS FARMACOS, Y QUE DE ESE NOMBRE SE GUARDE EL ID PARA LUEGO A TRAVÉS DE DICHO ID MOSTRAR TODA LA INFORMACIÓN QUE QUIERA EN EL CALENDARIO, NO UN SELECT CON TIPOS
                            /* $options = [
                                'defecto' => '-Seleccione un fármaco-',
                                'Analgesicos' => 'Analgesicos',
                                'Antiacidos' => 'Antiacidos',
                                'Antialergicos' => 'Antialergicos',
                                'Laxantes' => 'Laxantes',
                                'Antiinfecciosos' => 'Antiinfecciosos',
                                'Antiinflamatorios' => 'Antiinflamatorios'
                            ];
                            echo $this->Form->select('tipo', $options, ['disabled' => ['defecto']]); */
                        ?>
                    </div>
                    
                    <div id="divTiempo">
                        <label for="tiempo" class="control-label">¿Cada cuánto?</label>
                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                        <div class="col-md-8">
                            <input id="phone" name="phone" type="text" placeholder="¿Cada cuánto?" class="form-control">
                        </div>
                    </div>
                </div>

                <div id="dias" class="form-check" style="margin-bottom: 20px;">
                    <label style="margin-bottom: 0px; margin-top: 10px;">Días</label>
                    <table style="margin-top: 0px;">
                        <tr>
                            <td>
                                <label for="lunesCheck">
                                    <input type="checkbox" name="lunes" value="lunes" id="lunesCheck"/> Lunes
                                </label>
                            </td>
                            <td>
                                <label for="martesCheck">
                                    <input type="checkbox" name="martes" value="martes" id="martesCheck"/> Martes
                                </label>
                            </td>
                            <td>
                                <label for="miercolesCheck">
                                    <input type="checkbox" name="miercoles" value="miercoles" id="miercolesCheck"/> Miercoles
                                </label>
                            </td>
                            <td>
                                <label for="juevesCheck">
                                    <input type="checkbox" name="jueves" value="jueves" id="juevesCheck"/> Jueves
                                </label>
                            </td>
                            <td>
                                <label for="viernesCheck">
                                    <input type="checkbox" name="viernes" value="viernes" id="viernesCheck"/> Viernes
                                </label>
                            </td>
                            <td>
                                <label for="sabadoCheck">
                                    <input type="checkbox" name="sabado" value="sabado" id="sabadoCheck"/> Sabado
                                </label>
                            </td>
                            <td>
                                <label for="domingoCheck">
                                    <input type="checkbox" name="domingo" value="domingo" id="domingoCheck"/> Domingo
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>
                
                <div class="botonAgregarFarmaco">
                    <button type="submit" style="font-size: 16px;" value="Agregar" onclick="agregarFarmaco(this)" class="agregarFarmaco">Agregar</button>
                </div>
                <div class="cerrarContainer">
                    <input type="button" style="font-size: 16px;" value="Cerrar" onclick="cerrarContainer()"/>
                </div>
            </form>
        </div>

        <style>
            #asignacion {
                background-color: #d33c43;
                width: 160px;
                height: 80px;
                text-align:center;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 10px;
            }
            #datos1 {
                background-color: white;
                width: auto;
                height: auto;
                border-radius: 4px;
            }
            #datos2 {
                background-color: white;
                margin-top: 10px;
                border-radius: 5px;
            }
            #botonDatos {
                height: auto;
            }
            #pDatos {
                color: #606c76;
                letter-spacing: .01em;
                line-height: 1.6;
                font-size: 1.6em;
            }
            /* #tdAsignacion {
                width: 160px;
                height: 80px;
            } */
        </style>

        <div id="principal">
            <!-- <input type="button" style="margin-bottom: 30px;" value="Agregar Fármaco" onclick="agregarFarmaco()"/> -->
            <table>
                <thead>
                    <tr>
                        <th>Horas</th>
                        <th>Lunes</th>
                        <th>Martes</th>
                        <th>Miercoles</th>
                        <th>Jueves</th>
                        <th>Viernes</th>
                        <th>Sabado</th>
                        <th>Domingo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $days = ["l","m","x","j","v","s","d"];
                        for ($h=0; $h < 24; $h++) { 
                            echo "<tr>";
                            echo "<td>$h:00</td>";
                            foreach ($days as $dia) {
                                echo "<td>ok</td>";
                            }
                            echo "</tr>";
                        }

                        // foreach ($asignaciones as $asignacion) {
                        //     if ($idPaciente == $asignacion->id_user) {
                        //         echo $asignacion->id_user . " - ";
                        //         if ($asignacion->dias == $dia) {
                        //             echo "<td>ok</td>";
                        //         }else{
                        //             echo "<td></td>";
                        //         }
                        //     }
                        // }
                        
                        // foreach ($asignaciones as $asignacion) {
                        //     if ($idPaciente == $asignacion->id_user) {
                        //         if ($asignacion->dias == $dia) {
                        //             echo "<td>ok</td>";
                        //         }
                        //     }
                        // }
                    ?>
                </tbody>
            </table>
        </div>



        <?php
            foreach ($asignaciones as $asignacion) {
                if ($idPaciente == $asignacion->id_user) {
                    for ($i=0; $i < $asignacion->tomas; $i++) { 
        ?>
            <tr>
                <div id="asignacion">
                    <div>
                        <div id="datos1">
                            <?php
                                foreach ($farmacos as $farmaco) {
                                    if ($farmaco->id_pastillas == $asignacion->id_farmacos) {
                                        echo h($farmaco->marca) . ", " . h($farmaco->peso) . "<br>";
                            ?>
                        </div>
                        <div id="datos2">
                            <?php
                                        echo "Color: " . h($farmaco->color) . " - " . $asignacion->dias . "<br>";
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </tr>
        <?php
                    }
                }
            }
            echo "-------------------------------------------------------";
        ?>
        <!-- HACER QUE HAGA TANTAS FILAS (TR) EN FUNCION DE CUANTAS TOMAS AL DIA SON, Y TDs EN FUNCION DEL DIA DE LA SEMANA
        LUNES: FARMACO+TD+TD+TD+TD+TD+TD
        MARTES: TD+FARMACO+TD+TD+TD+TD+TD
        ... -->



        <?php
            foreach ($asignaciones as $asignacion) {
                if ($idPaciente == $asignacion->id_user) {
                    for ($i=0; $i < $asignacion->tomas; $i++) { 
        ?>
            <div id="asignacion">
                <div>
                    <div id="datos1">
                        <?php
                            foreach ($farmacos as $farmaco) {
                                if ($farmaco->id_pastillas == $asignacion->id_farmacos) {
                                    echo h($farmaco->marca) . ", " . h($farmaco->peso) . "<br>";
                        ?>
                    </div>
                    <div id="datos2">
                        <?php
                                    echo "Color: " . h($farmaco->color) . "<br>";
                                }
                            }
                        ?>
                    </div>
                </div>
            </div><br>
        <?php
                    }
                }
            }
        ?>
        
        <?= $this->Html->link(__('Tutorial'), ['controller' => 'Tutorial', 'action' => 'tutorialcalendariomedicos'], ['class' => 'button float-right']) ?>
    </body>
</html>