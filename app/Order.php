<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable = [
            'product_id', 'user_id', 'quantity', 'address' 
        ];
    public function user()
    {
    	return $this->belongsTo('App/User','user_id');
    }
    public function product()
    {
    	return $this->belongsTo('App/Product','product_id');
    }
}
