<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gunung extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_gunung',
        'deskripsi',
        'status_buka',
        'link_booking',
    ];

    public function statuses()
    {
        return $this->hasMany(Status::class);
    }
}
