<?php
require "classes/classDB.php";

const CONFIG_LIVE = "0"; // 0: Test enviroment || 1: Live enviroment

if(CONFIG_LIVE == 1){
    $DB_SERVER = "mysql109.unoeuro.com";
    $DB_NAME = " bnopone_dk_db_tilbehor";
    $DB_USER = "bnopone_dk";
    $DB_PASS = "k26RgmedhF4H";
}else{
    $DB_SERVER = "";
    $DB_NAME = "";
    $DB_USER = "";
    $DB_PASS = "";
}

$db = new db($DB_SERVER, $DB_NAME, $DB_USER, $DB_PASS);