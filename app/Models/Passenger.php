<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;

    protected $fillable = [
        'Name', 'Surname', 'Birthday'
    ];

    /**
     * The users that belong to the hobby.
     */
    public function flights()
    {
        return $this->belongsToMany(Flight::class);
    }
}
