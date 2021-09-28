<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $guarded = [];


    // =====================================================
    // Обратная СВЯЗЬ ОДИН К ОДНОМУ
    // У одного обьекта Phone только один обьект User
    //======================================================
    public function user(){
        return $this->belongsTo(User::class);
    }


    // =====================================================
    // СВЯЗЬ ОДИН КО МНОГИМ
    // У одного обьекта Phone несколько обьектов Number
    //======================================================
    public function numbers(){
        return $this->hasMany(Number::class);
    }



}
