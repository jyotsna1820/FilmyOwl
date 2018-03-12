<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "quotes".
 *
 * @property integer $id
 * @property string $quotes
 * @property string $character
 * @property string $movie
 */
class Quotes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'quotes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['quotes', 'character', 'movie'], 'required'],
            [['quotes', 'character', 'movie'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'quotes' => 'Quotes',
            'character' => 'Character',
            'movie' => 'Movie',
        ];
    }
}
