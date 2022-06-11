<html>
    <?= $this->Html->css('tutorial') ?>
    <body>
        <h2>Tutorial Editar Fármacos</h2>
        <h3>Se pueden editar datos de los fármacos como son:</h3>
        <li>Marca del Fármaco</li>
        <li>Tipo de fármaco</li>
        <li>Color</li>
        <li>Peso</li>
        <li>Observaciones sobre el mismo</li>
        <li>Foto del fármaco (opcional)</li>
    </body>
    <br>
    <?php echo $this->Form->button('Volver', ['onclick' =>'history.back ()', 'type' =>'button']); ?>
    <br><br>
</html>