<?php
namespace coop\App;
use coop\App\Db;
use coop\App\View;

abstract class Controller
{
  protected $view;

  public function __construct()
  {
    $this->view = new View();
  }

  abstract public function __invoke();

}
