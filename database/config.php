<?php


define('HOST_NAME', 'ap_udi.mysql.dbaas.com.br');
define('USER_NAME', 'ap_udi');
define('PASSWORD', 'Achados@1p');
define('DATABASE', 'ap_udi');

$conn = new MySQLi(HOST_NAME, USER_NAME, PASSWORD, DATABASE);