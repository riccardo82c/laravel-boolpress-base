<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model {

    public $timestamps = false;

    protected $guarded = [];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
