<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student_detail extends Model
{
    protected $fillable = [
        'branch', 'passing_year', 'twitter_id', 'github_id', 'user_id',
    ];

    /**
     * Get the user that owns the project.
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
