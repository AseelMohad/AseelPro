<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title', 'img'];
    public function tasks()
    {
        return $this->belongsToMany(User::class);
        return $this->hasMany(Task::class);
        
    }
}