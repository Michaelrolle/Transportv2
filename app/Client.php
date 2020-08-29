<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Client extends Model
{
    use Notifiable;

    protected $fillable = ['name', 'email', 'phoneNumber'];

    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
