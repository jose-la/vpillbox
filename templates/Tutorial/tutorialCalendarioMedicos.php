<html>
    <?= $this->Html->css('tutorial') ?>
    <body>
        <h2>Tutorial Calendario - Médicos</h2>
        <p><strong>1.</strong> La página da la bienvenida al usuario que ha iniciado sesión.</p>
        <p><strong>2.</strong> Aparece un botón <strong>LOG OUT</strong> el cual permite a el/la médico cerrar la sesión e ir directamente al <strong>Log In</strong></p>
        <br>
        <p><strong>3.</strong> A la izquierda aparece el paciente al cual se va a administrar.</p>
        <p><strong>4.</strong> A la derecha hay un botón <strong>ELEGIR PACIENTE</strong> que redirige a la lista de pacientes donde se brinda da la posibilidad de elegir otro paciente a administrar</p>
        <br>
        <p><strong>5.</strong> A la izquierda se encuentra el botón de <strong>VER ASIGNACIONES</strong> el cual mostrará todas las asignaciones que hay en la base de datos.</p>
        <p><strong>6.</strong> A la derecha se encuentra el botón <strong>NUEVA ASIGNACION</strong> que muestra el formulario para crear nuevas asignaciones al usuario que se está administrando.</p>
        <br>
        <h3>En la parte inferior se ve el calendario del paciente elegido con todos los fármacos que se le han asignado</h3>
    </body>
    <br>
    <?php echo $this->Form->button('Volver', ['onclick' =>'history.back ()', 'type' =>'button']); ?>
    <br><br>
</html>