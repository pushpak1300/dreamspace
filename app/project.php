<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['topic','domain','user_id','staff_id','presentation','report','video','github_link', 'is_research_published','research_paper'];
    use SoftDeletes;

    /**
     * Get the mentor record associated with the project.
     */
    public function mentor()
    {
        return $this->belongsTo('App\User', 'staff_id');
    }
    /**
     * Get the user that owns the project.
     */
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    /**
     * Get the tags for the current project
     */
    public function tags()
    {
        return $this->hasMany('App\tag');
    }
    
}
