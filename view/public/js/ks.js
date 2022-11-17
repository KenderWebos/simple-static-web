// document.getElementById("precio").innerHTML = "$$$";

// function calcularPrecioPixelArt(){
//     let largo = document.getElementById("largo").value;
//     let ancho = document.getElementById("ancho").value;

//     let largoBeads = largo*3;
//     let anchoBeads = ancho*3;

//     let llavero = document.getElementById("llavero").checked;
//     let imantado = document.getElementById("imantado").checked;
//     let reflectante = document.getElementById("reflectante").checked;

//     let precio = 0;

//     precio = largoBeads*anchoBeads*3;

//     if(llavero){
//         precio += 200;
//     }
//     if(imantado){
//         precio += 100;
//     }
//     if(reflectante){
//         precio += 100;
//     }

//     precio = precio - precio%50;

//     document.getElementById("precio").innerHTML = "$"+precio;
//     document.getElementById("smallPrecio").innerHTML = largoBeads*anchoBeads+" beads";

// }

function calcularPrecioPixelArt(){
    let largoBeads = document.getElementById("largo").value;
    let anchoBeads = document.getElementById("ancho").value;

    // 8x8 = 64
    // 16x16 = 256
    // 32x32 = 1024

    //60 minutos 2000
    let costo_x_minuto = 33.33;
    let minutos_de_trabajo = 0;

    let costo_x_trabajo = minutos_de_trabajo*costo_x_minuto; // sacamos el ccosto del trabajo en funcion del tiempo y el sueldo minimo
    let costo_x_beads = largoBeads*anchoBeads*1.5; // sacamos el costo de los beads utilizados en la figura
    let costo_x_venta = costo_x_beads + costo_x_trabajo; // sumamos todo para sacar el total del costo de venta

    let factor_de_utilidad = 2; // definimos un factor de ganancias en este caso ganaremos lo mismo que nos costo producir el producto

    let precio = costo_x_venta * factor_de_utilidad; // calculamos el precio total de venta del producto ej: 1400 produccion + 1400 ganancia = 2800
    //let precio = largoBeads*anchoBeads*8;

    precio = precio - precio%50;

    precio = Math.round(precio);

    precio += 500;

    document.getElementById("precio").innerHTML = "$"+precio;
    document.getElementById("smallPrecio").innerHTML = largoBeads*anchoBeads+" beads";


}
