<?php
/**
 * Created by PhpStorm.
 * User: Smita
 * Date: 24.08.16
 * Time: 14:20
 */


if ($_SERVER["SERVER_NAME"]=="localhost"){
    define("SQL_HOST","localhost");
    define("SQL_DBNAME","Mail_sys");
    define("SQL_USERNAME","root");
    define("SQL_PASSWORD","");
}

$db = new PDO('mysql:host='.SQL_HOST.';dbname='.SQL_DBNAME.';charset=utf8', SQL_USERNAME, SQL_PASSWORD);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)

?>