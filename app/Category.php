<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'name'
        ];
    
    public function posts()
    {
        return $this->belongsToMany('App\Post');
    }
    
    public function getByCategory(int $limit_count = 5)
    {
        return $this->posts()->with('categories')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
