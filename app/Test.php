<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = ['title', 'category_id', 'author_id'];

    public function category(){
        return $this->hasOne(Category::class);
    }

    public function questions(){
        return $this->hasMany(Question::class);
    }
}
