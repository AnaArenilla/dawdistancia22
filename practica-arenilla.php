<?php
/**
*@author Ana Arenilla Villalba
*@version 7.4
*@param precio1 ,precio del primer producto.
*@param precio2, precio del segundo producto.
*@return total , la función devuelve el precio total de los productos.
*{@internal esta función recibre el precio de los productos de la compra,
mensaje para desarrolladores}
*/

function comprar($precio1,$precio2){
$total=$precio1+$precio2;
return $total;
}
?>
