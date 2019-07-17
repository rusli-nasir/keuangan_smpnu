<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class KewajibanSiswaForm extends Model
{
    public $departemen;
    public $tahun_ajaran;
    public $tingkat;
    public $subtingkat;
    public $daftarKewajiban;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['departemen','tahun_ajaran','tingkat','subtingkat'],'required'],
            [['departemen','tahun_ajaran','tingkat','subtingkat'],'integer'],
        ];
    }
}
