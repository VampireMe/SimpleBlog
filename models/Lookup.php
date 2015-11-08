<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_lookup".
 *
 * @property integer $id
 * @property string $name
 * @property integer $code
 * @property string $type
 * @property integer $position
 */
class Lookup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_lookup';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'code', 'type', 'position'], 'required'],
            [['code', 'position'], 'integer'],
            [['name', 'type'], 'string', 'max' => 128]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'code' => 'Code',
            'type' => 'Type',
            'position' => 'Position',
        ];
    }
    
    /**
     * 得到状态名称
     * @author gaoqing
     * 2015年11月8日
     * @param int $id 状态id
     * @return string 状态名称
     */
    public static function getLookupName($id) {
    	return self::find()->where(['code' => $id])->one();
    }
}
