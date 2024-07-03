<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    use HasFactory;

    protected $beneficiary = [
        'contract_id',
        'identification',
        'name',
        'date_of_birth',
        'state',
    ];

    public function contract()
    {
        return $this->belongsTo(Contract::class);
    }
}