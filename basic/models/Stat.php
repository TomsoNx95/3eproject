<?php

namespace app\models;

use Yii;


class Stat extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'stat';
    }


    public function rules()
    {
        return [
            [['value'], 'required'],
            [['value'], 'double'],
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'value' => 'Value',
        ];
    }
}