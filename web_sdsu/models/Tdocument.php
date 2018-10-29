<?php

namespace web_sdsu\models;


use Yii;

/**
 * This is the model class for table "t_document".
 *
 * @property int $id รหัสแบบฟอร์ม
 * @property string $name_th ชื่อแบบฟอร์ม
 * @property string $name_en ชื่อแบบฟอร์มภาษาอังกฤษ
 * @property string $name_cn ชื่อแบบฟอร์มภาษาจีน
 * @property string $detail_th รายละเอียดภาษาไทย
 * @property string $detail_en รายละเอียดภาษาอังกฤษ
 * @property string $detail_cn รายละเอียดจีน
 * @property int $doc_type ประเภทแบบฟอร์ม
 * @property string $link_doc เอกสารแนบ
 * @property int $type_id ชื่อหน่วยงาน
 * @property int $user_id ผู้ใช้งาน
 * @property string $date_add เพิ่มเมื่อ
 * @property string $date_update แก้ไขเมื่อ
 *
 * @property User $user
 * @property DDoc $docType
 * @property DType $type
 */
class Tdocument extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_document';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_th', 'doc_type', 'type_id', 'user_id'], 'required'],
            [['detail_th', 'detail_en', 'detail_cn', 'link_doc'], 'string'],
            [['doc_type', 'type_id', 'user_id'], 'integer'],
            [['date_add', 'date_update'], 'safe'],
            [['name_th', 'name_en', 'name_cn'], 'string', 'max' => 225],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['doc_type'], 'exist', 'skipOnError' => true, 'targetClass' => DDoc::className(), 'targetAttribute' => ['doc_type' => 'id']],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => DType::className(), 'targetAttribute' => ['type_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'รหัสแบบฟอร์ม',
            'name_th' => 'ชื่อแบบฟอร์ม',
            'name_en' => 'ชื่อแบบฟอร์มภาษาอังกฤษ',
            'name_cn' => 'ชื่อแบบฟอร์มภาษาจีน',
            'detail_th' => 'รายละเอียดภาษาไทย',
            'detail_en' => 'รายละเอียดภาษาอังกฤษ',
            'detail_cn' => 'รายละเอียดจีน',
            'doc_type' => 'ประเภทแบบฟอร์ม',
            'link_doc' => 'เอกสารแนบ',
            'type_id' => 'ชื่อหน่วยงาน',
            'user_id' => 'ผู้ใช้งาน',
            'date_add' => 'เพิ่มเมื่อ',
            'date_update' => 'แก้ไขเมื่อ',
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
    public function getDoctype()
    {
        return $this->hasOne(Ddoc::className(), ['id' => 'doc_type']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(Dtype::className(), ['id' => 'type_id']);
    }
}
