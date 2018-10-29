<?php

namespace web_pmu\models;

use Yii;

/**
 * This is the model class for table "d_position".
 *
 * @property int $id รหัส
 * @property string $position_th ตำแหน่ง
 * @property string $position_en ตำแหน่ง(en)
 * @property string $position_cn ตำแหน่ง(cn)
 * @property int $id_user ผู้บันทึก
 * @property string $date_add วันที่เพิ่ม
 *
 * @property User $user
 * @property TPerson[] $tPeople
 */
class Dposition extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'd_position';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['position_th', 'id_user'], 'required'],
            [['id_user'], 'integer'],
            [['date_add'], 'safe'],
            [['position_th', 'position_en', 'position_cn'], 'string', 'max' => 225],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'รหัส',
            'position_th' => 'ตำแหน่ง',
            'position_en' => 'ตำแหน่ง(en)',
            'position_cn' => 'ตำแหน่ง(cn)',
            'id_user' => 'ผู้บันทึก',
            'date_add' => 'วันที่เพิ่ม',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTPeople()
    {
        return $this->hasMany(TPerson::className(), ['id_position' => 'id']);
    }
}
