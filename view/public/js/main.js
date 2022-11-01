console.log("iniciando script {main.js}");

function changeColor(){

    var arrayColors = ['red', 'blue', 'green', 'yellow', 'pink', 'purple', 'orange', 'black', 'white', 'gray'];
    document.getElementsByClassName("button").style.backgroundColor= arrayColors[index];

    index++;

    if(index == arrayColors.length){
        index = 0;
    }

    size = 100 + index * 10;

    document.getElementById("color").style.width = size + 'px';
    document.getElementById("color").style.height = size + 'px';

    // document.getElementById("color").style.backgroundColor= 'red';
}

function wspDirect(){
    number = document.getElementById("wspDirectInput").value;
    console.log(number)
    if(number.length == 8){
        window.open("https://web.whatsapp.com/send?phone=569"+ number +"&text=hola")
    }
    else{
        alert("El numero debe tener 8 digitos");
    }
    document.getElementById("wspDirectInput").value = "";
}

function search_youtube()
{
    query = document.getElementById("mainSearch").value;
    var url = "https://www.youtube.com/results?search_query=" + query; //+ "&max-results=1&v=2&alt=jsonc"

    window.open(url);
    document.getElementById("mainSearch").value = "";
}
