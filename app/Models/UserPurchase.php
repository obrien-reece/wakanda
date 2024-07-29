<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPurchase extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "product_id",
        "mpesa_code",
        "quantity",
        "unit_price",
        "total_price",
        "purchase_date",
        "delivery_address",
        "delivery_status",
        "payment_status",
        "payment_method",
        "transaction_id",
        "remarks",
    ];

    protected $table = 'user_purchase';

}
