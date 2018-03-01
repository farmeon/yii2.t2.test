<?php

namespace app\modules\wallet\models;

use Yii;

/**
 * This is the model class for table "links".
 *
 * @property integer $id
 * @property string $name
 * @property integer $cost
 * @property integer $user_id
 */
class Links extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'links';
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
            [['name', 'cost', 'user_id'], 'required'],
            [['cost', 'user_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Ид',
            'name' => 'Название ссылки',
            'cost' => 'Цена',
            'user_id' => 'Имя пользователя',
        ];
    }
}
