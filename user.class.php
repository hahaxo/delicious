<?php
/**
 *
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

  public function __set($name,$value)
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






















  public function register()
  {
    global $database;
    $result = $database->has("user", ["USERNAME" => $this->username]);

    if ($result==false) {
      $database->insert("user", [
      "USERNAME" => $this->username,
      "PASSWORD" => sha1($this->password)
      ]);
      return true;
    }else {
      return false;
    }

  }


  public function login()
  {
    global $database;
    $result = $database->has("user", ["AND" =>[ "USERNAME" => $this->username, "PASSWORD" => sha1($this->password)]]);
    $_SESSION['username'] = $this->username;
    $_SESSION['password'] = $this->password;
    setcookie('username',$this->username,time()+60*60*24*30*6);//设置时效6个月
    setcookie('password',$this->password,time()+60*60*24*30*6);//设置时效6个月
    return $result;
  }

  public static function auth()
  {
    if (!isset($_SESSION['access'])||$_SESSION['access']!=true) {
      redirect('login.php');
    }

  }


  public static function validateEmail($email)
  {
    return filter_var($email,FILTER_VALIDATE_EMAIL);
  }

















}
