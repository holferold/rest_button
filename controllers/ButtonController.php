<?php
namespace app\controllers;
 
use yii\rest\ActiveController;
 
class ButtonController extends ActiveController
{
    public $modelClass = 'app\models\Button';
 
    public function behaviors()
    {
        return 
        \yii\helpers\ArrayHelper::merge(parent::behaviors(), [
            'corsFilter' => [
                'class' => \yii\filters\Cors::className(),
            ],
        ]);
    }
}