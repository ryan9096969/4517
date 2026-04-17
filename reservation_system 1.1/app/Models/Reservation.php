<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'member_id', 'reservation_date', 'time_slot', 'table_name'
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}