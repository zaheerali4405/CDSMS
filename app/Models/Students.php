<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    public function getProgramName()
    {
        return $this->belongsTo(Packages::class, 'program_id', 'id');
    }

}
