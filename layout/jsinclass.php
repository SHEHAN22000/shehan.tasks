<?php
$title = "JavaScript Events and form validations";
include "header.php" ?>

<h2> A simple button to display date </h2>
<button onclick="this.innerHTML = Date()"> Click to show date </button>

<h2> Make a button and place holder as paragraph for the date </h2>
<button onclick="getElementById('p1').innerHTML=Date()"> Click to show date </button>
<p id="p1"> </p>

<h2> Change the background color </h2>
<form>
<input type="color" id="background" onchange="changeColor1()">
</form>


<h2> Change the font color </h2>
<form>
<input type="color" id="fcolor" onchange="changeFcolor()">
</form>

<h2> On Mouse Over & Out </h2>

<span onmouseover="this.style.color='blue';
                    this.style.backgroundColor='yellow';
                    this.style.fontSize = '2em';"
                    
        onmouseout="this.style.color='red';
                    this.style.backgroundColor='white';
                    this.style.fontSize = '1.1em';">
                    
                    Some Text </span>



<?php include "footer.php" ?>