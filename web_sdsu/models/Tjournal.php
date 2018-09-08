<?php

namespace web_sdsu\models;

use Yii;

/**
 * This is the model class for table "t_journal".
 *
 * @property int $id
 * @property string $name_th
 * @property string $name_en
 * @property int $d_journal
 * @property string $issue
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
            [['name_th', 'd_journal', 'issue', 'user_id', 'unit'], 'required'],
            [['d_journal', 'user_id', 'unit'], 'integer'],
            [['journal_file', 'cover'], 'string'],
            [['date_add', 'date_edit'], 'safe'],
            [['name_th', 'name_en', 'issue'], 'string', 'max' => 225],
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
            'name_th' => 'Name Th',
            'name_en' => 'Name En',
            'd_journal' => 'D Journal',
            'issue' => 'Issue',
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
