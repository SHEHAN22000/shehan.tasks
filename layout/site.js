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

//function to change the bacj=kground color of the page

function changeColor1(){
    let color = document.getElementById("background").value;
    document.body.style.backgroundColor=color;
}

//function to change font color of the page
function changeFcolor(){
    let fcolor = document.getElementById('fcolor').value;
    document.body.style.color=fcolor;
}

//crud
function crud(){
    let fname=(document.form1.fname.value).trim();
        if (fname.length<5){
            alert("First Name must have at least 5 character");
            return false;
        }
}

function crud1(){
    let lname=(document.form1.lname.value).trim();
        if (lname.length>15){
            alert("Last Name must less than 15 character");
            return false;
        }
}


function fnameVal(){
    let fname=(document.form1.fname.value).trim();
    if (fname.length<5){
        alert("First Name must have at least 5 character");
        return false;
    }
}