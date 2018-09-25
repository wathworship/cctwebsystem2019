<?php

namespace web_sdsu\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use web_sdsu\models\Tcontact;

/**
 * TcontactSearch represents the model behind the search form of `web_sdsu\models\Tcontact`.
 */
class TcontactSearch extends Tcontact
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_type', 'id_user'], 'integer'],
            [['contactname_th', 'contactname_en', 'map', 'contactdetail_th', 'contactdetail_en', 'reply', 'date_add'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Tcontact::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_type' => $this->id_type,
            'id_user' => $this->id_user,
            'date_add' => $this->date_add,
        ]);

        $query->andFilterWhere(['like', 'contactname_th', $this->contactname_th])
            ->andFilterWhere(['like', 'contactname_en', $this->contactname_en])
            ->andFilterWhere(['like', 'map', $this->map])
            ->andFilterWhere(['like', 'contactdetail_th', $this->contactdetail_th])
            ->andFilterWhere(['like', 'contactdetail_en', $this->contactdetail_en])
            ->andFilterWhere(['like', 'reply', $this->reply]);

        return $dataProvider;
    }
}
