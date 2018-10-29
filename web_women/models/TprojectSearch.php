<?php

namespace web_women\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use web_women\models\Tproject;

/**
 * TprojectSearch represents the model behind the search form of `web_women\models\Tproject`.
 */
class TprojectSearch extends Tproject
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'type_id', 'user_id'], 'integer'],
            [['projectname_th', 'projectname_en', 'projectname_cn', 'projectdetail', 'projectdetail_en', 'projectdetail_cn', 'docs', 'year', 'date_add'], 'safe'],
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
        $query = Tproject::find();

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
            'type_id' => $this->type_id,
            'user_id' => $this->user_id,
            'date_add' => $this->date_add,
        ]);

        $query->andFilterWhere(['like', 'projectname_th', $this->projectname_th])
            ->andFilterWhere(['like', 'projectname_en', $this->projectname_en])
            ->andFilterWhere(['like', 'projectname_cn', $this->projectname_cn])
            ->andFilterWhere(['like', 'projectdetail', $this->projectdetail])
            ->andFilterWhere(['like', 'projectdetail_en', $this->projectdetail_en])
            ->andFilterWhere(['like', 'projectdetail_cn', $this->projectdetail_cn])
            ->andFilterWhere(['like', 'docs', $this->docs])
            ->andFilterWhere(['like', 'year', $this->year]);

        return $dataProvider;
    }
}
