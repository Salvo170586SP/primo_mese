<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Passenger;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_volo',
        'partenza',
        'destinazione',
        'data_volo',
        'capitan_id'
    ];

    /**
     * The users that belong to the hobby.
     */
    public function passengers()
    {
        return $this->belongsToMany(Passenger::class);
    }

    public function capitan()
    {
         return $this->belongsTo(Capitan::class);
    }
}
