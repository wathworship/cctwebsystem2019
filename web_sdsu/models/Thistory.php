<?php

namespace web_sdsu\models;

use Yii;

/**
 * This is the model class for table "t_history".
 *
 * @property int $id รหัส
 * @property string $history_name รายการ
 * @property string $history_th รายละเอียด(ไทย)
 * @property string $history_en รายละเอียด(en)
 * @property string $history_cn รายละเอียด(จีน)
 * @property string $ref รูปภาพ
 * @property string $docs เอกสาร
 * @property int $history_type หมวดหมู่/สังกัด
 * @property int $d_history ประเภทของhistory
 * @property int $history_user ผู้บันทึกรายการ
 * @property string $history_dateadd วันที่เพิ่มรายการ
 *
 * @property User $historyUser
 * @property DType $historyType
 * @property DHistoryy $dHistory
 */
class Thistory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_history';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['history_name', 'history_type', 'd_history', 'history_user'], 'required'],
            [['history_th', 'history_en', 'history_cn', 'docs'], 'string'],
            [['history_type', 'd_history', 'history_user'], 'integer'],
            [['history_dateadd'], 'safe'],
            [['history_name', 'ref'], 'string', 'max' => 225],
            [['history_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['history_user' => 'id']],
            [['history_type'], 'exist', 'skipOnError' => true, 'targetClass' => DType::className(), 'targetAttribute' => ['history_type' => 'id']],
            [['d_history'], 'exist', 'skipOnError' => true, 'targetClass' => DHistoryy::className(), 'targetAttribute' => ['d_history' => 'id_his']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'รหัส',
            'history_name' => 'รายการ',
            'history_th' => 'รายละเอียด(ไทย)',
            'history_en' => 'รายละเอียด(en)',
            'history_cn' => 'รายละเอียด(จีน)',
            'ref' => 'รูปภาพ',
            'docs' => 'เอกสาร',
            'history_type' => 'หมวดหมู่/สังกัด',
            'd_history' => 'ประเภทของhistory',
            'history_user' => 'ผู้บันทึกรายการ',
            'history_dateadd' => 'วันที่เพิ่มรายการ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistoryuser()
    {
        return $this->hasOne(User::className(), ['id' => 'history_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistorytype()
    {
        return $this->hasOne(Dtype::className(), ['id' => 'history_type']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDhistory()
    {
        return $this->hasOne(Dhistoryy::className(), ['id_his' => 'd_history']);
    }
}
