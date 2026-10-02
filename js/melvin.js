let nombreCliente = prompt("Ingrese su nombre");
let totalKilos = parseInt(prompt("Ingrese los kilos a llevar"));
const precios = [
    {nombre: "Arroz", precio: 3.80},
    {nombre: "Azucar", precio: 3.40},
    {nombre: "Papas", precio: 3.20},
    {nombre: "Menestras", precio: 4.50},
    {nombre: "Fideos", precio: 3.20},
    {nombre: "Camote", precio: 4.60},
    {nombre: "Aceituna", precio: 5.80},
    {nombre: "Mandarina", precio: 3.90},
    {nombre: "Manzana", precio: 4.20},
    {nombre: "Uva", precio: 5.40}
]

let productoSeleccionado = precios[3];
let productoCantidad = 5;

let precioSubTotal = productoSeleccionado.precio * productoCantidad;
let precioSubTotalDolar = precioSubTotal / 3.40;


let igv = 0.18; 
let igvSoles = precioSubTotal * igv;
let igvDolar = precioSubTotalDolar * igv;

let precioTotalSoles = precioSubTotal - igvSoles;
let precioTotalDolar = precioSubTotalDolar - igvDolar; 

let productoPeso = totalKilos;

if(productoPeso >= 5){
    console.log("Producto: ", productoSeleccionado.nombre);
    console.log("Cantidad: ", productoCantidad);
    console.log("Precio: ", "S/",productoSeleccionado.precio);
    console.log("SubTotal en Soles: ","S/", precioSubTotal.toFixed(2))
    console.log("SubTotal en Dolares: ","$/", precioSubTotalDolar.toFixed(2));
    console.log("IGV en soles: ","S/", igvSoles.toFixed(2));
    console.log("IGV en Dolares: ","$/", igvDolar.toFixed(2));
    console.log("Total Neto en soles: ","S/", precioTotalSoles.toFixed(2));
    console.log("Total Neto en Dolares: ","$/", precioTotalDolar.toFixed(2));
}else{
    console.log("Peso total insuficiente para la compra")
}

