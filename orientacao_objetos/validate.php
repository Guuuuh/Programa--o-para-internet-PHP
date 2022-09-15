<?php

require('login.php');

$user = $_POST['user'];
$password = $_POST['password'];

$db = new Login;
$retorno = $db->checkUser($user, $password);

if($retorno->num_rows == 1) {
    echo 'Logado';
} else {
    echo 'Fail';
}
