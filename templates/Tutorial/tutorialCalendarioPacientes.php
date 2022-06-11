<html>
    <?= $this->Html->css('tutorial') ?>
    <body>
        <h2>Tutorial Calendario</h2>
        <p><strong>1.</strong> La página da la bienvenida al usuario que ha iniciado sesión.</p>
        <p><strong>2.</strong> A la derecha aparece un botón <strong>LOG OUT</strong> el cual le permite cerrar la sesión e ir directamente al <strong>Inicio de Sesión</strong></p>
        <br>
        <h3>En la parte inferior se ve el calendario donde están todos los fármacos que le han sido asignados cada día</h3>
    </body>
    <br>
    <?php echo $this->Form->button('Volver', ['onclick' =>'history.back ()', 'type' =>'button']); ?>
    <br><br>
</html>