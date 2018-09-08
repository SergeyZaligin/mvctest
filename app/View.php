<?php

namespace coop\app;

class View
{
  protected $data = [];

  public function assign($name, $value)
  {
    $this->data[$name] = $value;
  }
  /**
   * Вызывается если не находит свойство
   * arg $name неизветсное свойство
   */
  public function __get($name)
  {
    return $this->data[$name] ?? null;
  }

  public function display($template)
  {
    include $template;
  }
}
