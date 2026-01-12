<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participate extends Model
{
    /** @use HasFactory<\Database\Factories\ParticipateFactory> */
    use HasFactory;
    protected $fillable=[
        'event_id',
        'user_id',
        'present'
    ];

        public function userKapcs() 
    { 
        return $this->belongsTo(User::class); 
    }
    public function eventKapcs() 
    { 
        return $this->belongsTo(EventModel::class); 
    }
    
}
