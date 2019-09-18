<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'CategoryName';
    }
    
    public function product(){
        return $this->hasMany(Product::class);
    }


    public function scopeParentCategory($query){
        return $query->where('CategoryParent','0');
    }
    public function getParentCategory() {
        return $this->belongsTo(self::class, 'CategoryParent');
    }
    
    public function getChildCategories(){
        return $this->hasMany(self::class, 'CategoryParent','id');
    }
    // public function getParentCategory() {
    //     return $this->hasOne(self::class, 'id', 'CategoryParent');
    // }


    // public function getChildCategories(){
    //     return $this->hasMany(self::class, 'CategoryParent','id');
    // }
}
