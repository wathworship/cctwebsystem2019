<?php

namespace web_pmu\models;

use Yii;

/**
 * This is the model class for table "banner".
 *
 * @property int $id_banner
 * @property string $name_banner_th
 * @property string $name_banner_en
 * @property string $name_banner_ch
 * @property string $ref
 * @property int $unit
 * @property string $date_add
 *
 * @property DType $unit0
 */
class Banner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'banner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_banner_th', 'ref', 'unit'], 'required'],
            [['unit'], 'integer'],
            [['date_add'], 'safe'],
            [['name_banner_th', 'name_banner_en', 'name_banner_ch', 'ref'], 'string', 'max' => 225],
            [['unit'], 'exist', 'skipOnError' => true, 'targetClass' => DType::className(), 'targetAttribute' => ['unit' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_banner' => 'Id Banner',
            'name_banner_th' => 'Name Banner Th',
            'name_banner_en' => 'Name Banner En',
            'name_banner_ch' => 'Name Banner Ch',
            'ref' => 'Ref',
            'unit' => 'Unit',
            'date_add' => 'Date Add',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnit()
    {
        return $this->hasOne(DType::className(), ['id' => 'unit']);
    }

    public function getRef()
    {
        return $this->hasMany(Uploads::className(), ['ref' => 'ref']);
    }
}
