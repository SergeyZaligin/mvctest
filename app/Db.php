<?php

namespace coop\app;

class Db
{
  protected $pdo;

  public function __construct()
  {
    $config = (include __DIR__ . '/../config.php')['db'];
    try {
      $this->pdo = new \PDO(
        "mysql:host={$config['host']};dbname={$config['dbname']}",
        $config['user'],
        $config['password']
      );
      $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    	$this->pdo->exec('SET NAMES "utf8"');
    } catch (\Exception $e) {
      echo 'Невозможно подключиться к серверу баз данных.' . $e->getMessage();
    	exit();
    }

  }

  public function query($sql, $data = [], $class)
  {
    $stm = $this->pdo->prepare($sql);
    $stm->execute($data);
    $data = $stm->fetchAll();
    $res = [];
    foreach($data as $row){
      $item = new $class;
      foreach($row as $key => $val){
        if(is_numeric($key)){
          continue;
        }
        $item->$key = $val;
      }
      $res[] = $item;
    }
    return $res;
  }

}
