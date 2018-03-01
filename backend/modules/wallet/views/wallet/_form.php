<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\wallet\models\Wallet */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wallet-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'summa')->textInput() ?>

    <?//= $form->field($model, 'user_id')->textInput() ?>
    <div class="form-group  has-success">
        <label class="control-label" for="user_id">Имя пользователя</label>
        <select id="wallet-user_id" class="form-control" name="Wallet[user_id]">
            <?= \app\components\MenuWidget::widget(['tpl' => 'select_user', 'model' => $model])?>
        </select>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
