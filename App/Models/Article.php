<?php
namespace coop\App\Models;
use coop\App\Model;

class Article extends Model
{
  public const TABLE = 'news';
  public $title;
  public $content;
  public $visible;

  public function getModelName()
  {
    return true;
  }
}
