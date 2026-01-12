<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventModel extends Model
{
    /** @use HasFactory<\Database\Factories\EventFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'agency_id',
        'limit',
        'date',
        'location',
        'status'
    ];
    
    public function agencyKapcs() {
        return $this->belongsTo(Agency::class);
    }

    public function participatesKapcs() {
        return $this->hasMany(Participate::class);
    }

    public function usersKapcs() {
        return $this->belongsToMany(User::class, 'participates')
            ->withPivot(['present'])
            ->withTimestamps();
    }
}
