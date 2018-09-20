<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\user;

class role extends Model
{
    public function users()
    {
        return $this->belongsToMarry(user::class)->withTimestamps();
    }
}
