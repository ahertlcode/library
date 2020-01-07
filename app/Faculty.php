<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    //
    protected $fillable = ['faculty'];
    protected $hidden = ['created_at', 'updated_at'];

    public function departments()
    {
        return $this->hasMany('\App\Department');
    }
}
