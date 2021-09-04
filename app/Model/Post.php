<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    
    public function district(){
        return $this->belongsTo(District::class, 'district_id', 'id');
    }
}
