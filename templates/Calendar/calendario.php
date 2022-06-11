<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
echo $this->Html->css('calendario');
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
                echo "<h3><strong>Paciente: </strong>" . h($pacientes) . "</h3>";
            }
            echo $this->Html->link(__('Ver Asignaciones'), ['controller' => 'Asignacion', 'action' => 'index'], ['class' => 'button']);
        ?>
        <?= $this->Html->link(__('Nueva Asignacion'), ['controller' => 'Asignacion', 'action' => 'add', $idPaciente], ['class' => 'button float-right']) . "<br><br>" ?>

        <?php
            }
        ?>

        <div id="principal">
            <table id="tablaAsignaciones" border=1>
                <thead>
                    <tr>
                        <th style="text-align: center; width: 180px;">Lunes</th>
                        <th style="text-align: center; width: 180px;">Martes</th>
                        <th style="text-align: center; width: 180px;">Miercoles</th>
                        <th style="text-align: center; width: 180px;">Jueves</th>
                        <th style="text-align: center; width: 180px;">Viernes</th>
                        <th style="text-align: center; width: 180px;">Sabado</th>
                        <th style="text-align: center; width: 180px;">Domingo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        echo "<tr>";
                        $lunes = "";
                        $martes = "";
                        $miercoles = "";
                        $jueves = "";
                        $viernes = "";
                        $sabado = "";
                        $domingo = "";

                        foreach ($asignaciones as $asignacion) {
                            if ($idPaciente == $asignacion->id_user) {
                                if ($asignacion->dias == "lunes") {
                                    foreach ($farmacos as $farmaco) {
                                        if ($farmaco->id_pastillas == $asignacion->id_farmacos) {
                                            $lunes = $lunes . "<div id='asignacion'><div>
                                                <div id='datos1'>" . h($farmaco->marca) . ", " . h($farmaco->peso) . "<br>" . "</div>
                                                <div id='datos2'>" . "Color: " . h($farmaco->color) . "<br>" . "</div>"
                                                . "<div id='datos3'>" . h($asignacion->tomas) . " tomas al día" . "<br>" . "</div>" .
                                            "</div></div>" . "<br>";
                                        }
                                    }
                                }elseif ($asignacion->dias == "martes") {
                                    foreach ($farmacos as $farmaco) {
                                        if ($farmaco->id_pastillas == $asignacion->id_farmacos) {
                                            $martes = $martes . "<div id='asignacion'><div>
                                                <div id='datos1'>" . h($farmaco->marca) . ", " . h($farmaco->peso) . "<br>" . "</div>
                                                <div id='datos2'>" . "Color: " . h($farmaco->color) . "<br>" . "</div>"
                                                . "<div id='datos3'>" . h($asignacion->tomas) . " tomas al día" . "<br>" . "</div>" .
                                            "</div></div>" . "<br>";
                                        }
                                    }
                                }elseif ($asignacion->dias == "miercoles") {
                                    foreach ($farmacos as $farmaco) {
                                        if ($farmaco->id_pastillas == $asignacion->id_farmacos) {
                                            $miercoles = $miercoles . "<div id='asignacion'><div>
                                                <div id='datos1'>" . h($farmaco->marca) . ", " . h($farmaco->peso) . "<br>" . "</div>
                                                <div id='datos2'>" . "Color: " . h($farmaco->color) . "<br>" . "</div>"
                                                . "<div id='datos3'>" . h($asignacion->tomas) . " tomas al día" . "<br>" . "</div>" .
                                            "</div></div>" . "<br>";
                                        }
                                    }
                                }elseif ($asignacion->dias == "jueves") {
                                    foreach ($farmacos as $farmaco) {
                                        if ($farmaco->id_pastillas == $asignacion->id_farmacos) {
                                            $jueves = $jueves . "<div id='asignacion'><div>
                                                <div id='datos1'>" . h($farmaco->marca) . ", " . h($farmaco->peso) . "<br>" . "</div>
                                                <div id='datos2'>" . "Color: " . h($farmaco->color) . "<br>" . "</div>"
                                                . "<div id='datos3'>" . h($asignacion->tomas) . " tomas al día" . "<br>" . "</div>" .
                                            "</div></div>" . "<br>";
                                        }
                                    }
                                }elseif ($asignacion->dias == "viernes") {
                                    foreach ($farmacos as $farmaco) {
                                        if ($farmaco->id_pastillas == $asignacion->id_farmacos) {
                                            $viernes = $viernes . "<div id='asignacion'><div>
                                                <div id='datos1'>" . h($farmaco->marca) . ", " . h($farmaco->peso) . "<br>" . "</div>
                                                <div id='datos2'>" . "Color: " . h($farmaco->color) . "<br>" . "</div>"
                                                . "<div id='datos3'>" . h($asignacion->tomas) . " tomas al día" . "<br>" . "</div>" .
                                            "</div></div>" . "<br>";
                                        }
                                    }
                                }elseif ($asignacion->dias == "sabado") {
                                    foreach ($farmacos as $farmaco) {
                                        if ($farmaco->id_pastillas == $asignacion->id_farmacos) {
                                            $sabado = $sabado . "<div id='asignacion'><div>
                                                <div id='datos1'>" . h($farmaco->marca) . ", " . h($farmaco->peso) . "<br>" . "</div>
                                                <div id='datos2'>" . "Color: " . h($farmaco->color) . "<br>" . "</div>"
                                                . "<div id='datos3'>" . h($asignacion->tomas) . " tomas al día" . "<br>" . "</div>" .
                                            "</div></div>" . "<br>";
                                        }
                                    }
                                }elseif ($asignacion->dias == "domingo") {
                                    foreach ($farmacos as $farmaco) {
                                        if ($farmaco->id_pastillas == $asignacion->id_farmacos) {
                                            $domingo = $domingo . "<div id='asignacion'><div>
                                                <div id='datos1'>" . h($farmaco->marca) . ", " . h($farmaco->peso) . "<br>" . "</div>
                                                <div id='datos2'>" . "Color: " . h($farmaco->color) . "<br>" . "</div>"
                                                . "<div id='datos3'>" . h($asignacion->tomas) . " tomas al día" . "<br>" . "</div>" .
                                            "</div></div>" . "<br>";
                                        }
                                    }
                                }
                            }
                        }

                        if (empty($lunes)) {
                            echo "<td></td>";
                        }else{
                            echo "<td style='text-aling: center; width: 170px;'>$lunes</td>";
                        }
                        if (empty($martes)) {
                            echo "<td></td>";
                        }else{
                            echo "<td style='text-aling: center; width: 170px;'>$martes</td>";
                        }
                        if (empty($miercoles)) {
                            echo "<td></td>";
                        }else{
                            echo "<td style='text-aling: center; width: 170px;'>$miercoles</td>";
                        }
                        if (empty($jueves)) {
                            echo "<td></td>";
                        }else{
                            echo "<td style='text-aling: center; width: 170px;'>$jueves</td>";
                        }
                        if (empty($viernes)) {
                            echo "<td></td>";
                        }else{
                            echo "<td style='text-aling: center; width: 170px;'>$viernes</td>";
                        }
                        if (empty($sabado)) {
                            echo "<td></td>";
                        }else{
                            echo "<td style='text-aling: center; width: 170px;'>$sabado</td>";
                        }
                        if (empty($domingo)) {
                            echo "<td></td>";
                        }else{
                            echo "<td style='text-aling: center; width: 170px;'>$domingo</td>";
                        }
                        echo "</tr>";
                    ?>
                </tbody>
            </table>
        </div>

        <?php
            $session = $this->request->getSession();
            if ($session->read('Auth.role') === 'medico') {
                echo $this->Html->link(__('Tutorial'), ['controller' => 'Tutorial', 'action' => 'tutorialcalendariomedicos'], ['class' => 'button float-right']);
            }else{
                echo $this->Html->link(__('Tutorial'), ['controller' => 'Tutorial', 'action' => 'tutorialcalendariopacientes'], ['class' => 'button float-right']);
            }
        ?>
    </body>
</html>