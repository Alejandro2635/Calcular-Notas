<?php
declare(strict_types=1);
namespace TestClasses\Daw2\Clases;

class Producto{

    function __construct(String $nombreProducto, int $stock, array $relacionados = null)
    {
        $this->nombreProducto = $nombreProducto;
        $this->relacionados = $relacionados;
        $this->stock = $stock;
    }
    function getStock(){
        return $this->stock;
    }
    function descontarStock($cuanto){
        if($cuanto > $this->stock){
            return false;
        }else{
            $this->stock -= $cuanto;
            return $this->stock;
        }
    }
    function getNombre(): String
    {
        return $this->nombreProducto;
    }
}