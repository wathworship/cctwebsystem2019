<?php

namespace web_sdsu\models;

use Yii;

/**
 * This is the model class for table "d_type".
 *
 * @property int $id รหัส
 * @property string $type_th ชื่อประเภทไทย
 * @property string $type_en ชื่อประเภทอังกฤษ
 * @property string $dateadd วันเพิ่มข้อมูล
 *
 * @property TContact[] $tContacts
 * @property TDocument[] $tDocuments
 * @property THistory[] $tHistories
 * @property TJournal[] $tJournals
 * @property TNew[] $tNews
 * @property TProject[] $tProjects
 */
class Dtype extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'd_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'type_th', 'type_en'], 'required'],
            [['id'], 'integer'],
            [['dateadd'], 'safe'],
            [['type_th', 'type_en'], 'string', 'max' => 225],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'รหัส',
            'type_th' => 'ชื่อประเภทไทย',
            'type_en' => 'ชื่อประเภทอังกฤษ',
            'dateadd' => 'วันเพิ่มข้อมูล',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTContacts()
    {
        return $this->hasMany(TContact::className(), ['id_type' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTDocuments()
    {
        return $this->hasMany(TDocument::className(), ['type_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTHistories()
    {
        return $this->hasMany(THistory::className(), ['history_type' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTJournals()
    {
        return $this->hasMany(TJournal::className(), ['unit' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTNews()
    {
        return $this->hasMany(TNew::className(), ['type_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTProjects()
    {
        return $this->hasMany(TProject::className(), ['type_id' => 'id']);
    }
}
