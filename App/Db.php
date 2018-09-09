<?php

namespace coop\app;

class Db
{
  protected $pdo;

  public function __construct()
  {
    $config = (include __DIR__ . '/config.php')['db'];
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
    return $stm->fetchAll(\PDO::FETCH_CLASS, $class);
  }

  public function execute($sql, $data = [])
  {
    $stm = $this->pdo->prepare($sql);
    return $stm->execute($data);
  }

  public function getLastId()
  {
    return $this->pdo->lastInsertId();
  }

}
