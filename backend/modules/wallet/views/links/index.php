<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Links';
$this->params['breadcrumbs'][] = $this->title;



?>


<div class="links-index">

    <h1><?= Html::encode('Таблица ссылок') ?></h1>

    <p>
        <?= Html::a('Добавить ссылку', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'cost',
            //'user_id',
            [
                'attribute' => 'user_id',
                'value' => function($data){
                     return $data->user->username;
                },
            ],
            [
                'attribute' => 'Генерация ссылки',
                'value' => function($data){
                    return \yii\helpers\Url::to(['/wallet/handler/index', 'id' => $data->id]);
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
