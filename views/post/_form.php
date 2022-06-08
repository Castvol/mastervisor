<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true])->label('Заголовок') ?>

    <?= $form->field($model, 'category_id')->dropDownList(
        ArrayHelper::map($category, 'id', 'title')
    )->label('Категория') ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6])->label('Содержимое') ?>

    <?= $form->field($model, 'status')->dropDownList(
        ArrayHelper::map([["id" => 0, "status" =>"Нет"], ["id" => 1, "status" =>"Да"]], 'id', 'status')
    )->label('Опубликовать') ?>

    <?= $form->field($model, 'author_id')->dropDownList(
        ArrayHelper::map($authors, 'id', 'username')
    )->label('Автор') ?>

    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
