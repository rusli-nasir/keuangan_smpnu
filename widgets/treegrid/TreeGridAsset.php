<?php
/**
 * Created by PhpStorm.
 * User: Dexter
 * Date: 7/11/2019
 * Time: 7:57 AM
 */

namespace app\widgets\treegrid;


use yii\web\AssetBundle;

class TreeGridAsset extends AssetBundle
{

    public $sourcePath = '@bower/jquery-treegrid';
    public $js = [
        'js/jquery.treegrid.min.js',
    ];
    public $css = [
        'css/jquery.treegrid.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];


}