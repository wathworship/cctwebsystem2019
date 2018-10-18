<?php

namespace web_pmu\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use web_pmu\models\Tdocument;

/**
 * TdocumentSearch represents the model behind the search form of `web_pmu\models\Tdocument`.
 */
class TdocumentSearch extends Tdocument
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'doc_type', 'type_id', 'user_id'], 'integer'],
            [['name_th', 'name_en', 'name_cn', 'detail_th', 'detail_en', 'detail_cn', 'link_doc', 'date_add', 'date_update'], 'safe'],
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
        $query = Tdocument::find();

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
            'doc_type' => $this->doc_type,
            'type_id' => $this->type_id,
            'user_id' => $this->user_id,
            'date_add' => $this->date_add,
            'date_update' => $this->date_update,
        ]);

        $query->andFilterWhere(['like', 'name_th', $this->name_th])
            ->andFilterWhere(['like', 'name_en', $this->name_en])
            ->andFilterWhere(['like', 'name_cn', $this->name_cn])
            ->andFilterWhere(['like', 'detail_th', $this->detail_th])
            ->andFilterWhere(['like', 'detail_en', $this->detail_en])
            ->andFilterWhere(['like', 'detail_cn', $this->detail_cn])
            ->andFilterWhere(['like', 'link_doc', $this->link_doc]);

        return $dataProvider;
    }
}
