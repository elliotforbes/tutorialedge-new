<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //
    protected $fillable = [
        'title',
        'body',
        'slug',
        'author',
        'description',
        'id',
        'lesson_id',
        
        'created_at',
        'updated_at'
    ];
    
    public function comments()
    {
        return $this->hasMany("App\Comment");
    }
    
    /**
    * Get the tags for this article
    */
    public function tags()
    {
        return $this->belongsToMany("App\Tag")->withTimestamps();
    }

}
