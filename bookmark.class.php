<?php
/**
 * [Bookmark description]
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


  public function getBookmark($username='*')
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

  public function getRSS($username='*')
  {
    # code...
    global $database;
    //return $datas = $database->select("bookmark", "*",["AUTHOR" => "yangpeiyuan","ORDER" => ["BID" => "DESC"]]);
    $count = $database->count("bookmark");
    if ($username!='*') {
      return $datas = $database->select("bookmark", "*",["AND"=>["AUTHOR" => $username,"BID[<>]"=> [$count-20,$count]],"ORDER" => ["BID" => "DESC"]]);
    } else {
      return $datas = $database->select("bookmark", "*",["ORDER" => ["BID" => "DESC"]]);
    }

  }



}
