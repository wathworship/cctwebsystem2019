<?php

namespace web_sdsu\models;

use Yii;

/**
 * This is the model class for table "d_branch".
 *
 * @property int $id_branch
 * @property int $id_type
 * @property string $branch_th
 * @property string $branch_en
 * @property string $branch_cn
 * @property string $date_add
 *
 * @property DType $type
 */
class Dbranch extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'd_branch';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_type', 'branch_th'], 'required'],
            [['id_type'], 'integer'],
            [['date_add'], 'safe'],
            [['branch_th', 'branch_en', 'branch_cn'], 'string', 'max' => 100],
            [['id_type'], 'exist', 'skipOnError' => true, 'targetClass' => DType::className(), 'targetAttribute' => ['id_type' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_branch' => 'Id Branch',
            'id_type' => 'Id Type',
            'branch_th' => 'Branch Th',
            'branch_en' => 'Branch En',
            'branch_cn' => 'Branch Cn',
            'date_add' => 'Date Add',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(DType::className(), ['id' => 'id_type']);
    }
}
