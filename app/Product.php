<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'name', 'description', 'price','quantity','genre',
    ];
      public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
        public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function wishlist(){
       return $this->hasMany(Wishlist::class);
    }
}
