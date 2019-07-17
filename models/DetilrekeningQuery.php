<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Detilrekening]].
 *
 * @see Detilrekening
 */
class DetilrekeningQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Detilrekening[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Detilrekening|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }

    /**
     *
     * @return static
     */
    public function codeOrdered()
    {
        return $this->orderBy([
            'kategorirekening'=>SORT_ASC,
            'kode'=>SORT_ASC,
        ]);
    }
}
