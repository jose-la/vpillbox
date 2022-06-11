<html>
    <?= $this->Html->css('tutorial') ?>
    <body>
        <h2>Tutorial Editar Usuarios</h2>
        <li>Normal: A la derecha está el botón <strong>AVANZADO</strong> que muestra datos más avanzados a editar del usuario</li>
        <li>Avanzado: A la derecha está el botón <strong>CERRAR</strong> que cierra el modo avanzado de edición y vuelve al estándar</li>
        <br>
        <h4>En cuanto a la edición:</h4>
        <li>Normal: Se pueden editar datos del usuario como son: Nombre, Apellidos, Número de Teléfono, el Role del usuario, y el Médico Asignado</li>
        <li>Avanzado: Se pueden editar datos más avanzados como: la Contraseña, el Número de la Seguridad Social (tiene que ser único) y la foto del Usuario</li>
    </body>
    <br>
    <?php echo $this->Form->button('Volver', ['onclick' =>'history.back ()', 'type' =>'button']); ?>
    <br><br>
</html>