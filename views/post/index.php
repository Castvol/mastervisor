<?php

use yii\bootstrap4\Html;

$this->title = 'Все посты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-sm-9">

        <h1>
            <?= $this->title ?>
            <?= Html::a('Добавить пост', ['post/create'], ['class' => 'btn btn-success float-right']) ?>
        </h1>

        <?php
        foreach ($post->models as $model) {
            echo $this->render('/layouts/short', [
                'model' => $model
            ]);
        }
        ?>

    </div>


    <div class="col-sm-3">
        <h1>Категории</h1>
        <div class="list-group list-group-flush">
            <?php
            foreach ($categories as $cats) {
                echo \yii\helpers\Html::a($cats->title, ['category/view', 'id' => $cats->id], ['class' => 'list-group-item list-group-item-action']);
            }
            ?>
        </div>
    </div>
</div>