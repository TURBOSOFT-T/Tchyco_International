<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        
            'phonecode'

    ];


   
    public function states(){
        return $this->hasMany(State::class, 'country_id','id');
    }

    public function inscriptionss(){
        return $this->hasMany(Inscription::class, 'country_id','id');
    }
}
