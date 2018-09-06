<?php

namespace web_sdsu\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use web_sdsu\models\Thistory;

/**
 * ThistorySearch represents the model behind the search form of `web_sdsu\models\Thistory`.
 */
class ThistorySearch extends Thistory
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'history_type', 'd_history', 'history_user'], 'integer'],
            [['history_name', 'history_th', 'history_en', 'history_cn', 'ref', 'docs', 'history_dateadd'], 'safe'],
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
        $query = Thistory::find();

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
            'history_type' => $this->history_type,
            'd_history' => $this->d_history,
            'history_user' => $this->history_user,
            'history_dateadd' => $this->history_dateadd,
        ]);

        $query->andFilterWhere(['like', 'history_name', $this->history_name])
            ->andFilterWhere(['like', 'history_th', $this->history_th])
            ->andFilterWhere(['like', 'history_en', $this->history_en])
            ->andFilterWhere(['like', 'history_cn', $this->history_cn])
            ->andFilterWhere(['like', 'ref', $this->ref])
            ->andFilterWhere(['like', 'docs', $this->docs]);

        return $dataProvider;
    }
}
