<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\wallet\models\Links */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="links-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cost')->textInput() ?>

    <?//= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <label class="control-label" for="user_id">Имя пользователя</label>
        <select id="links-user_id" class="form-control" name="Links[user_id]">
            <?= \app\components\MenuWidget::widget(['tpl' => 'select_user', 'model' => $model])?>
        </select>
    </div>


    <div>
        <label class="control-label" for="user_id">Генерация ссылки</label>
        <p><?=\yii\helpers\Url::to(['/wallet/handler/index', 'id' => $model->id])?></p>

    </div>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
