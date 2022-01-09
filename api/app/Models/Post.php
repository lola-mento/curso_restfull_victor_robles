<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table =  'posts';

    protected $fillable = [
        'title',
        'content',
        'image',
        'category_id'
    ];

    //Relación de uno a muchos INVERSA (MUCHOS A UNO)
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category','category_id');
    }

}