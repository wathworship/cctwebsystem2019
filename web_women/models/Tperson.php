<?php

namespace web_women\models;

use Yii;

/**
 * This is the model class for table "t_person".
 *
 * @property int $id รหัส
 * @property int $id_prefix คำนำหน้า
 * @property string $firstname_th ชื่อ
 * @property string $lastname_th นามสกุล
 * @property string $firstname_en ชื่อ(en)
 * @property string $lastname_en นามสกุล(en)
 * @property string $firstname_cn ชื่อ(cn)
 * @property string $lastname_cn นามสกุล(cn)
 * @property int $id_position ตำแหน่งการทำงาน
 * @property int $id_department ฝ่าย
 * @property int $id_type สังกัด
 * @property string $during_start เริ่มทำงาน
 * @property string $during_end สิ้นสุดการทำงาน
 * @property string $img รูปภาพประกอบ
 * @property string $detail รายละเอียด
 * @property int $id_user ผู้บันทึก
 * @property string $date_add วันที่เพิ่ม
 * @property string $date_update วันที่แก้ไข
 *
 * @property DPosition $position
 * @property DType $type
 * @property DDepartment $department
 * @property User $user
 * @property DPrefix $prefix
 */
class Tperson extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_person';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_prefix', 'id_position', 'id_department', 'id_type', 'id_user'], 'integer'],
            [['firstname_th', 'lastname_th', 'id_type', 'id_user'], 'required'],
            [['during_start', 'during_end', 'date_add', 'date_update'], 'safe'],
            [['img', 'detail'], 'string'],
            [['firstname_th', 'lastname_th', 'firstname_en', 'lastname_en', 'firstname_cn', 'lastname_cn'], 'string', 'max' => 225],
            [['id_position'], 'exist', 'skipOnError' => true, 'targetClass' => DPosition::className(), 'targetAttribute' => ['id_position' => 'id']],
            [['id_type'], 'exist', 'skipOnError' => true, 'targetClass' => DType::className(), 'targetAttribute' => ['id_type' => 'id']],
            [['id_department'], 'exist', 'skipOnError' => true, 'targetClass' => DDepartment::className(), 'targetAttribute' => ['id_department' => 'id']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
            [['id_prefix'], 'exist', 'skipOnError' => true, 'targetClass' => DPrefix::className(), 'targetAttribute' => ['id_prefix' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'รหัส',
            'id_prefix' => 'คำนำหน้า',
            'firstname_th' => 'ชื่อ',
            'lastname_th' => 'นามสกุล',
            'firstname_en' => 'ชื่อ(en)',
            'lastname_en' => 'นามสกุล(en)',
            'firstname_cn' => 'ชื่อ(cn)',
            'lastname_cn' => 'นามสกุล(cn)',
            'id_position' => 'ตำแหน่งการทำงาน',
            'id_department' => 'ฝ่าย',
            'id_type' => 'สังกัด',
            'during_start' => 'เริ่มทำงาน',
            'during_end' => 'สิ้นสุดการทำงาน',
            'img' => 'รูปภาพประกอบ',
            'detail' => 'รายละเอียด',
            'id_user' => 'ผู้บันทึก',
            'date_add' => 'วันที่เพิ่ม',
            'date_update' => 'วันที่แก้ไข',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosition()
    {
        return $this->hasOne(Dposition::className(), ['id' => 'id_position']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(Dtype::className(), ['id' => 'id_type']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['id' => 'id_department']);
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
    public function getPrefix()
    {
        return $this->hasOne(Dprefix::className(), ['id' => 'id_prefix']);
    }
}
