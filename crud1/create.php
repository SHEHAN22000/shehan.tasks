<?php
$title = "A simple CRUD app";
include '../layout/header.php';
?>

<form method = "post" action="" onsubmit="return crud()" name="form1">
    <input type="text" name="fname" placeholder="First Name" required onblur="fname()"> <br><br>
    <input type="text" name="lname" placeholder="Last Name" required > <br><br>
    <input type="text" name="city" placeholder="City" required >

    <select name="groupid">
        <option value="BBCAP22"> BBCAP22 </option>
        <option value="BBCAP21"> BBCAP21 </option>
        <option value="Others"> Others </option>
    </select> <br><br>

    <input type="submit" value="Submit" name="submit">

</form>

<?php

    if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $city = $_POST['city'];
        $groupid = $_POST['groupid'];
        include 'db.php';
        $sql = "insert into studentinfo (fname, lname, city, groupid)
        values('$fname', '$lname', '$city', '$groupid')";

        if ($conn ->query($sql) === TRUE){
            echo "Your information is added successfully";
        }
        else {
            echo "Error:" . $conn->error;
        }
    }
?>

<?php
include '../layout/footer.php';
?>