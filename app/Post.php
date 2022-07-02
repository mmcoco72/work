<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Post extends Model
{   
    protected $table = 'posts';
    
    protected $fillable = [
        'title',
        'body',
        'user_id',
        ];
    
    public function categories()
    {
        return $this->belongsToMany('App\Category');

    }
        
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this::with('categories')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
