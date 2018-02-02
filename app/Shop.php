<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
     protected $fillable = [
      ' id' , 'name', 'email','picture','lat','lng','city'
    ];

  public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();;
    }












}
