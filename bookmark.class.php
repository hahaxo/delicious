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

  public function getBookmark($value='')
  {
    # code...
    global $database;
    $datas = $database->select("bookmark", "*",["ORDER" => ["BID" => "DESC"]]);

  }












}
 ?>
