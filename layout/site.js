//a simple function that triggers alert box
function hello(){
    alert("Welcome to my website");
}

//a sinple function to add 2 numbers
function add(){
    document.write(5+6);
}

//document.getElementById(id)
//display or like echo
//document.write
//windows.alert
//innerHTML
//console.log

//function to change the background color of the page
function changeColor(where,newColor){
    if (where == "background"){
        document.body.style.backgroundColor = newColor;
    }    
}

//function to change the background color of the page
function changeColor(){
let color = document.getElementById('background').value;
document.body.style.backgroundColor = color;
}

//function to change the font color of the page
function changeFcolor(){
    let fcolor = document.getElementById('fcolor').value;
    document.body.style.color = fcolor;
    }

// crud
function crud(){

    let fname=(document.form1.fname.value).trim();
    if (fname.length<5){
        alert("First name must have at least characters");
        return false;
    }

}

function fnameVal(){

    let fname=(document.form1.fname.value).trim();
    if (fname.length<5){
        alert("First name must have at least characters");
        return false;
    }

}