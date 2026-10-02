<?php

$preciosOro = [
    "1" => ["nombre" => "Aretes Rosalía", "precio" => 46.00],
    "2" => ["nombre" => "Aretes Cuarzo Plus", "precio" => 44.00],
    "3" => ["nombre" => "Aretes piedra brillantes", "precio" => 47.00],
    "4" => ["nombre" => "Aretes de compromiso Estándar", "precio" => 47.00],
    "5" => ["nombre" => "Aretes de Compromiso brillantes", "precio" => 52.00]
];

$tipoCambioDolar = 3.40;
$tipoCambioEuro = 4.20;

$opcionProducto = "1"; 
$gramos = 25;    

if (!array_key_exists($opcionProducto, $preciosOro)) {
    echo "Error: Producto no válido.";
}elseif ($gramos < 20) {
    echo "No procede la venta o cotización: El pedido debe ser de un mínimo de 20 gramos";
}else {
    $productoSeleccionado = $preciosOro[$opcionProducto];
    $totalSoles = $gramos * $productoSeleccionado['precio'];

    $totalDolares = $totalSoles / $tipoCambioDolar;
    $totalEuros = $totalSoles / $tipoCambioEuro;
    
    echo "--- COTIZACIÓN: " . $productoSeleccionado['nombre'] . " ---<br>";
    echo "Cantidad en gramos (g): " . $gramos . "<br>";
    echo "Total en Soles (S/.): " . number_format($totalSoles, 2) . "<br>";
    echo "Total en Dólares ($):" . number_format($totalDolares, 2) . "<br>";
    echo "Total en Euros (€): " . number_format($totalEuros, 2) . "<br>";
}
?>