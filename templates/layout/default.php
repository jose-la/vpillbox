<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            <?= $cakeDescription ?>:
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta(
                'favicon.ico',
                '/favicon.ico.png',
                ['type' => 'icon']
            );
        ?>

        <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

        <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body>
        <nav class="top-nav">
            <div class="top-nav-title">
                <a>V<span>Pillbox</span></a>
                <!-- href="<?= $this->Url->build('/') ?>" -->
            </div>
            <div class="top-nav-links">
                <?php                
                    $session = $this->request->getSession();
                    if ($session->read('Auth.role') === 'medico') {
                        echo $this->Html->link(__('Pacientes'), ['controller' => 'Users', 'action' => 'pacientes']);
                        echo $this->Html->link(__('Usuarios'), ['controller' => 'Users', 'action' => 'index']);
                        echo $this->Html->link(__('F??rmacos'), ['controller' => 'Pastillas', 'action' => 'index']);
                    }
                    
                    // if ($this->Identity->isLoggedIn())
                    // {
                    //     echo $this->Html->link(__('Usuarios'), ['controller' => 'Users'], ['action' => 'index']);
                    //     echo $this->Html->link(__('F??rmacos'), ['controller' => 'Pastillas'], ['action' => 'index']);
                    // }
                ?>
                <!-- <a rel="noopener" href="../Users">Usuarios</a> -->
                <!-- <a rel="noopener" href="../Pastillas">F??rmacos</a> -->
                <!-- <a target="_blank" rel="noopener" href="https://book.cakephp.org/4/">Documentation</a> -->
                <!-- <a target="_blank" rel="noopener" href="https://api.cakephp.org/">API</a> -->
            </div>
        </nav>
        <main class="main">
            <div class="container">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>
        </main>
    </body>
</html>
