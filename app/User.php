<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Phone;

class User extends Model
{
    protected $guarded = [];

    public function phone(){
        return $this->hasOne(Phone::class);
    }
}
