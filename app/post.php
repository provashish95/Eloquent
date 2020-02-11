<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = [
        'user_id', 'category_id','title','description'
    ];

    public function category(){
        return $this->belongsTo(category::class);
    }

    public function user(){
        return $this->belongsTo(user::class);
    }

}
