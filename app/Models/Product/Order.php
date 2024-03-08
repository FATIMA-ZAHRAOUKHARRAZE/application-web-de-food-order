<?php

namespace App\Models\product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=[
        "name",
        "last_name",
        "address",
        "town",
        "state",
        "zip_code",
        "email",
        "phone_number",
        "price",
        "user_id",
        "order_note",
        "status",
        
    ];
    public $timestamps =true;
}
