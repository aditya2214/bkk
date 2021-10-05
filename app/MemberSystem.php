<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberSystem extends Model
{
    public function profil_user_r()
    {
        return $this->belongsTo('\App\ProfilUsers', 'id');
    }
}
