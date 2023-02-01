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

    <h3> 3.4 Variable in PHP </h3>
        <?php
        $title1 = "PHP is interesting";
        echo "<h1>" . $title1 . "</h1>"
        ?>

    <h3> 3.5 Table & Variables </h3>
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

<?php include "footer.php" ?>
