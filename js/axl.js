const diaSemanalGe = {
    "Lunes"                 :  9,
    "Martes"                :  7,
    "Miercoles a viernes"   :  10,
    "Sabado y Domingo"      :  12,
};

const diaSemanalNi = {
    "Lunes"                 :  7,
    "Martes"                :  7,
    "Miercoles a viernes"   :  8,
    "Sabado y Domingo"      :  9,
};

let dia = "Sabado y Domingo";
let cantidadGe = 4; 
let cantidadNi = 7;

let precioUnitarioGe = diaSemanalGe [dia];
let precioUnitarioNi = diaSemanalNi [dia];

let costoEntradGe = precioUnitarioGe * cantidadGe;
let costoEntradaNi = precioUnitarioNi * cantidadNi;

let montoVenta = costoEntradGe + constoEntradaNi;

const tasaIGV = 0.18;
const montoIGV = montoVenta * tasaIGV;

console.log("---------------COMPRA DE ENTRADAS---------------");
console.log("Precio de la entrada general: s/ ", precioUnitarioGe);
console.log("Precio de la entrada niños: s/ ", precioUnitarioNi);
console.log("Cantidad de entradas para general: ", cantidadGe);
console.log("Cantidad de entradas para niños: ", cantidadNi);
console.log("Costo de entrada para general: s/ ", costoEntradGe);
console.log("Costo de entrada para niños: s/ ", costoEntradaNi);
console.log("Costo total de entradas: s/ ", montoVenta);

//eeee//
