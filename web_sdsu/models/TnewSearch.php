<?php

namespace web_sdsu\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use web_sdsu\models\Tnew;

/**
 * TnewSearch represents the model behind the search form of `web_sdsu\models\Tnew`.
 */
class TnewSearch extends Tnew
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'newtype_id', 'type_id', 'user_id', 'status'], 'integer'],
            [['newname_th', 'newname_en', 'newname_cn', 'newdetail_th', 'newdetail_en', 'newdetail_cn', 'date_news', 'ref', 'docs', 'date_add', 'newproject'], 'safe'],
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
        $query = Tnew::find()->where(['newtype_id' => 9])->orderBy('id DESC');

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            //'pagination' => ['pageSize'=> 3],
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
            'date_news' => $this->date_news,
            'newtype_id' => $this->newtype_id,
            'type_id' => $this->type_id,
            'user_id' => $this->user_id,
            'date_add' => $this->date_add,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'newname_th', $this->newname_th])
            ->andFilterWhere(['like', 'newname_en', $this->newname_en])
            ->andFilterWhere(['like', 'newname_cn', $this->newname_cn])
            ->andFilterWhere(['like', 'newdetail_th', $this->newdetail_th])
            ->andFilterWhere(['like', 'newdetail_en', $this->newdetail_en])
            ->andFilterWhere(['like', 'newdetail_cn', $this->newdetail_cn])
            ->andFilterWhere(['like', 'ref', $this->ref])
            ->andFilterWhere(['like', 'docs', $this->docs])
            ->andFilterWhere(['like', 'newproject', $this->newproject]);

        return $dataProvider;
    }
}
