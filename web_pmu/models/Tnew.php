<?php

namespace web_pmu\models;
use web_pmu\models\Uploads;

use Yii;

/**
 * This is the model class for table "t_new".
 *
 * @property int $id รหัส
 * @property string $newname_th ชื่อข่าวสาร
 * @property string $newname_en ชื่อข่าวสาร(en)
 * @property string $newname_cn ชื่อข่าวสาร(จีน)
 * @property string $newdetail_th รายละเอียดข่าว
 * @property string $newdetail_en รายละเอียดข่าว(en)
 * @property string $newdetail_cn รายละเอียดข่าว(จีน)
 * @property string $date_news วันที่ของข่าว
 * @property string $ref รูปภาพ
 * @property string $docs เอกสาร
 * @property int $newtype_id ประเภทข่าว
 * @property int $type_id สังกัด
 * @property int $user_id ผู้บันทึกรายการ
 * @property string $date_add วันที่เพิ่มรายการ
 * @property string $newproject โครงการพันธกิจ
 * @property int $status สถานะข่าวสาร
 *
 * @property DNew $newtype
 * @property DType $type
 * @property User $user
 */
class Tnew extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_new';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['newname_th', 'newdetail_th', 'date_news', 'newtype_id', 'type_id', 'user_id', 'status'], 'required'],
            [['newdetail_th', 'newdetail_en', 'newdetail_cn', 'docs'], 'string'],
            [['date_news', 'date_add'], 'safe'],
            [['newtype_id', 'type_id', 'user_id', 'status'], 'integer'],
            [['newname_th', 'newname_en', 'newname_cn', 'ref', 'newproject'], 'string', 'max' => 225],
            [['newtype_id'], 'exist', 'skipOnError' => true, 'targetClass' => DNew::className(), 'targetAttribute' => ['newtype_id' => 'id']],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => DType::className(), 'targetAttribute' => ['type_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'รหัส',
            'newname_th' => 'ชื่อข่าวสาร',
            'newname_en' => 'ชื่อข่าวสาร(en)',
            'newname_cn' => 'ชื่อข่าวสาร(จีน)',
            'newdetail_th' => 'รายละเอียดข่าว',
            'newdetail_en' => 'รายละเอียดข่าว(en)',
            'newdetail_cn' => 'รายละเอียดข่าว(จีน)',
            'date_news' => 'วันที่ของข่าว',
            'ref' => 'รูปภาพ',
            'docs' => 'เอกสาร',
            'newtype_id' => 'ประเภทข่าว',
            'type_id' => 'สังกัด',
            'user_id' => 'ผู้บันทึกรายการ',
            'date_add' => 'วันที่เพิ่มรายการ',
            'newproject' => 'โครงการพันธกิจ',
            'status' => 'สถานะข่าวสาร',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNewtype()
    {
        return $this->hasOne(DNew::className(), ['id' => 'newtype_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(DType::className(), ['id' => 'type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public function getRef()
    {
        return $this->hasMany(Uploads::className(), ['ref' => 'ref']);
    }

    


}
