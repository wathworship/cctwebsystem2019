<?php

namespace web_pmu\models;

use Yii;

/**
 * This is the model class for table "d_department".
 *
 * @property int $id รหัสฝ่าย
 * @property string $department_th ชื่อฝ่าย(th)
 * @property string $department_en ชื่อฝ่าย(en)
 * @property string $department_cn ชื่อฝ่าย(cn)
 * @property string $date_add
 *
 * @property TPerson[] $tPeople
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'd_department';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['department_th'], 'required'],
            [['date_add'], 'safe'],
            [['department_th', 'department_en', 'department_cn'], 'string', 'max' => 225],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'รหัสฝ่าย',
            'department_th' => 'ชื่อฝ่าย(th)',
            'department_en' => 'ชื่อฝ่าย(en)',
            'department_cn' => 'ชื่อฝ่าย(cn)',
            'date_add' => 'Date Add',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTPeople()
    {
        return $this->hasMany(TPerson::className(), ['id_department' => 'id']);
    }
}
