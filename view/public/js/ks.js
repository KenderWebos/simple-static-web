// document.getElementById("precio").innerHTML = "$$$";

function calcularPrecioPixelArt(){
    let largo = document.getElementById("largo").value;
    let ancho = document.getElementById("ancho").value;

    let largoBeads = largo*3;
    let anchoBeads = ancho*3;

    let llavero = document.getElementById("llavero").checked;
    let imantado = document.getElementById("imantado").checked;
    let reflectante = document.getElementById("reflectante").checked;

    let precio = 0;

    precio = largoBeads*anchoBeads*3;

    if(llavero){
        precio += 200;
    }
    if(imantado){
        precio += 100;
    }
    if(reflectante){
        precio += 100;
    }

    precio = precio - precio%50;

    document.getElementById("precio").innerHTML = "$"+precio;
    document.getElementById("smallPrecio").innerHTML = largoBeads*anchoBeads+" beads";

}
