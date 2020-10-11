<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
    'id', 'titleeng', 'title', 'content', 'url1', 'url2', 'created_at', 'updated_at'
];
}
