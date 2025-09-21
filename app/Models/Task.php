<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable=['title', 'description', 'category_id', 'priority', 'completed', 'image_url'];
    public function category(){
        return $this->belongsTo(Category::class)->withDefault();
    }
    protected static function booted()
    {
        static::created(function ($task) {
            $task->image_url = "https://picsum.photos/seed/task{$task->id}/400/300";
            $task->save();
        });
    }

}
