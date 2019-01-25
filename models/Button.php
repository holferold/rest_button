<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "button".
 *
 * @property int $id
 * @property int $type
 * @property string $value
 * @property string $secretValue
 */
class Button extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'button';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'type'], 'integer'],
            [['value', 'secretValue'], 'string', 'max' => 45],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'value' => 'Value',
            'secretValue' => 'Secret Value',
        ];
    }

    public function fields()
    {
        return ['id', 'type', 'value'];
    }
}

