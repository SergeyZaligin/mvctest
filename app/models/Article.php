<?php
namespace coop\app\models;
use coop\app\Db;

class Article
{
  public const TABLE = 'news';
  public $id;
  public $title;
  public $content;
  public $visible;

  public static function findAll()
  {
    $db = new Db();
    return $db->query("SELECT * FROM " . self::TABLE, [], self::class);
  }
}
