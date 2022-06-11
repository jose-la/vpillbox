<html>
    <?= $this->Html->css('tutorial') ?>
    <body>
        <h2>Tutorial Asignaciones</h2>
        <h3>En la parte inferior se ve la tabla donde se muestran todas las asignaciones de fármacos a los usuarios de la base de datos con todos sus datos</h3>
        <h4>En la columna de <strong>Acciones</strong> hay distintas opciones sobre dichas asignaciones, se pueden Ver, Editar o Eliminar</h4>
    </body>
    <br>
    <?php echo $this->Form->button('Volver', ['onclick' =>'history.back ()', 'type' =>'button']); ?>
    <br><br>
</html>