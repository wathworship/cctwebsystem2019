<?php

namespace web_sdsu\models;

use Yii;

/**
 * This is the model class for table "d_historyy".
 *
 * @property int $id_his รหัสประเภทของhistory
 * @property string $d_history_th ประเภทของhistory
 * @property string $d_history_en ประเภทภาษาอังกฤษ
 * @property string $dateadd เพิ่มเมื่อ
 *
 * @property THistory[] $tHistories
 */
class Dhistoryy extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'd_historyy';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['d_history_th'], 'required'],
            [['dateadd'], 'safe'],
            [['d_history_th', 'd_history_en'], 'string', 'max' => 225],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_his' => 'รหัสประเภทของhistory',
            'd_history_th' => 'ประเภทของhistory',
            'd_history_en' => 'ประเภทภาษาอังกฤษ',
            'dateadd' => 'เพิ่มเมื่อ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTHistories()
    {
        return $this->hasMany(THistory::className(), ['d_history' => 'id_his']);
    }
}
