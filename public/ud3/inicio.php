<?php
require 'vendor/autoload.php';

use TestClasses\Daw2\Clases\Categoria;
use TestClasses\Daw2\Clases\Producto;

$categoria = new Categoria("Electronica");
$consolas = new Categoria("Consolas", $categoria);
$microsoft = new Categoria("microsoft", $consolas);
$seriesX = new Categoria("Series X", $microsoft);

echo $seriesX->getNombreCompleto();
echo $seriesX->getNombre();
echo "</br>";
$producto1 = new Producto("Macbook Pro",300);

$result = $producto1->descontarStock(300);

if($result === false){
    echo "no se puede ya que el stock es {$producto1->getStock()}";
}else{
    echo "queda {$result} de stock";
}






