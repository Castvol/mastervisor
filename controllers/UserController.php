<?php

namespace app\controllers;

use app\models\Category;
use app\models\User;
use yii\data\ActiveDataProvider;

class UserController extends \yii\web\Controller
{
    public function actionView($id)
    {
        $user = User::findOne(['id' => $id]);
        $post = $user->getPosts($id);
        return $this->render('/user/view', [
            'post' => $post,
            'user' => $user,
            'categories' => Category::find()->all(),
        ]);
    }

}
