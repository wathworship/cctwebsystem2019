<?php

namespace web_pmu\models;

use Yii;

/**
 * This is the model class for table "t_journal".
 *
 * @property int $id
 * @property string $name_th ชื่อวารสารไทย
 * @property string $name_en ชื่อวารสารอังกฤษ
 * @property string $name_cn ชื่อวารสารจีน
 * @property int $d_journal
 * @property string $issue ฉบับที่(th)
 * @property string $issue_en ฉบับที่(en)
 * @property string $issue_cn ฉบับที่(cn)
 * @property string $journal_file
 * @property string $cover
 * @property string $date_add
 * @property string $date_edit
 * @property int $user_id
 * @property int $unit
 *
 * @property User $user
 * @property DType $unit0
 * @property DJournal $dJournal
 */
class Tjournal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_journal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_th', 'd_journal', 'user_id', 'unit'], 'required'],
            [['d_journal', 'user_id', 'unit'], 'integer'],
            [['journal_file', 'cover'], 'string'],
            [['date_add', 'date_edit'], 'safe'],
            [['name_th', 'name_en', 'name_cn', 'issue', 'issue_en', 'issue_cn'], 'string', 'max' => 225],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['unit'], 'exist', 'skipOnError' => true, 'targetClass' => DType::className(), 'targetAttribute' => ['unit' => 'id']],
            [['d_journal'], 'exist', 'skipOnError' => true, 'targetClass' => DJournal::className(), 'targetAttribute' => ['d_journal' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_th' => 'ชื่อวารสารไทย',
            'name_en' => 'ชื่อวารสารอังกฤษ',
            'name_cn' => 'ชื่อวารสารจีน',
            'd_journal' => 'D Journal',
            'issue' => 'ฉบับที่(th)',
            'issue_en' => 'ฉบับที่(en)',
            'issue_cn' => 'ฉบับที่(cn)',
            'journal_file' => 'Journal File',
            'cover' => 'Cover',
            'date_add' => 'Date Add',
            'date_edit' => 'Date Edit',
            'user_id' => 'User ID',
            'unit' => 'Unit',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnit0()
    {
        return $this->hasOne(DType::className(), ['id' => 'unit']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDJournal()
    {
        return $this->hasOne(DJournal::className(), ['id' => 'd_journal']);
    }
}
