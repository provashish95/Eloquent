<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phone extends Model
{
    protected $fillable = [
        'user_id', 'phone'
    ];

    public function user(){
        return $this->belongsTo(user::class);
    }
}
