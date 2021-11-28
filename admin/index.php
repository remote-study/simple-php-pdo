<?php


require_once '../db/DB.php';

$db = DB::getInstance();

print_r($db->pdo->get('users'));
