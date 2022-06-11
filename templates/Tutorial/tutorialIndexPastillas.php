<html>
    <?= $this->Html->css('tutorial') ?>
    <body>
        <h2>Tutorial Fármacos</h2>
        <li>A la derecha está el botón <strong>NUEVO FÁRMACO</strong> el cual permite a el/la médico crear un nuevo fármaco/medicamento en la base de datos</li>
        <br>
        <h3>En la parte inferior se ve la tabla donde se muestran todos los fármacos de la base de datos con todos sus datos</h3>
        <h4>En la columna de <strong>Acciones</strong> hay distintas opciones sobre dichos fármacos, se pueden Ver, Editar o Eliminar</h4>
    </body>
    <br>
    <?php echo $this->Form->button('Volver', ['onclick' =>'history.back ()', 'type' =>'button']); ?>
    <br><br>
</html>