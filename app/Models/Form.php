<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    //protected $table = 'forms';

    //public $timestamps = true;

    //protected $fillable = [
    //    'streamCode', 'form', 'stream'
    //];

    protected $guarded = [];

    public function getStudent()
    {
        return $this->hasMany(Student::class);
    }
}
