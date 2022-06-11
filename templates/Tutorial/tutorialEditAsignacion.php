<html>
    <?= $this->Html->css('tutorial') ?>
    <body>
        <h2>Tutorial Editar Asignaciones</h2>
        <h3>El ID del usuario no se puede editar pues la edición de dicha asignación se hará en función del usuario</h3>
        <h3>Se pueden editar datos de las asignaciones como son:</h3>
        <li>el Fármaco a tomar</li>
        <li>Día a tomar el medicamente</li>
        <li>cuantas Tomas al día</li>
    </body>
    <br>
    <?php echo $this->Form->button('Volver', ['onclick' =>'history.back ()', 'type' =>'button']); ?>
    <br><br>
</html>