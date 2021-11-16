<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getName()
    {
        return $this->user->name;
    }
    public function getAddress()
    {
        return $this->user->address;
    }
    public function getTel()
    {
        return $this->user->tel;
    }
}
