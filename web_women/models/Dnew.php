<?php

namespace web_women\models;

use Yii;

/**
 * This is the model class for table "d_new".
 *
 * @property int $id รหัส
 * @property string $new_th หมวดหมู่ข่าว(ไทย)
 * @property string $new_en หมวดหมู่ข่าว(en)
 * @property string $new_cn หมวดหมู่ข่าว(cn)
 * @property string $dateadd วันที่เพิ่ม
 *
 * @property TNew[] $tNews
 */
class Dnew extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'd_new';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['new_th'], 'required'],
            [['dateadd'], 'safe'],
            [['new_th', 'new_en', 'new_cn'], 'string', 'max' => 225],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'รหัส',
            'new_th' => 'หมวดหมู่ข่าว(ไทย)',
            'new_en' => 'หมวดหมู่ข่าว(en)',
            'new_cn' => 'หมวดหมู่ข่าว(cn)',
            'dateadd' => 'วันที่เพิ่ม',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTNews()
    {
        return $this->hasMany(TNew::className(), ['newtype_id' => 'id']);
    }
}
