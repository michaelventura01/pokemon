<?php

namespace pokemon;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    //para generar relaciones de modelos
    //metodo para devolver relacion de tabla de roles
    //belongsToMany() recive un modelo
    
    //validacion de roles en usuarios
    public function roles(){
        return $this->belongsToMany('pokemon\Role');
    }
    //tercero
    public function authorizeRoles($roles){
        if($this->hasAnyRole($roles)){
            return true;
        }
        
        abort(401,"Accion no autorizada");
        
    }
    //segundo
    public function hasAnyRole($roles){
        if(is_array($roles)){
            foreach($roles as $rol){
                if($this->hasRole($rol)){
                    return true;
                }
            }
        }else{
            if($this->hasRole($roles)){
                return true;
            }
            return false;
            
        }
    }
    //primero
    public function hasRole($role){
        if($this->roles()->where('name',$role)->first()){
            return true;
        }
        return false;
        
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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
}
