<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'description',
        'user_id'
        
    ];

    public function myUserRealation(){
        return $this->belongsto(User::class,'user_id');
    }
}
