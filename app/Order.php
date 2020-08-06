<?php

namespace App;

use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use FormAccessible;
    protected $guarded = ['id'];
    protected $dates = ['loadingDateTime', 'DeliveryDateTime'];

    public function deliveryClient()
    {
        return $this->belongsTo(Client::class, 'delivery_client_id', 'id');
        // return $this->belongsTo(Client::class, 'loading_client_id', 'id');
    }

    public function loadingClient()
    {
        // return $this->belongsTo(Client::class, 'delivery_client_id', 'id');
        return $this->belongsTo(Client::class, 'loading_client_id', 'id');
    }

    public function loadingLocation()
    {
        // return $this->belongsTo(Location::class, 'delivery_location_id', 'id');
        return $this->belongsTo(Location::class, 'loading_location_id', 'id');
    }

    public function deliveryLocation()
    {
        return $this->belongsTo(Location::class, 'delivery_location_id', 'id');
        // return $this->belongsTo(Location::class, 'loading_location_id', 'id');
    }


    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function metric()
    {
        return $this->belongsTo(Metric::class);
    }
}
