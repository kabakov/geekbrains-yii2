<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%tweets}}".
 *
 * @property integer $id
 * @property string $text
 * @property string $image
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
        ];
    }
}
