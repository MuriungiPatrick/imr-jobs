<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    // CATEGORY CLASS
    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    // LATEST FIRST
    public function scopeLatestFirst()
    {
        return $this->orderby('created_at', 'desc');
    }


    // PUBLISHED JOBS
    public function scopepublished($query)
    {
        return $query->where('published_at', "<=", now());
    }


}
