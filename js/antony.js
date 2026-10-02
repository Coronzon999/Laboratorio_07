// Definimos los precios del gramo de oro en Soles (S/.) según el producto
const preciosOro = {
    "1": { nombre: "Aretes Rosalía", precio: 46.00 },
    "2": { nombre: "Aretes Cuarzo Plus", precio: 44.00 },
    "3": { nombre: "Aretes piedra brillantes", precio: 47.00 },
    "4": { nombre: "Aretes de compromiso Estándar", precio: 47.00 },
    "5": { nombre: "Aretes de Compromiso brillantes", precio: 52.00 }
};

// Tasas de cambio indicadas[cite: 1]
const tipoCambioDolar = 3.40;
const tipoCambioEuro = 4.20;

// Simulación de entrada de datos (puedes cambiar estos valores)
let opcionProducto = "1"; 
let gramos = 25;         

// Validar si el producto NO existe
if (!preciosOro[opcionProducto]) {
    console.log("Error: Producto no válido.");
} else if (gramos < 20) {
    console.log("No procede la venta o cotización: El pedido debe ser de un mínimo de 20 gramos.");
}else {
    let productoSeleccionado = preciosOro[opcionProducto];
    let totalSoles = gramos * productoSeleccionado.precio;
    
    let totalDolares = totalSoles / tipoCambioDolar;
    let totalEuros = totalSoles / tipoCambioEuro;

    console.log("--- COTIZACIÓN: " ,productoSeleccionado.nombre);
    console.log("Cantidad en gramos (g) :" ,gramos, );
    console.log("Total en Soles (S/.)" , totalSoles.toFixed(2));
    console.log("Total en Dólares ($): ", totalDolares.toFixed(2) );
    console.log("Total en Euros (€):", totalEuros.toFixed(2) );
}