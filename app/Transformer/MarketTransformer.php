<?php
namespace App\Transformer;

use App\Market;
use League\Fractal\TransformerAbstract;
use Illuminate\Support\Facades\Storage;

class MarketTransformer extends TransformerAbstract
{
    protected $availableIncludes = [];
    public function transform(Market $market)
    {
        return [
            'id' => $market->id,
            'name' => $market->name,
            'slug' => $market->slug,
            'description' => $market->description,
            'address' => $market->address,
            'cover_image' => url(Storage::url($market->image))
        ];
    }
}