<?php
namespace coop\app\models;
use coop\app\Db;

abstract class Model
{
  public const TABLE = '';
  public $id;

  abstract public function getModelName();

  public static function findAll()
  {
    $db = new Db();
    $sql = "SELECT * FROM " . static::TABLE;
    return $db->query($sql, [], static::class);
  }
}
