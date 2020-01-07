<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $fillable = ['department', 'faculty_id'];
    protected $hidden = ['created_at', 'updated_at'];

    public function users()
    {
        return $this->hasMany('\App\User');
    }

    public function faculty()
    {
        return $this->belongsTo('\App\Faculty');
    }
}
