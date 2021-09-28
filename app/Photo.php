<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $guarded = [];
    public $namespace = 'App\Photo';

    // =====================================================
    // ПОЛИМОРФНЫЕ ОТНОШНОЕНИЯ ОБРАТНОЕ ОТНОШЕНИЕ
    // Через данный вид связи есть возможность хранить комментарии(сущность) для всех видов сущности (Фото, Видео, Посты)
    // поле link указывает на связку в таблице Comment
    //======================================================
    public function comments(){
        return $this->morphMany(Comment::class, 'link');
    }
}
