<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    //attributes id, disponible, price, created_at, updated_at, user_id
    protected $fillable = ['id_user', 'comuna', "carrera"];

    public function getIdUser()
    {
        return $this->attributes['id_user'];
    }

    public function setIdUser($id)
    {
        $this->attributes['id_user'] = $id;
    }

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getComuna()
    {
        return $this->attributes['comuna'];
    }

    public function setComuna($comuna)
    {
        $this->attributes['comuna'] = $comuna;
    }

    public function getCarrera()
    {
        return $this->attributes['carrera'];
    }

    public function setCarrera($carrera)
    {
        $this->attributes['carrera'] = $carrera;
    }

    public static function validate(){
        return [
            "comuna" => "required",          
            "carrera" => "required",
            "id_user" => "required|unique:automovils"
        ];
    }

}
