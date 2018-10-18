<?php

namespace web_women\models;

use Yii;

/**
 * This is the model class for table "t_project".
 *
 * @property int $id รหัส
 * @property string $projectname_th ชื่อโครงการ
 * @property string $projectname_en ชื่อโครงการ(en)
 * @property string $projectname_cn ชื่อโครงการ(cn)
 * @property string $projectdetail รายละเอียดโครงการ
 * @property string $projectdetail_en รายละเอียดโครงการ(en)
 * @property string $projectdetail_cn รายละเอียดโครงการ(cn)
 * @property string $docs เอกสารแนบ
 * @property string $year ปีงบประมาณ
 * @property int $type_id สังกัด
 * @property int $user_id ผู้บันทึกรายการ
 * @property string $date_add วันที่เพิ่มรายการ
 *
 * @property DType $type
 * @property User $user
 */
class Tproject extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_project';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['projectname_th', 'year', 'type_id', 'user_id'], 'required'],
            [['projectdetail', 'projectdetail_en', 'projectdetail_cn', 'docs'], 'string'],
            [['type_id', 'user_id'], 'integer'],
            [['date_add'], 'safe'],
            [['projectname_th', 'projectname_en', 'projectname_cn'], 'string', 'max' => 225],
            [['year'], 'string', 'max' => 10],
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
            'projectname_th' => 'ชื่อโครงการ',
            'projectname_en' => 'ชื่อโครงการ(en)',
            'projectname_cn' => 'ชื่อโครงการ(cn)',
            'projectdetail' => 'รายละเอียดโครงการ',
            'projectdetail_en' => 'รายละเอียดโครงการ(en)',
            'projectdetail_cn' => 'รายละเอียดโครงการ(cn)',
            'docs' => 'เอกสารแนบ',
            'year' => 'ปีงบประมาณ',
            'type_id' => 'สังกัด',
            'user_id' => 'ผู้บันทึกรายการ',
            'date_add' => 'วันที่เพิ่มรายการ',
        ];
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
}
