<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hd_article".
 *
 * @property string $aid
 * @property string $title
 * @property string $time
 * @property string $thumb
 * @property string $content
 * @property integer $type
 * @property string $info
 * @property string $cid
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hd_article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['time', 'type', 'cid'], 'integer'],
            [['content'], 'string'],
            [['title', 'info'], 'string', 'max' => 155],
            [['thumb'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'aid' => 'Aid',
            'title' => 'Title',
            'time' => 'Time',
            'thumb' => 'Thumb',
            'content' => 'Content',
            'type' => 'Type',
            'info' => 'Info',
            'cid' => 'Cid',
        ];
    }
}
