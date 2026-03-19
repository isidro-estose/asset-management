<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $fillable = [
        'vendorName',
        'vendorContactPerson',
        'vendorPhoneNumber',
        'vendorEmail',
        'vendorAddress',
    ];
}
