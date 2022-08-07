<?php

namespace App\Models;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    use Notifiable;

    protected $table = 'admins';

    protected $guard = 'admin';

    protected $fillable = [
        'fname', 'lname', 'email', 'password'
    ];

    public function setPasswordAttribute($pass){
        $this->attributes['password'] = Hash::make($pass);   
    }

    protected $hidden = [
        'password', 'remember_token',
    ];
}
