<?php
namespace coop\app\models;

trait HasPriceTrait
{
  protected $price;

  public function getPrice(){
    return $this->price;
  }
}
