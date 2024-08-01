<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'user_id',
        'subject',
        'description',
        'status',
        'resolution',
        'start_date_time',
        'end_date_time'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
