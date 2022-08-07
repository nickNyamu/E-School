<?php

namespace App\Models;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    use HasFactory;

    //protected $table = 'parents';

    //protected $fillable = [
      //  'fname', 'lname', 'email', 'nationalID', 'role', 'password'
    //];

    protected $guarded = [];

      public function setPasswordAttribute($pass){
        $this->attributes['password'] = Hash::make($pass);        
    }

    public function getStudent()
    {
        return $this->hasMany(Student::class);
    }
}
