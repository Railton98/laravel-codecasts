<?php

namespace Charlie;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  protected $fillable = [
    'name', 'city', 'state', 'birthdate', 'special_customer'
  ];

  protected $casts = [
    'special_customer' => 'boolean',
    'birthdate' => 'date',
  ];

  public function purchases()
  {
    return $this->hasMany(Puchases::class);
  }
}
