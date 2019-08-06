<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $fillable=[
        'company','address','phone','user_id'
    ];
    public function user(){
        return $this->belongsTo("App\User");
    }
}
