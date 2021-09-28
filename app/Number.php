<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Number extends Model
{
    protected $guarded = [];

    public function phone(){
        // =====================================================
        // Обратная СВЯЗЬ ОДИН КО МНОГИМ
        // У одного обьекта Number только один обьект User
        //======================================================
        return $this->belongsTo(Phone::class);
    }
}
