<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'last_name', 'email', 'password', 'telephone', 'foto', 'estado'
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
     * Array con las reglas de validación para el login
     *
     * @var array
     */
    public static $rules_login = [
        'email' => 'required|max:255',
        'password' => 'required|min:3',
    ];

    /**
     * Array con las reglas de validación para el registro
     *
     * @var array
     */
    public static $rules_register = [
        'name' => 'required|min:3',
        'email' => 'required|max:255|email|unique:users',
        'password' => 'required|min:3|confirmed',
    ];


    /**
     * Array con las reglas de validación para el formulario de edición
     *
     * @var array
     */
    public static $rules_edit = [
        'name' => 'required|min:3',
        'foto' => 'sometimes|image'
    ];

}
