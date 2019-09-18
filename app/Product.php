<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Searchable;

    protected $guarded = [];

   // protected $fillable = ['ProductName'];
   public function scopeFeatured($query){
    return $query->where('ProductTag','Featured');
}

public function scopeNewRelease($query){
    return $query->where('ProductTag','New Release');
}
        public function scopeBestSelling($query){
            return $query->where('ProductTag','Best Selling');
        }
public function scopeOnSale($query){
    return $query->where('ProductTag','On Sale');
}

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function productimages(){
        return $this->hasMany(ProductImages::class);
    }
    public function sales(){
        return $this->hasOne(Sales::class);
    }

    // public function check_sales(){
    //     if(strtotime($this->sales->first()->startdate)<=strtotime(date('Y-m-d')) && strtotime($this->sales->first()->enddate)>=strtotime(date('Y-m-d'))){
    //         return true;
    //     }else{
    //         return false;
    //     }
    // }
    public function searchableAs()
    {
        return 'product';
    }
}
