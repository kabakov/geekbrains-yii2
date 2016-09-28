<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%tweets}}".
 *
 * @property integer $id
 * @property string $text
 * @property string $image
 * @property integer $id_user
 * @property string $data_create
 */
class Tweets extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tweets}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text'], 'string'],
            [['id_user'], 'required'],
            [['id_user'], 'integer'],
            [['data_create'], 'safe'],
            [['image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'image' => 'Image',
            'id_user' => 'Id User',
            'data_create' => 'Data Create',
        ];
    }
}
