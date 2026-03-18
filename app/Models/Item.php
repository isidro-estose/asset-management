<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'assetCode',
        'assetSerialNumber',
        'assetBrand',
        'assetModel',
        'assetCategoryId',
        'assetPurchasePrice',
        'assetPurchaseDate',
        'assetCondition',
        'currentempId',
        'assetWarrantyExpiry',
        'userIdEncoded',
        'supplierId',
        'assetStatus',
    ];
}
