<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cour extends Model
{
    use HasFactory;
    function filiere(){
        return $this->belongsTo('App\Models\Filiere');
    }
    function student(){
        return $this->hasMany('App\Models\Student');
    }
    protected $fillable = [
        'name',
        'description',
        'filiere_id',
        'token'
    ];
}
