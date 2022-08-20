<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    // protected $fillable = [
    //     'full_name',
    //     'email',
    //     'password',
    //     'wallet',
    // ];

    protected $guarded=['role'];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class,'payment_user_id');
    }

    public function subscribes()
    {
        return $this->hasMany(Subscribe::class,'subscribe_user_id');
    }

    public function packages()
    {
        return $this->belongsToMany(Package::class,'user_packages','user_id','package_id')->withPivot(['amount','created_at']);
    }

}
