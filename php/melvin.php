<?php
    $nombreCliente = "Melvin";
    $totalKilos = 6;
    // Arreglo asociativo de productos
    $precios = [
        ["nombre" => "Arroz", "precio" => 3.80],
        ["nombre" => "Azucar", "precio" => 3.40],
        ["nombre" => "Papas", "precio" => 3.20],
        ["nombre" => "Menestras", "precio" => 4.50],
        ["nombre" => "Fideos", "precio" => 3.20],
        ["nombre" => "Camote", "precio" => 4.60],
        ["nombre" => "Aceituna", "precio" => 5.80],
        ["nombre" => "Mandarina", "precio" => 3.90],
        ["nombre" => "Manzana", "precio" => 4.20],
        ["nombre" => "Uva", "precio" => 5.40]
    ];

    $productoSeleccionado = $precios[3];
    $productoCantidad = 5; 

    $precioSubTotal = $productoSeleccionado["precio"] * $productoCantidad;
    $precioSubTotalDolar = $precioSubTotal / 3.40;

    $igv = 0.18;
    $igvSoles = $precioSubTotal * $igv;
    $igvDolar = $precioSubTotalDolar * $igv;

    $precioTotalSoles = $precioSubTotal - $igvSoles;
    $precioTotalDolar = $precioSubTotalDolar - $igvDolar;

    $productoPeso = $totalKilos;

    if ($productoPeso >= 5) {
        echo "</br>--- RESUMEN DE COMPRA --- </br>";
        echo "Cliente: " . $nombreCliente . "</br>";
        echo "Producto: " . $productoSeleccionado["nombre"] . "</br>";
        echo "Cantidad: " . $productoCantidad . "</br>";
        echo "Precio: S/ " . number_format($productoSeleccionado["precio"], 2) . "</br>";
        echo "SubTotal en Soles: S/ " . number_format($precioSubTotal, 2) . "</br>";
        echo "SubTotal en Dólares: $/ " . number_format($precioSubTotalDolar, 2) . "</br>";
        echo "IGV en Soles: S/ " . number_format($igvSoles, 2) . "</br>";
        echo "IGV en Dólares: $/ " . number_format($igvDolar, 2) . "</br>";
        echo "Total Neto en Soles: S/ " . number_format($precioTotalSoles, 2) . "</br>";
        echo "Total Neto en Dólares: $/ " . number_format($precioTotalDolar, 2) . "</br>";
    } else {
        echo "Peso total insuficiente para la compra";
    }
?>
