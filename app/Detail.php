<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    public function reservation()
    {
        return $this->belongsTo('App\Reservation');
    }

    public function getName()
    {
        return $this->reservation->user->name;
    }
    public function getAddress()
    {
        return $this->reservation->user->address;
    }
    public function getTel()
    {
        return $this->reservation->user->tel;
    }
    public function getMember()
    {
        return $this->reservation->member;
    }
}
