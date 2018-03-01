<?php

namespace app\modules\wallet\models;

use Yii;

/**
 * This is the model class for table "wallet".
 *
 * @property integer $id
 * @property integer $summa
 * @property integer $user_id
 */
class Wallet extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wallet';
    }

    public function getUser(){
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['summa', 'user_id'], 'required'],
            [['summa', 'user_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Ид',
            'summa' => 'Общая сумма',
            'user_id' => 'Пользователь',
        ];
    }
}
