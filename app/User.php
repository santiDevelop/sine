<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
class User extends Authenticatable
{
    use Notifiable;
    // permite llamar al metodo delete a un usuario

    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','user','cedula','cargo','typeuser','cbombero', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    // funtion que permite crear una variable de acceso directo llamada is_admin en menu.blade para verificar si es administrador el usuario y podra ver el menud e admin.
     public function getIsAdminAttribute(){
       return $this->typeuser==1;

     }

}
