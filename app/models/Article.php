<?php
namespace coop\app\models;
use coop\app\Db;

class Article
{
  public $id;
  public $title;
  public $content;
  public $visible;

  public function findAll()
  {
    $db = new Db();
    return $db->query("SELECT * FROM news", [], '\coop\app\models\Article');
  }
}
