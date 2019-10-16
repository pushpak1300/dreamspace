<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class staff_detail extends Model
{
    /**
     * Get the user that owns the project.
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
