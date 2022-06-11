<html>
    <?= $this->Html->css('tutorial') ?>
    <body>
        <h2>Tutorial Usuarios</h2>
        <li>A la derecha está el botón <strong>NUEVO USUARIO</strong> el cual permite a el/la médico crear un nuevo usuario en la base de datos para su posterior administración</li>
        <br>
        <h3>En la parte inferior se ve la tabla donde se muestran todos los usuarios de la base de datos con todos sus datos</h3>
        <h4>En la columna de <strong>Acciones</strong> hay distintas opciones sobre dichos usuarios, se pueden Ver, Editar o Eliminar</h4>
    </body>
    <br>
    <?php echo $this->Form->button('Volver', ['onclick' =>'history.back ()', 'type' =>'button']); ?>
    <br><br>
</html>