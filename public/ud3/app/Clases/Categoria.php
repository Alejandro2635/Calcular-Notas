<?php
declare(strict_types=1);
namespace TestClasses\Daw2\Clases;

class Categoria{
    function __construct(String $nombre, Categoria $padre = null){
        if(strlen($nombre) == 0){
            throw new \InvalidArgumentException("No puede estar vacio");
        }else{
            $this->nombre = $nombre;
            $this->padre = $padre;
        }
    }

    public function getNombre():String{
        return $this->nombre;
    }



    public function getNombreCompleto(): String
    {
        if(!is_null($this->padre)){
            return "{$this->padre->getNombreCompleto()} > {$this->nombre}";
        }else{
            return $this->nombre;
        }
    }
}