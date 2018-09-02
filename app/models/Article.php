<?php
namespace coop\app\models;
use coop\app\models\Model;

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
