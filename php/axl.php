<?php
$diaSemanalGe = [
    "Lunes"                 =>  9,
    "Martes"                =>  7,
    "Miercoles a viernes"   =>  10,
    "Sabado y Domingo"      =>  12,
];

$diaSemanalNi = [
    "Lunes"                 =>  7,
    "Martes"                =>  7,
    "Miercoles a viernes"   =>  8,
    "Sabado y Domingo"      =>  9,
];

$dia = "Miercoles a viernes";
$cantidadGe = 2; 
$cantidadNi = 3;

$precioUnitarioGe = $diaSemanalGe [$dia];
$precioUnitarioNi = $diaSemanalNi [$dia];

$costoEntradGe = $precioUnitarioGe * $cantidadGe;
$costoEntradaNi = $precioUnitarioNi * $cantidadNi;

$montoVenta = $costoEntradGe + $costoEntradGe;

$tasaIGV = 0.18;
$montoIGV = $montoVenta * $tasaIGV;

echo "---------------COMPRA DE ENTRADAS---------------" . "<br>";
echo "Precio de la entrada general: s/" . $precioUnitarioGe . "<br>";
echo "Precio de la entrada niños: s/" . $precioUnitarioNi . "<br>";
echo "Cantidad de entradas para general: " . $cantidadGe . "<br>";
echo "Cantidad de entradas para niños: " . $cantidadNi . "<br>";
echo "Costo de entrada para general: s/ ", $costoEntradGe . "<br>";
echo "Costo de entrada para niños: s/ ", $costoEntradaNi .  "<br>";
echo "Costo total de entradas: s/" . $montoVenta . "<br>";
//eeee//