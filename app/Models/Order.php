<?php

namespace App\Models;

use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];

    // In Order.php (Order model)
    public function orderitems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
