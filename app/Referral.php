<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    protected $fillable = [
        'pick_id_of_makeaccount','pick_id_of_ref',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'pick_id_of_ref','id');
    }
}
