<?php

$config['db']['hostname'] = '10.37.21.245';
$config['db']['username'] = 'kptel';
$config['db']['password'] = 'kptel';
$config['db']['app_db'] = 'appsMonitor';
$config['db']['cacti_db'] = 'cacti';

$config['cacti']['url'] = "http://10.32.18.200/"

$config['session']['prefix'] = 'kptel-nms-';
$config['session']['app_db_sess'] = 'conn_a';
$config['session']['cacti_db_sess'] = 'conn_c';

$config['security']['salt'] = '7mcFSTfhSez6Dn53MYBLd44s';
$config['security']['loop'] = 16384;

?>