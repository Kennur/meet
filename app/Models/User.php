<?php

namespace App\Models;

use App\Models\RegisterEvent;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    // setting a eloquent relationship
    public function events()
    {
        return $this->hasMany(Event::class);
    }

      public function registeredEvents()
    {
        return $this->hasMany(RegisterEvent::class);
    }

    public function receivedRegister()
    {
        return $this->hasManyThrough(RegisterEvent::class,Event::class);
    }



}
