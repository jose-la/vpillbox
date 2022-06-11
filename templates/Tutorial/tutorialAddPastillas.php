<html>
    <?= $this->Html->css('tutorial') ?>
    <body>
        <h2>Tutorial Crear Fármacos</h2>
        <h3>En la parte inferior hay un formulario a rellenar con los datos del nuevo fármaco que se quiere crear en el sistema. Se le deben establecer los siguientes datos:</h3>
        <li>Marca</li>
        <li>Tipo de Fármaco</li>
        <li>Color</li>
        <li>Peso</li>
        <li>Observaciones que se le quieran establecer</li>
        <li>Imagen (opcional)</li>
    </body>
    <br>
    <?php echo $this->Form->button('Volver', ['onclick' =>'history.back ()', 'type' =>'button']); ?>
    <br><br>
</html>