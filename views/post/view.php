<?php

use yii\bootstrap4\Html;

$this->params['breadcrumbs'][] = [
        'url' => '/category/view?id=' . $model->category->id,
        'label' => $model->category->title
];
$this->params['breadcrumbs'][] = $model->title;
?>

<div class="row">
    <div class="col-sm-9">
        <h1><?= Html::encode($model->title) ?></h1>
        <div class="card mb-3">
            <div class="card-body">
                <?= $model->content ?>
            </div>
            <div class="card-footer text-muted">
                Автор: <a href="/user/view?id=<?= $model->author->id ?>"><?= $model->author->username ?></a>
                || Дата публикации: <?= $model->updated_at ?>
                <a href="/category/view?id=<?= $model->category->id ?>" class="badge badge-info float-right"><?= $model->category->title ?></a>
            </div>
        </div>

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