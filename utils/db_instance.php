<?php
include_once('db.php');
$info_DB = [
    'servername' => 'localhost:3000',
    'username' => 'root',
    'password' => '',
    'DB_name' => 'mvc'
];
$db = new DB($info_DB);