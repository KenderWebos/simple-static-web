const si = document.querySelector('#si');

si.addEventListener('click',function () 
{
    alert('Sabia que ibas a decir que si uwu')
});

const no = document.querySelector('#no');


let a = 0;
no.addEventListener('mouseover', function ()
{
    
    if(a == 0){
        document.getElementById('no').style.translate = -200 + 'px';
        document.getElementById('si').style.translate = 200 + 'px';
        a = 1;
    }else if(a == 1){
        document.getElementById('no').style.translate = 0 + 'px';
        document.getElementById('si').style.translate = -0 + 'px';
        a=0;
    }

    console.log(a);
    
})
