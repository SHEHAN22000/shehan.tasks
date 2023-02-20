<?php include "header.php" ?>

<h3> Write a simple PHP script to print your information (Name and your groupid). </h3>
    
        <?php //OPENING TAG        
        echo "Shehan Senanayake <br>";
        echo "BBCAP22";
        ?>

    <h3> 3.2 Write PHP code to display the following message. </h3>
    
        <?php
        echo "Hello world! My name is \"David\"";
        ?>

    <h3> 3.3 Current Date </h3>
        <?php
        echo date("d.m.Y")
        ?>

<br><br>
<script>
    document.write("Hello world this is JavaScript");
</script>

<noscript>
Please enable JavaScript to view this document,
</noscript>

<input type="button" onclick="hello()" value="Click Me">

<br><br>

    <h3> 3.4 Variable in PHP </h3>
        <?php
        $title1 = "PHP is interesting";
        echo "<h1>" . $title1 . "</h1>"
        ?>

<script>
//window.alert
//window.alert("This will trigger an alert box");
//window.alert(5+10);
//document.write
document.write("Hello this is interesting");
</script>
<br><br>

    <h3> 3.5 Table & Variables </h3>

    <button onclick="add()"> Click to Add </button>
    <hr>
    <p id="place1"> </p>

    <script>
    document.getElementById("place1").innerHTML = "This will go place1";
    <hr>
    <p id="place1" style="color:red; background-color:yellow;"> </p>
    <span id="place2" style="color:red; background-color:yellow;"> </span>
    </script>

<script>
    document.getElementById("place1").innerHTML="This will go to place1";
    document.getElementById("place2").innerHTML="This will go to place1";
</script>

        <?php
        $g1 = 5;
        $g2 = 4;
        $g3 = 5;

        echo "
        <table>

        <tr>
        <th> S.N. </th> <th> Name </th> <th> Grade </th>
        </tr>

        <tr>
        <th> 1 </th> <th> Shehan </th> <th> $g1 </th>
        </tr>

        <tr>
        <th> 2 </th> <th> Shammi </th> <th> $g2 </th>
        </tr>

        <tr>
        <th> 3 </th> <th> Kushani </th> <th> $g3 </th>
        </tr>

        </table>

        ";
        ?>

    <h3> 4 Screenshot of the development environment </h3>
        <img src="Ex1.png" alt="docker screenshot" style="width: 90%">

        <h2> Changing the background color </h2>
        <form>
        <input type="color" name = "background" onchange="changeColor('background',this.value)">
        </form>

<?php include "footer.php" ?>
