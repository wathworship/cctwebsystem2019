<?php

namespace web_sdsu\models;

use Yii;

/**
 * This is the model class for table "d_journal".
 *
 * @property int $id รหัส
 * @property string $journal_th หมวดหมู่วารสาร(ไทย)
 * @property string $journal_en หมวดหมู่วารสาร(en)
 * @property string $journal_cn หมวดหมู่วารสาร(cn)
 * @property string $dateadd วันที่เพิ่ม
 *
 * @property TJournal[] $tJournals
 */
class Djournal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'd_journal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['journal_th', 'journal_en'], 'required'],
            [['dateadd'], 'safe'],
            [['journal_th', 'journal_en', 'journal_cn'], 'string', 'max' => 225],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'รหัส',
            'journal_th' => 'หมวดหมู่วารสาร(ไทย)',
            'journal_en' => 'หมวดหมู่วารสาร(en)',
            'journal_cn' => 'หมวดหมู่วารสาร(cn)',
            'dateadd' => 'วันที่เพิ่ม',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTJournals()
    {
        return $this->hasMany(TJournal::className(), ['d_journal' => 'id']);
    }
}
