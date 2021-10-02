<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function paginateByLimit(Int $limit_count = 5)
    {
        return $this->orderBy('updated_at', 'desc')->paginate($limit_count);
    }
    
    protected $fillable = [
        'title',
        'body',
    ];
}
