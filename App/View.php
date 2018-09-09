<?php

namespace coop\App;

/**
 * @property array $data
 */
class View
{
  /**
   * @property array $data
   */
  protected $data = [];

  /**
   * Вызывается если не находит свойство обьекта
   * arg $name неизветсное свойство
   * @return String
   */
  public function __get($name)
  {
    return $this->data[$name] ?? null;
  }
  /**
   * Вызывается если идет попытка записи в несуществующее свойство обьекта
   * arg $name неизветсное свойство
   */
  public function __set($name, $value)
  {
    $this->data[$name] = $value;
  }
  /**
   * @return Boolean
   */
  public function __isset($name)
  {
    return isset($this->data[$name]);
  }
  /**
   * @return String
   */
  public function render($template)
  {
    ob_start();
    include $template;
    $content = ob_get_contents();
    ob_end_clean();
    return $content;
  }
  /**
   * @method print String
   */
  public function display($template)
  {
    echo $this->render($template);
  }
}
