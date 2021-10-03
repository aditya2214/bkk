<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilUsers extends Model
{
    public function relation_user2()
    {
        return $this->belongsTo(User::Class, 'id_user', 'id');
    }

}
