<?php

namespace web_pmu\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use web_pmu\models\Tjournal;

/**
 * TjournalSearch represents the model behind the search form of `web_pmu\models\Tjournal`.
 */
class TjournalSearch extends Tjournal
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'd_journal', 'user_id', 'unit'], 'integer'],
            [['name_th', 'name_en', 'name_cn', 'issue', 'issue_en', 'issue_cn', 'journal_file', 'cover', 'date_add', 'date_edit'], 'safe'],
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
        $query = Tjournal::find();

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
            'd_journal' => $this->d_journal,
            'date_add' => $this->date_add,
            'date_edit' => $this->date_edit,
            'user_id' => $this->user_id,
            'unit' => $this->unit,
        ]);

        $query->andFilterWhere(['like', 'name_th', $this->name_th])
            ->andFilterWhere(['like', 'name_en', $this->name_en])
            ->andFilterWhere(['like', 'name_cn', $this->name_cn])
            ->andFilterWhere(['like', 'issue', $this->issue])
            ->andFilterWhere(['like', 'issue_en', $this->issue_en])
            ->andFilterWhere(['like', 'issue_cn', $this->issue_cn])
            ->andFilterWhere(['like', 'journal_file', $this->journal_file])
            ->andFilterWhere(['like', 'cover', $this->cover]);

        return $dataProvider;
    }
}
