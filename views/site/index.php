<?php

use yii\bootstrap4\Html;

$this->title = 'Главная страница';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-sm-9">

        <h1><?= Html::encode($this->title) ?></h1>

        <?php
        foreach ($dataProvider->models as $model) {
            echo $this->render('short', [
                'model' => $model
            ]);
        }
        ?>

    </div>

    <div class="col-sm-3">
        <h1>Категории</h1>
        <ul>
            <?php
            foreach ($categories->models as $category) {
                echo $this->render('/category/show', [
                    'model' => $category
                ]);
            }
            ?>
        </ul>
    </div>
</div>