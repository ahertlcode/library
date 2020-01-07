<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    protected $fillable = ['name', 'email', 'phone'];
    protected $hidden = ['created_at', 'updated_at'];


    public function book()
    {
        return $this->hasMany('\App\Book', 'author_id');
    }
}
