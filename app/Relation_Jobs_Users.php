<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relation_Jobs_Users extends Model
{
    //
    public function relation_user()
    {
        return $this->belongsTo('\App\ProfilUsers', 'id_user', 'id_user');
    }   
    
}
