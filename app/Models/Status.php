<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [
        'gunung_id',
        'keterangan',
    ];

    public function gunung()
    {
        return $this->belongsTo(Gunung::class);
    }
}
