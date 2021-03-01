<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table='posts';
    protected $fillable = ['title','image','content','short_desc','author','cate_id'];

    public function category(){
        return $this->belongsTo(Category::class,'cate_id');
    }
}
