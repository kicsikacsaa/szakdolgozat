<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'worker_id',
        'date',
        'time',
        'table',
        'guests',
        
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function worker(){
        return $this->belongsTo(Worker::class);
    }
}
