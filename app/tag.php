<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['tag_name', 'project_id'];

    /**
     * Get the project that owns the tag.
     */
    public function project()
    {
        return $this->belongsTo('App\project', 'project_id');
    }
}
