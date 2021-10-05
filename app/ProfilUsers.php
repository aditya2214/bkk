<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilUsers extends Model
{
    public function relation_user2()
    {
        return $this->belongsTo(User::Class, 'id_user', 'id');
    }

    public function profil_member_user_r()
    {
        return $this->belongsTo('\App\MemberSystem', 'id_member');
    }

}
