<?php

namespace App\Models;

use App\Models\RegisterEvent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'description',
        'start',
        'end'
    ];

     public function user()
    {
        return $this->belongsTo(User::class);
    }

    // events can be registered many times

     public function registeredEvents()
    {
       return $this->hasMany(RegisterEvent::class);
    }
}
