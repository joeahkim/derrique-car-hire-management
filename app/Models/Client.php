<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone_number',
        'id_number',
        'id_passport_photo',
        'nationality',
        'occupation',
        'residence',
        'drivers_license_number',
        'drivers_license_expiry_date'
    ];

    public function guarantor()
    {
        return $this->hasOne(Guarantor::class);
    }
}
