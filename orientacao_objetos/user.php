<?php
require('database.php');

$db = new Database;
$db->select('usuarios');
$db->delete('usuarios', 7);
