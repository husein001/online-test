<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = ['user_id', 'total_true_answer', 'total_false_answer', 'total_passed_test'];
}
