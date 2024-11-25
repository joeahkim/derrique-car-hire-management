<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NextOfKin extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'name',
        'phone_number',
        'id_passport_number',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
