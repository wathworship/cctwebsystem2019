<?php

namespace web_sdsu\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password_hash
 * @property string $auth_key
 * @property int $confirmed_at
 * @property string $unconfirmed_email
 * @property int $blocked_at
 * @property string $registration_ip
 * @property int $created_at
 * @property int $updated_at
 * @property int $flags
 * @property int $last_login_at
 * @property int $org สังกัด
 *
 * @property TContact[] $tContacts
 * @property TDocument[] $tDocuments
 * @property THistory[] $tHistories
 * @property TJournal[] $tJournals
 * @property TNew[] $tNews
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'username', 'email', 'password_hash', 'auth_key', 'created_at', 'updated_at'], 'required'],
            [['id', 'confirmed_at', 'blocked_at', 'created_at', 'updated_at', 'flags', 'last_login_at', 'org'], 'integer'],
            [['username', 'email', 'unconfirmed_email'], 'string', 'max' => 255],
            [['password_hash'], 'string', 'max' => 60],
            [['auth_key'], 'string', 'max' => 32],
            [['registration_ip'], 'string', 'max' => 45],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'email' => 'Email',
            'password_hash' => 'Password Hash',
            'auth_key' => 'Auth Key',
            'confirmed_at' => 'Confirmed At',
            'unconfirmed_email' => 'Unconfirmed Email',
            'blocked_at' => 'Blocked At',
            'registration_ip' => 'Registration Ip',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'flags' => 'Flags',
            'last_login_at' => 'Last Login At',
            'org' => 'สังกัด',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTContacts()
    {
        return $this->hasMany(TContact::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTDocuments()
    {
        return $this->hasMany(TDocument::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTHistories()
    {
        return $this->hasMany(THistory::className(), ['history_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTJournals()
    {
        return $this->hasMany(TJournal::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTNews()
    {
        return $this->hasMany(TNew::className(), ['user_id' => 'id']);
    }
}
