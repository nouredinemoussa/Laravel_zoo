<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enclosures extends Model
{
    /** @use HasFactory<\Database\Factories\EnclosuresFactory> */
    use HasFactory;

    protected $fillable = ['name'];

    public function animals(){
        return $this -> belongsToMany(Animals::class,'animal_enclosure');
    }
}
