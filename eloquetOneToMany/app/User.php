<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Mobile;

class user extends Model
{
    public function mobile()
    {
        return $this->hasMany(Mobile::class);  
    }
}
