<?php
namespace coop\App\Models;

/**
 * Gift card
 */
class GiftCard extends Model implements OrderInterface, HasWeightInterface
{
  public const TABLE = 'cards';
  public $title;
  public $serial_code;

  use HasPriceTrait;
}
