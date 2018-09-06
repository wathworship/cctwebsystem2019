<?php

namespace web_sdsu\models;

use Yii;

/**
 * This is the model class for table "t_contact".
 *
 * @property int $id รหัส
 * @property string $contactname_th รายการ
 * @property string $contactname_en รายการ(en)
 * @property string $map แผนที่
 * @property string $contactdetail_th รายละเอียดติดต่อ
 * @property string $contactdetail_en รายละเอียดติดต่อ(en)
 * @property string $reply ข้อเสนอแนะ/ตอบกลับ
 * @property int $id_type สังกัด
 * @property int $id_user ผู้บันทึก
 * @property string $date_add วันที่เพิ่ม
 *
 * @property DType $type
 * @property User $user
 */
class Tcontact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['contactname_th', 'id_type', 'id_user'], 'required'],
            [['map', 'contactdetail_th', 'contactdetail_en', 'reply'], 'string'],
            [['id_type', 'id_user'], 'integer'],
            [['date_add'], 'safe'],
            [['contactname_th', 'contactname_en'], 'string', 'max' => 225],
            [['id_type'], 'exist', 'skipOnError' => true, 'targetClass' => DType::className(), 'targetAttribute' => ['id_type' => 'id']],
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
            'contactname_th' => 'รายการ',
            'contactname_en' => 'รายการ(en)',
            'map' => 'แผนที่',
            'contactdetail_th' => 'รายละเอียดติดต่อ',
            'contactdetail_en' => 'รายละเอียดติดต่อ(en)',
            'reply' => 'ข้อเสนอแนะ/ตอบกลับ',
            'id_type' => 'สังกัด',
            'id_user' => 'ผู้บันทึก',
            'date_add' => 'วันที่เพิ่ม',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(DType::className(), ['id' => 'id_type']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
