<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    public function scopeUpcoming($train_time)
    {
        return $train_time->whereDate('departure_time', '>=', today());
    }
}
