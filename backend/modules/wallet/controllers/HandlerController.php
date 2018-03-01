<?php

namespace app\modules\wallet\controllers;

use Yii;
use yii\web\Controller;
use app\modules\wallet\models\Links;
use app\modules\wallet\models\Wallet;

class HandlerController extends Controller
{
    public function actionIndex()
    {
         if(Yii::$app->request->get('id')){
             $linkModels = Links::findOne(Yii::$app->request->get('id'));
             $walletModel =  Wallet::findOne($linkModels->user_id);
             if(($walletModel->summa - $linkModels->cost) >= 0){
                 $walletModel->summa -= $linkModels->cost;
                 $walletModel->save();
                 echo "Средства списаны на сумму - $linkModels->cost.<br>";
                 echo "Остаток суммы - $walletModel->summa";
             }else{
                 echo "Недостаточно средств!";
             }
         }
        //return $this->render('index');
    }

}
