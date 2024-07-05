<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = [
        'n_contract',
        'affiliation_date',
        'quota_value',
        'site_issuance',
        'advisor',
        'holder_id',
        'payment_period',
        'state',
    ];

    // public function holder()
    // {
    //     return $this->hasOne(Holder::class);
    // }

    // public function beneficiaries()
    // {
    //     return $this->hasMany(Beneficiary::class);
    // }
}
