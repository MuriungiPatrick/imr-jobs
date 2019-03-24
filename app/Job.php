<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
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
