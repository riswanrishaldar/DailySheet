<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'department',
        'designation'
    ];

    public function tasks(){

        return $this->hasMany(Task::class,'id','id');
    }

}
