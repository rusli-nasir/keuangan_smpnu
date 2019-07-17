<?php
/**
 * Created by PhpStorm.
 * User: AcenetDev
 * Date: 1/9/2018
 * Time: 10:02 AM
 */

return [
    'sourcePath' => __DIR__. '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR,
    'languages' => ['id'],//Add languages to the array for the language files to be generated.
    'translator' => 'Yii::t',
    'sort' => true,
    'removeUnused' => false,
    'only' => ['*.php'],
    'ignoreCategories' => [
        'yii',
    ],
    'except' => [
        '.svn',
        '.git',
        '.gitignore',
        '.gitkeep',
        '.hgignore',
        '.hgkeep',
        '/messages',
        '/vendor',
    ],
    'format' => 'php',
    'messagePath' => __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'messages',
    'overwrite' => true,
];