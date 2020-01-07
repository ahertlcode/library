<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $fillable = ['book_title', 'author_id', 'publisher_id', 'copies', 'date_published', 'isbn'];
    protected $hidden = ['created_at', 'updated_at'];

    public function author()
    {
        return $this->belongsTo('\App\Author');
    }

    public function publisher()
    {
        return $this->belongsTo('\App\Publisher');
    }
}
