<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "quotes".
 *
 * @property integer $id
 * @property string $quotes
 * @property string $movie_character
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
            [['quotes', 'movie_character', 'movie'], 'required'],
            [['quotes', 'movie_character', 'movie'], 'string', 'max' => 500],
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
            'movie_character' => 'movie_character',
            'movie' => 'Movie',
        ];
    }
}
