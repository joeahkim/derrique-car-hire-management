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
        'email',
        'id_number',
        'nationality',
        'residence',
        'occupation',
        'drivers_license_number',
        'drivers_license_expiry_date',
        'id_card_front',
        'id_card_back'
    ];

    public function guarantor()
    {
        return $this->hasOne(Guarantor::class);
    }

    public function nextOfKin()
    {
        return $this->hasOne(NextOfKin::class);
    }
}
