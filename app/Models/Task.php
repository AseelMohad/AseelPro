<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['task', 'category_id', 'completed'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}