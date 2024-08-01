<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'department_id',
        'site_id'
    ];

    public function tickets(){
        return $this->hasMany(Ticket::class);
    }

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function site(){
        return $this->belongsTo(Site::class);
    }
}
