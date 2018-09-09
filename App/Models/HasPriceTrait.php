<?php
namespace coop\App\Models;

trait HasPriceTrait
{
  protected $price;

  public function getPrice(){
    return $this->price;
  }
}
