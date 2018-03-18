<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'bedrijfsnaam', 'kraamnummer', 'email', 'password'
    ];

    protected $table = 'users';

    public $timestamps = true;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function IsAdmin()
    {
        return $this->IsAdmin;
    }

    public function IsUser()
    {
        return true;
    }

    public function orders()
    {
        return $this->hasMany('App\Orders');
    }

}
