<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilUsers extends Model
{
    public function relation_user2()
    {
        return $this->belongsTo('\App\User', 'id_user', 'id');
    }
}
