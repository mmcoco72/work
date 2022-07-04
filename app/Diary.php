<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{   
    protected $table = 'diaries';
    
    protected $fillable = [
        'title',
        'body',
        ];
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
