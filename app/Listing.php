<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $table = 'listings';
    protected $fillable = [
    'id', 'titleeng', 'title', 'content', 'url1', 'url2', 'created_at', 'updated_at'
];
}
