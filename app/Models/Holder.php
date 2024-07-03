<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Holder extends Model
{
    use HasFactory;

    protected $holder = [
        'contract_id',
        'identification',
        'name',
        'date_of_birth',
        'phone_number',
        'address',
        'shipping_location',
        'state',
    ];

    public function contract()
    {
        return $this->belongsTo(Contract::class);
    }
}
