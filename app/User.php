<?php

//Created by: Ricardo Saldarriaga

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user' ,'name', 'email', 'password','carrera', 'comuna'
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

    public function getId(){
        return $this->attributes['id'];
    }

    public function setId($id){
        $this->attributes['id'] = $id;
    }

    public function getRole(){
        return $this->attributes['role'];
    }

    public function getName(){
        return $this->attributes['name'];
    }

    public function setName($name){
        $this->attributes['name'] = $name;
    }

    public function getUser(){
        return $this->attributes['user'];
    }

    public function setUser($user){
        $this->attributes['user'] = $user;
    }

    public function getCarrera(){
        return $this->attributes['carrera'];
    }

    public function setCarrera($carrera){
        $this->attributes['carrera'] = $carrera;
    }

    public function getComuna(){
        return $this->attributes['comuna'];
    }

    public function setComuna($comuna){
        $this->attributes['comuna'] = $comuna;
    }

    public function getEmail(){
        return $this->attributes['email'];
    }

    public function setEmail($email){
        $this->attributes['email'] = $email;
    }

    public function getPassword(){
        return $this->attributes['password'];
    }

    public function setPassword($password){
        $this->attributes['password'] = $password;
    }

    public static function validate(){
        return [
            'user' => ['required', 'string', 'max:255'],
            'carrera' => ['required', 'string', 'max:255'],
            'comuna' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255',],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ];
    }
}
