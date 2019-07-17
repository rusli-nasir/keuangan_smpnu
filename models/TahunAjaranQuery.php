<?php
/**
 * Created by PhpStorm.
 * User: Dexter
 * Date: 7/10/2019
 * Time: 4:33 PM
 */

namespace app\models;


use yii\db\ActiveQuery;

class TahunAjaranQuery extends ActiveQuery
{

    public function active()
    {
        return $this->andWhere('[[status]]=1');
    }

    /**
     * @inheritdoc
     * @return TahunAjaran[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TahunAjaran|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }

}