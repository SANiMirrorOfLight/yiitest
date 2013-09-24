<?php

$project_root = dirname(dirname(__FILE__));
$project_mode = basename(__FILE__, ".php");

return CMap::mergeArray(
    require(dirname(__FILE__).'/main.php'),
    
    array(
        'controllerPath' => $project_root .'/controllers/'. $project_mode,
        'viewPath' => $project_root .'/views/'. $project_mode,
        
        'defaultController' => 'admin',

        'components'=>array(
            'fixture'=>array(
                    'class'=>'system.test.CDbFixtureManager',
            ),
            /* uncomment the following to provide test database connection
            'db'=>array(
                    'connectionString'=>'DSN for test database',
            ),
            */
            'urlManager' => array(
                'urlFormat' => 'path',
//                'showScriptName' => false,
                'rules' => array(
                    '/' => 'site/index',
                    '<controller:\w+>/<id:\d+>' => '<controller>/view',
                    '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                    '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                ),
            ),
        ),
    )
    
);
