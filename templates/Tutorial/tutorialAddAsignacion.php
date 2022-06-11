<html>
    <?= $this->Html->css('tutorial') ?>
    <body>
        <h2>Tutorial Crear Asignacion</h2>
        <h3>En la parte inferior hay un formulario a rellenar con los datos de la nueva asignación que se quiere crear en funcion del usuario que se está administrando. Se le deben establecer los siguientes datos:</h3>
        <li>Fármaco</li>
        <li>Día que se va a tomar</li>
        <li>Tomas al día del fármaco</li>
        <h4>El ID de Usuario no se puede elegir pues la nueva asignación va en función del usuario ya elegido previamente.</h4>
    </body>
    <br>
    <?php echo $this->Form->button('Volver', ['onclick' =>'history.back ()', 'type' =>'button']); ?>
    <br><br>
</html>