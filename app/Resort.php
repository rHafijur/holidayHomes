<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resort extends Model
{
    protected $fillable=[
        'vendor_id','location_id','title','street_address','description','phone','email','rules','cover_image','image_1','image_2','image_3','is_approved'
    ];
}
