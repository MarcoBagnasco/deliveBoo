<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'tot_paid', 'customer_name', 'customer_lastname', 'customer_address', 'phone_number'
    ];

    public function restaurant()
    {
        return $this->belongsTo('App\Restaurant');
    }

    public function dishes() 
    {
        return $this->belongsToMany('App\Dish');
    }
}
