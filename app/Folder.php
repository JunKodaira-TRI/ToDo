<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    //tasksを追加
    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
}
