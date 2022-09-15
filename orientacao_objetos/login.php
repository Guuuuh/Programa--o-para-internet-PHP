<?php
require('database.php');

class Login extends Database {
    private $user;
    private $password;

    public function checkUser($user, $password)
    {
        $sql = "SELECT * FROM usuarios WHERE user = '$user' AND senha = '$password'";
        return mysqli_query($this->conexao, $sql);
    }
}