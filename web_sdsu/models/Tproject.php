<?php

namespace web_sdsu\models;

use Yii;

/**
 * This is the model class for table "t_project".
 *
 * @property int $id รหัส
 * @property string $projectname_th ชื่อโครงการ
 * @property string $projectname_en ชื่อโครงการ(en)
 * @property string $projectdetail รายละเอียดโครงการ
 * @property string $docs เอกสารแนบ
 * @property string $year ปีงบประมาณ
 * @property int $type_id สังกัด
 * @property int $user_id ผู้บันทึกรายการ
 * @property string $date_add วันที่เพิ่มรายการ
 *
 * @property DType $type
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
            [['id', 'projectname_th', 'year', 'type_id', 'user_id'], 'required'],
            [['id', 'type_id', 'user_id'], 'integer'],
            [['projectdetail', 'docs'], 'string'],
            [['date_add'], 'safe'],
            [['projectname_th', 'projectname_en'], 'string', 'max' => 225],
            [['year'], 'string', 'max' => 10],
            [['id'], 'unique'],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => DType::className(), 'targetAttribute' => ['type_id' => 'id']],
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
            'projectdetail' => 'รายละเอียดโครงการ',
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
}
