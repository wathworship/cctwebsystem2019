<?php

namespace web_sdsu\models;

use Yii;

/**
 * This is the model class for table "t_contact".
 *
 * @property int $id รหัส
 * @property string $contactname_th รายการ
 * @property string $contactname_en รายการ(en)
 * @property string $contactname_cn รายการ(cn)
 * @property string $map แผนที่
 * @property string $contactdetail_th รายละเอียดติดต่อ
 * @property string $contactdetail_en รายละเอียดติดต่อ(en)
 * @property string $contactdetail_cn รายละเอียดติดต่อ(cn)
 * @property string $reply ข้อเสนอแนะ/ตอบกลับ
 * @property int $id_type สังกัด
 * @property int $branch_id
 * @property int $id_user ผู้บันทึก
 * @property string $date_add วันที่เพิ่ม
 *
 * @property DType $type
 * @property User $user
 * @property DBranch $branch
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
            [['contactname_th', 'id_user'], 'required'],
            [['map', 'contactdetail_th', 'contactdetail_en', 'contactdetail_cn', 'reply'], 'string'],
            [['id_type', 'branch_id', 'id_user'], 'integer'],
            [['date_add'], 'safe'],
            [['contactname_th', 'contactname_en', 'contactname_cn'], 'string', 'max' => 225],
            [['id_type'], 'exist', 'skipOnError' => true, 'targetClass' => DType::className(), 'targetAttribute' => ['id_type' => 'id']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
            [['branch_id'], 'exist', 'skipOnError' => true, 'targetClass' => DBranch::className(), 'targetAttribute' => ['branch_id' => 'id_branch']],
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
            'contactname_cn' => 'รายการ(cn)',
            'map' => 'แผนที่',
            'contactdetail_th' => 'รายละเอียดติดต่อ',
            'contactdetail_en' => 'รายละเอียดติดต่อ(en)',
            'contactdetail_cn' => 'รายละเอียดติดต่อ(cn)',
            'reply' => 'ข้อเสนอแนะ/ตอบกลับ',
            'id_type' => 'สังกัด',
            'branch_id' => 'Branch ID',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBranch()
    {
        return $this->hasOne(DBranch::className(), ['id_branch' => 'branch_id']);
    }
}
