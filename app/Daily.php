<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daily extends Model
{
    protected $fillable = [
        'first_answer', 'second_answer', 'third_answer', 'user_id'
    ];

    public function user()
    {
        return $this->hasOne('App\users');
    }
}
