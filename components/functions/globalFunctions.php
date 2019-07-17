<?php
/**
 * Created by PhpStorm.
 * User: Dexter
 * Date: 6/24/2019
 * Time: 12:35 PM
 */

/**
 * myUser ID
 * function myUserID()
 *
 **/
if (!function_exists('myUserID')) {
    /**
     * @return int|string
     */
    function myUserID()
    {
        return Yii::$app->user->id;
    }
}

/**
 * Url Helper
 * function url($url = '', $schema = false)
 *
 **/
if (!function_exists('url')) {
    /**
     * @param string|array $url
     * @param bool   $schema
     * @return string
     */
    function url($url = '', $schema = false)
    {
        return \yii\helpers\Url::to($url,$schema);
    }
}

/**
 * Image
 * function img($src, $opt= [])
 *
 **/
if (!function_exists('img')) {
    /**
     * @param string  $src
     * @param array $opt
     * @return string
     */
    function img($src, $opt = [])
    {
        return \yii\bootstrap\Html::img($src,$opt);
    }
}

/**
 * User Can do
 * function userCan($permission)
 *
 **/
if (!function_exists('userCan')) {
    function userCan($permission)
    {
        return Yii::$app->user->can($permission);
    }
}

/**
 * Load Params
 * function param($keyName, $default = null)
 *
 **/
if (!function_exists('param')) {
    function param($keyName, $default = null)
    {
        return \yii\helpers\ArrayHelper::getValue(Yii::$app->params,$keyName,$default);
    }
}

/**
 * Link Href
 * function a($text, $url = null, $opt = [], $auth = false)
 *
 **/
if (!function_exists('a')) {
    function a($text, $url = null, $opt = [], $auth = false)
    {
        return \yii\bootstrap\Html::a($text,$url,$opt);
    }
}

/**
 * Formatter
 * function f()
 *
 **/
if (!function_exists('f')) {
    function f()
    {
        return Yii::$app->formatter;
    }
}

/**
 * Get Year List
 * function getYearsList($from = 2000)
 * 
 **/
if (!function_exists('getYearsList')) {
    function getYearsList($from = 2000)
    {
        $currentYear = date('Y');
        $yearFrom = $from;
        $yearsRange = range($yearFrom, $currentYear);
        return array_combine($yearsRange, $yearsRange);
    }
}

/**
 * random string
 * function rand_string($length = 10)
 *
 **/
if (!function_exists('rand_string')) {
    /**
     * @param int $length
     * @return string
     * @throws \yii\base\Exception
     */
    function rand_string($length = 10)
    {
        return Yii::$app->security->generateRandomString($length);
    }
}

/**
 * Get List Range Month
 * function rangeMonth($starttime, $endtime)
 *
 **/
if (!function_exists('rangeMonth')) {
    function rangeMonth($starttime, $endtime)
    {
        $time1 = strtotime($starttime);//absolute date comparison needs to be done here, because PHP doesn't do date comparisons
        $time2 = strtotime($endtime);
        $my1 = date('mY', $time1); //need these to compare dates at 'month' granularity
        $my2 = date('mY', $time2);
        $year1 = date('Y', $time1);
        $year2 = date('Y', $time2);
        $years = range($year1, $year2);
        $months = [];
        foreach($years as $year)
        {
            $months[$year] = array();
            while($time1 <= $time2)
            {
                if(date('Y',$time1) == $year)
                {
                    $months[$year][] = date('M-Y', $time1);
                    $time1 = strtotime(date('Y-m-d', $time1).' +1 month');
                }
                else
                {
                    break;
                }
            }
            continue;
        }
        return $months;
    }
}