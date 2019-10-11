<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['topic','domain','user_id','staff_id','presentation','report','video','github_link', 'is_research_published','research_paper'];
}
