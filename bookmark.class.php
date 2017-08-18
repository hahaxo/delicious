<?php
/**
 *
 */
class Bookmark
{
  private $title;
  private $url;
  private $description;
  private $author;

  function __construct()
  {
    # code...
  }

  public function __get($name)
  {
    return $this->$name;
  }

  public function __set($name,$value)
  {
    return $this->$name = $value;
  }

  public function getBookmark($username)
  {
    # code...
    global $database;
    //return $datas = $database->select("bookmark", "*",["AUTHOR" => "yangpeiyuan","ORDER" => ["BID" => "DESC"]]);
    if ($username!='*') {
      return $datas = $database->select("bookmark", "*",["AUTHOR" => $username,"ORDER" => ["BID" => "DESC"]]);
    } else {
      return $datas = $database->select("bookmark", "*",["ORDER" => ["BID" => "DESC"]]);
    }

  }





}
