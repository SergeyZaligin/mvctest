<?php
namespace App;

class Db{

  protected $db;

  public function __construct()
  {
    $config = (include __DIR__ . '/../config.php')['db'];
    $this->db = new \PDO(
      "mysql:host={$config['host']};dbname={$config['dbname']}",
      $config['user'],
      $config['password']
    );
  }

}
