<?php

namespace App;
use App\Model\Role;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    static $userRoles = null;
    protected $fillable = [
        'name', 'email', 'password',
    ];

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

    public function role(){
        return $this->belongsToMany(Role::class);
    }
    public function hasRole($role){
        if(self::$userRoles == null){
            $r = [];
            foreach($this->role as $the_role){
                $r[] = strtolower($the_role->role);
            }
            self::$userRoles = $r;
        }
        return in_array(strtolower($role),self::$userRoles);
        /*if($this->role()->where('name', $role)->first()){
            return true;
        }else{
            return false;
        }*/
        
    }
}
