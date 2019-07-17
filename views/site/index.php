<?php

/* @var $this yii\web\View */

use yii\bootstrap\Html;

?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Selamat Datang!</h1>

        <p class="lead">Sistem Informasi Pengelolaan Anggaran SMP NU</p>
        <p>
            <?php
            if(Yii::$app->user->isGuest){
                echo a('Silahkan Login Untuk Memulai',['login'],['class' => 'btn btn-lg btn-success']);
            }
            ?>

        </p>
    </div>

    <div class="body-content">
    </div>
</div>
