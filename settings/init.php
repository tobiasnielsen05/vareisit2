<?php
require "classes/classDB.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED & ~E_STRICT);


define("CONFIG_LIVE", "1"); // 0: Test enviroment || 1: Live enviroment

if(CONFIG_LIVE == 0){
    $DB_SERVER = "localhost";
    $DB_NAME = "vareisit";
    $DB_USER = "root";
    $DB_PASS = "";
}else{
    $DB_SERVER = "mysql46.unoeuro.com";
    $DB_NAME = "hovedskudsklubben_dk_db";
    $DB_USER = "hovedskudsklubben_dk";
    $DB_PASS = "9H2yfcrGRxBnktbdFegE";
}

$db = new db($DB_SERVER, $DB_NAME, $DB_USER, $DB_PASS);
