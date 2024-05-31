<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Student extends Model
{
    use HasFactory;
    function filiere(){
        return $this->belongsTo('App\Models\Filiere');
    }

    function cour(){
        return $this->hasMany('App\Models\Cour');
    }
    protected $fillable=['name','email','phone','birthdate','filiere_id','token'];
}
