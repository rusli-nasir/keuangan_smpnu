<?php
/**
 * Created by PhpStorm.
 * User: Dexter
 * Date: 7/10/2019
 * Time: 9:27 AM
 */
namespace app\components;

use yii\log\Logger;

class EmptyLogger extends Logger
{

    public function log($message, $level, $category = 'application')
    {
        return false;
    }

}