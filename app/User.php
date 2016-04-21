<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
       
    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['github_id','name', 'email', 'password'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    /**
     * Returns a boolean
     */
    public function isAdmin()
    {
       foreach ($this->roles()->get() as $role)
       {
           if ($role->name == 'Admin')
           {
               return true;
           }
       }
       return false;
    }
    
    public function articles()
    {
        return $this->hasMany('App\Lesson');
    }
    
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }
}
