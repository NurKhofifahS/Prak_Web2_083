<?php

namespace app\controllers;

class MahasiswaController extends \yii\web\Controller
{
    public function actionUbahBiodata()
    {
        return $this->render('ubah-biodata');
    }
}
