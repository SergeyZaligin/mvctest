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

  public function insert($value='')
  {
    $fields = get_object_vars($this);
    $cols = [];
    $data = [];
    foreach($fields as $name => $val){
      if("id" === $name){
        continue;
      }
      $cols[] = $name;
      $data[":" . $name] = $val;
    }

    $sql = "INSERT INTO " .
            static::TABLE .
            "(" .
            implode(",", $cols) .
            ")" .
            "VALUES" .
            "(" .
            implode(",", \array_keys($data)) .
             ")";
    $db = new Db();
    $db->execute($sql, $data);
    $this->id = $db->getLastId();
  }

}
