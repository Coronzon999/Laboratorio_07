<?php

$preciosOro = [
    "Aretes Rosalía" => 46.00,
    "Aretes Cuarzo Plus" => 44.00,
    "Aretes piedra brillantes" => 47.00,
    "Aretes de compromiso Estándar" => 47.00,
    "Aretes de Compromiso brillantes" => 52.00
];

$tipoCambioDolar = 3.40;
$tipoCambioEuro = 4.20;

$opcionProducto = "Aretes Rosalía";
$gramos = 25;

if (!array_key_exists($opcionProducto, $preciosOro)) {
    echo "Error: Producto no válido.\n";
} else if ($gramos < 20) {
    echo "No procede la venta o cotización: El pedido debe ser de un mínimo de 20 gramos.\n";
} else {
    $precioSeleccionado = $preciosOro[$opcionProducto];
    $totalSoles = $gramos * $precioSeleccionado;

    $totalDolares = $totalSoles / $tipoCambioDolar;
    $totalEuros = $totalSoles / $tipoCambioEuro;

    echo "--- COTIZACIÓN: " . $opcionProducto . "\n";
    echo "Cantidad en gramos (g) : " . $gramos . "\n";
    echo "Total en Soles (S/.) " . number_format($totalSoles, 2) . "\n";
    echo "Total en Dólares ($): " . number_format($totalDolares, 2) . "\n";
    echo "Total en Euros (€): " . number_format($totalEuros, 2) . "\n";
}

?><?php

$preciosOro = [
    "Aretes Rosalía" => 46.00,
    "Aretes Cuarzo Plus" => 44.00,
    "Aretes piedra brillantes" => 47.00,
    "Aretes de compromiso Estándar" => 47.00,
    "Aretes de Compromiso brillantes" => 52.00
];

$tipoCambioDolar = 3.40;
$tipoCambioEuro = 4.20;

$opcionProducto = "Aretes Rosalía";
$gramos = 25;

if (!array_key_exists($opcionProducto, $preciosOro)) {
    echo "Error: Producto no válido.\n";
} else if ($gramos < 20) {
    echo "No procede la venta o cotización: El pedido debe ser de un mínimo de 20 gramos.\n";
} else {
    $precioSeleccionado = $preciosOro[$opcionProducto];
    $totalSoles = $gramos * $precioSeleccionado;

    $totalDolares = $totalSoles / $tipoCambioDolar;
    $totalEuros = $totalSoles / $tipoCambioEuro;

    echo "--- COTIZACIÓN: " . $opcionProducto . "\n";
    echo "Cantidad en gramos (g) : " . $gramos . "\n";
    echo "Total en Soles (S/.) " . number_format($totalSoles, 2) . "\n";
    echo "Total en Dólares ($): " . number_format($totalDolares, 2) . "\n";
    echo "Total en Euros (€): " . number_format($totalEuros, 2) . "\n";
}

?>