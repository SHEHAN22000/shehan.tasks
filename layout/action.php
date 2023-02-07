<?php include "header.php";

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $date = $_POST['bdate']; 
    $color = $_POST['color'];    


    echo "<h3>Your name is $fname $lname /.Your favourite color is $color and your date of birth is $date </h3>";

    ?>

<?php include "footer.php" ?>