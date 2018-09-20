<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\user;

class mobile extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
