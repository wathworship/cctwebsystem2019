<?php

namespace web_sdsu\models;

use Yii;

/**
 * This is the model class for table "d_prefix".
 *
 * @property int $id รหัส
 * @property string $prefix_th คำนำหน้าไทย
 * @property string $prefix_en คำนไหน้าอังกฤษ
 * @property string $prefix_cn
 * @property string $date_add เวลาเพิ่ม
 *
 * @property TPerson[] $tPeople
 */
class Dprefix extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'd_prefix';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prefix_th', 'prefix_cn'], 'required'],
            [['date_add'], 'safe'],
            [['prefix_th'], 'string', 'max' => 255],
            [['prefix_en', 'prefix_cn'], 'string', 'max' => 225],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'รหัส',
            'prefix_th' => 'คำนำหน้าไทย',
            'prefix_en' => 'คำนไหน้าอังกฤษ',
            'prefix_cn' => 'Prefix Cn',
            'date_add' => 'เวลาเพิ่ม',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTPeople()
    {
        return $this->hasMany(TPerson::className(), ['id_prefix' => 'id']);
    }
}
