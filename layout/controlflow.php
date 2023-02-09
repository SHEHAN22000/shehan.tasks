<?php include "header.php" ?>

<h3> Exercise 4. In-class Task Control flow and loops 08.02.2023 (controlflow.php)</h3>

<h2>1. Write a script that gets the current month and prints one of the following responses...</h2>

<?php
    $month = date('F');
    if ($month == 'August'){
    echo "It's August, so it's still holiday.";
    }
    else{
    echo "Not August, so at least not in the peak of the heat.";
    }
?>

<h2> 2. Assign colour red to a variable name $color and check to print one the following responses 
    (if else statement) </h2>

<?php
    $color = 'Red';
    if ($color == 'Red'){
    echo "The color is red. ";
    }
    else{
    echo "The color is not red.";
    }
?>

<h2> 3. Write a program to grade students based on their total score for a subject. </h2>

<?php
    $score = 100;
    if ($score > 80)
    {
    echo "Excellent ";
    }
    elseif ($score > 70) 
    {
    echo "Great ";
    }
    elseif ($score > 60) 
    {
    echo "Good ";
    }  
    elseif ($score > 50) 
    {
    echo "Pass ";
    }  
    elseif ($score < 50) 
    {
    echo "Fail ";
    }
?>

<h2> 4. Write a program to get inputs (age and name) from the user and based on their age, 
    decide if he/she is eligible for voting. </h2>

<?php
    function check_vote() {
    $name = "Name";
    $age = 00;
    if ($age >= 18) {
        echo $name . ", You Are Eligible For Vote";
    } else {
        echo $name . ", You are not eligible for vote. ";
    }
    }
    check_vote();
?>

<h2> 5. If someone is using Chrome it should print, you are using Goolge Chrome….</h2>

<?php

 function getBrowser()
 {
   $user = $_SERVER['HTTP_USER_AGENT'];
   $browser = "N/A";

   $browser = [
     '/msie/i' => 'Internet explorer',
     '/firefox/i' => 'Firefox',
     '/safari/i' => 'Safari',
     '/chrome/i' => 'Chrome',
     '/edge/i' => 'Edge',
     '/opera/i' => 'Opera',
     '/mobile/i' => 'Mobile browser',
   ];


   foreach ($browser as $a => $name) 
{
     if (preg_match($a, $user)) 
{
       $browser = $name;
     }
   }
   return $browser;

 }

 echo "You are using: " .getBrowser();

?>

<?php include "footer.php" ?>