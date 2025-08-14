<?php

namespace App\services;

use App\Events\HandsetViewedEvent;
use App\Http\Resources\HandsetResource;
use App\Models\Handset;

class HandsetService
{

    public function getHandsets(array $data)
    {
        $query = Handset::query();

        

        if(isset($data['brand_id']))
        {
            $query->where('brand_id', $data['brand_id']);
        }

        if(isset($data['price_min']))
        {
            $query->where('price','>', $data['price_min']);
        }
        if(isset($data['price_max']))
        {
            $query->where('price','<', $data['price_max']);
        }

        if(isset($data['price_min']) && isset($data['price_max']))
        {
            $query->whereBetween('price',[$data['price_min'],$data['price_max']]);
        }

        if(isset($data['features']))
        {
            $query->whereJsonContains('features', $data['features']);
        }
        //make an event to log fetch handsets
        //event(CreateLog::class, '');
        HandsetViewedEvent::dispatch();

        return HandsetResource::collection($query->paginate(10));
    }
}