<?php

namespace web_pmu\models;

use Yii;

/**
 * This is the model class for table "d_doc".
 *
 * @property int $id รหัส
 * @property string $doc_th หมวดหมู่เอกสาร(ไทย)
 * @property string $doc_en หมวดหมู่เอกสาร(en)
 * @property string $doc_cn หมวดหมู่เอกสาร(cn)
 * @property string $dateadd วันที่เพิ่ม
 *
 * @property TDocument[] $tDocuments
 */
class Ddoc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'd_doc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['doc_th', 'doc_en'], 'required'],
            [['dateadd'], 'safe'],
            [['doc_th', 'doc_en', 'doc_cn'], 'string', 'max' => 225],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'รหัส',
            'doc_th' => 'หมวดหมู่เอกสาร(ไทย)',
            'doc_en' => 'หมวดหมู่เอกสาร(en)',
            'doc_cn' => 'หมวดหมู่เอกสาร(cn)',
            'dateadd' => 'วันที่เพิ่ม',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTDocuments()
    {
        return $this->hasMany(TDocument::className(), ['doc_type' => 'id']);
    }
}
