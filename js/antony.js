const preciosOro = {
    "Aretes Rosalía": 46.00,
    "Aretes Cuarzo Plus": 44.00,
    "Aretes piedra brillantes": 47.00,
    "Aretes de compromiso Estándar": 47.00,
    "Aretes de Compromiso brillantes": 52.00
};

const tipoCambioDolar = 3.40;
const tipoCambioEuro = 4.20;

let opcionProducto = "Aretes Rosalía"; 
let gramos = 25;

if (!preciosOro.hasOwnProperty(opcionProducto)) {
    console.log("Error: Producto no válido.");
} else if (gramos < 20) {
    console.log("No procede la venta o cotización: El pedido debe ser de un mínimo de 20 gramos.");
} else {
    let precioSeleccionado = preciosOro[opcionProducto];
    let totalSoles = gramos * precioSeleccionado;

    let totalDolares = totalSoles / tipoCambioDolar;
    let totalEuros = totalSoles / tipoCambioEuro;

    console.log("--- COTIZACIÓN: ", opcionProducto);
    console.log("Cantidad en gramos (g) :", gramos);
    console.log("Total en Soles (S/.)", totalSoles.toFixed(2));
    console.log("Total en Dólares ($):", totalDolares.toFixed(2));
    console.log("Total en Euros (€):", totalEuros.toFixed(2));
}