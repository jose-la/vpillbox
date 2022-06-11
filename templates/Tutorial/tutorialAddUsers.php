<html>
    <?= $this->Html->css('tutorial') ?>
    <body>
        <h2>Tutorial Crear Usuarios</h2>
        <h3>En la parte inferior hay un formulario a rellenar con los datos del nuevo usuario que se quiere crear en el sistema. Se le deben establecer los siguientes datos:</h3>
        <li>Nombre</li>
        <li>Apellidos</li>
        <li>Contraseña</li>
        <li>Número de la Seguridad Social (ha de ser único, no puede existir en la Base de Datos)</li>
        <li>Número de Teléfono</li>
        <li>Role de Usuario</li>
        <li>Médico Asignado</li>
        <li>Una foto del Usuario (opcional)</li>
    </body>
    <br>
    <?php echo $this->Form->button('Volver', ['onclick' =>'history.back ()', 'type' =>'button']); ?>
    <br><br>
</html>