<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = [
        'name', 'slug', 'description', 'user_id', 'status'
    ];

    protected $attributes = [
        'hit' => 0,
    ];

    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
