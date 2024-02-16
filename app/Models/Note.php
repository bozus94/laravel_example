<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function getCreatedAtAttribute($value): array
    {
        return [
            "date" => Carbon::parse($value)->format('d-m-Y'),
            "hour" => Carbon::parse($value)->format('H:i:s')
        ];
    }

    public function getUpdatedAtAttribute($value): array
    {
        return [
            "date" => Carbon::parse($value)->format('d-m-Y'),
            "hour" => Carbon::parse($value)->format('H:i:s')
        ];
    }
}
