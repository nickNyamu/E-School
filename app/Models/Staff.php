<?php

namespace App\Models;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Staff extends Authenticatable
{
    use HasFactory;

    use Notifiable;

    protected $table = 'staff';

    protected $fillable = [
        'fname', 'lname', 'email', 'nationalID', 'telNo', 'hCounty', 'status', 'role', 'password'
    ];

    public function setPasswordAttribute($pass){
        $this->attributes['password'] = Hash::make($pass);   
    }
}

