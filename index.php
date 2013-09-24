<?php

// change the following paths if necessary
$localConfig = include_once(dirname(__FILE__) .'/protected/config/local.php');
$yii=dirname(__FILE__).'/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/index.php';

require_once($yii);
Yii::createWebApplication($config)->run();
