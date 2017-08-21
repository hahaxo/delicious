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


  public static function auth()
  {
    if (!isset($_SESSION['access'])||$_SESSION['access']!=true) {
      redirect('login.php');
    }

  }

  public static function autoLogin()
  {
    global $database;
    $user = new User();
    $user->username = @$_COOKIE['username'];
    $user->password = @$_COOKIE['password'];
    $result = $database->has("user", ["AND" =>[ "USERNAME" => $user->username, "PASSWORD" => sha1($user->password)]]);//Return: [boolean] 返回 TRUE 或者 FALSE.
    if ($result) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['access'] = true;
    }
  }


  public static function validateEmail($email)
  {
    return filter_var($email,FILTER_VALIDATE_EMAIL);
  }


}
