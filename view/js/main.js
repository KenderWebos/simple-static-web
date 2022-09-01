// console.log('Hello World');

// alert('Hello World');

index = 0;

function saludar(name){
    alert('Hello ' + name);
}

function holaMundo(){
    alert('Hello World');
}

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

function hideMenu(){
    alert('Hide Menu');
    // document.getElementsByClassName("menu").style.backgroundColor= 'blue';
    document.getElementsByClassName("menu").style.display= 'none';


}