<?php

namespace web_sdsu\models;

use Yii;

/**
 * This is the model class for table "uploads".
 *
 * @property int $upload_id
 * @property string $ref
 * @property string $file_name ชื่อไฟล์
 * @property string $real_filename ชื่อไฟล์จริง
 * @property string $create_date
 * @property int $type ประเภท
 *
 * @property DType $type0
 */
class Uploads extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'uploads';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['create_date'], 'safe'],
            [['type'], 'integer'],
            [['ref'], 'string', 'max' => 50],
            [['file_name', 'real_filename'], 'string', 'max' => 150],
            [['type'], 'exist', 'skipOnError' => true, 'targetClass' => DType::className(), 'targetAttribute' => ['type' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'upload_id' => 'Upload ID',
            'ref' => 'Ref',
            'file_name' => 'ชื่อไฟล์',
            'real_filename' => 'ชื่อไฟล์จริง',
            'create_date' => 'Create Date',
            'type' => 'ประเภท',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType0()
    {
        return $this->hasOne(DType::className(), ['id' => 'type']);
    }

    public function getNews()
    {
        return $this->hasOne(Tnew::className(), ['ref' => 'ref']);
    }

    public function getBanner()
    {
        return $this->hasOne(Banner::className(), ['ref' => 'ref']);
    }
}
