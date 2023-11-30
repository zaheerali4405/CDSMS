<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applications extends Model
{
    use HasFactory;
    public function getUser()
    {
        return $this->belongsTo(User::class , 'user_id', 'id');
    }
    public function getProgram()
    {
        return $this->belongsTo(Packages::class , 'program_id', 'id');
    }
}
