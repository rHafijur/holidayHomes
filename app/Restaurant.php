<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable=[
        'vendor_id','location_id','title','street_address','description','phone','email','cover_image','menu_image','is_approved'
    ];
    public function vendor(){
        return $this->belongsTo('App\Vendor');
    }
    public function location(){
        return $this->belongsTo('App\Location');
    }
}
