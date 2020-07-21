<?php
namespace App\Transformer;

use App\Order;
use League\Fractal\TransformerAbstract;

class OrderTransformer extends TransformerAbstract
{
    public function transform(Order $order)
    {
        return [
            'id' => $order->id,
            'name' => $order->name,
            'phone' => $order->phone,
            'status' => $order->status,
            'country_id' => $order->country_id,
            'products' => $order->products,
            'delivery_info' => $order->delivery_info,
            'overal' => $order->overal,
            'meta' => $order->meta,
        ];
    }
}