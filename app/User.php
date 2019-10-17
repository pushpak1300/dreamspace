<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $fillable = [
        'name', 'roll_no', 'email', 'password', 'is_fully_registered', 'avtar',
    ];

    /**
     * Get the project for the current user.
     */
    public function projects()
    {
        return $this->hasMany('App\project', 'user_id');
    }

    /**
     * Get the project record associated with the staff.
     */
    public function projectaasigned()
    {
        return $this->hasOne('App\project', 'staff_id');
    }

    /**
     * Get the userdetails associated with the staff.
     */
    public function studentdetails()
    {
        return $this->hasOne('App\student_detail', 'user_id');
    }

    /**
     * Get the staffdetails associated with the staff.
     */
    public function staffdetails()
    {
        return $this->hasOne('App\staff_details', 'user_id');
    }
}
