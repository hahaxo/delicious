<?php

/**
 * [User description]
 */
class User
{
    private $username;
    private $password;

    function __construct()
    {
        //  session_start();
        $this->username = null;
        $this->password = null;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        return $this->$name = $value;
    }

    public static function getByUsername($username)
    {
        global $database;
        $user = new User();
        $result = $database->get("user", "*", ["USERNAME" => $username]);
        if ($result) {
            $user->username = $username;
            $user->password = $result['PASSWORD'];
        }
        return $user;
    }

    public function save()
    {
        global $database;
        $result = $database->insert("user", [
            "USERNAME" => $this->username,
            "PASSWORD" => sha1($this->password)
        ]);
        return $result;
    }


    public static function auth()
    {
        if (!isset($_SESSION['access']) || $_SESSION['access'] != true) {
            $url =  $_SERVER['REQUEST_URI'];
            $url = urlencode($url);
            $_SESSION['redirectpath'] = $url;
            redirect('login.php');
        }

    }

    public static function autoLogin()
    {
        global $database;

        $username = $_COOKIE['username'];
        $password = $_COOKIE['password'];
        $result = $database->has("user", ["AND" => ["USERNAME" => $username, "PASSWORD" => $password]]);//Return: [boolean] 返回 TRUE 或者 FALSE.
        //$_SESSION['access']='3333';
//echo $_SESSION['access'];
        var_dump($result);
        if ($result) {
            $_SESSION['username'] = $_COOKIE['username'];
            $_SESSION['access'] = '111';
        }else{
            $_SESSION['access'] = '2222';
        }
    }


    public static function validateEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }


}
