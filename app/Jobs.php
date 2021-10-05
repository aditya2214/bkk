<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    public function relation_job_user_r()
    {
        return $this->belongsTo('\App\Relation_Jobs_Users', 'id_jobs', 'id');
    }
}
