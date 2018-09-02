<?php
namespace coop\app\models;
use coop\app\models\Model;

class User extends Model
{
  public const TABLE = 'users';
  public $nickname;
  public $password;
  public $email;
  public $role;

  public function getModelName()
  {
    return true;
  }
  
}
