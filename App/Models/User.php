<?php
namespace coop\App\Models;

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
