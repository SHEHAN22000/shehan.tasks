<?php include "header.php" ?>

<form action="" method="get">

    <input type="number" placeholder="Enter your first number" name="num1" required>
    <input type="number" placeholder="Enter your second number" name="num2" required>

    <select name="operator"> 
        <option value="add"> Add </option>
        <option value="sub"> Substract </option>
        <option value="mul"> Multiply </option>
        <option value="div"> Devide </option>
    </select>

    <input type="submit" name="cal" value="Calculate">

</form>

<?php
    if (isset($_GET['cal'])) {
    $num1=$_GET['num1'];
    $num2 = $_GET['num2'];
    $operator = $_GET['operator'];
    switch ($operator){
        case "add":
            $result=$num1 + $num2;
            break;
        case "sub":
            $result=$num1 - $num2;
            break;
        case "mul":
            $result=$num1 * $num2;
            break;
        case "div":
            $result=$num1 / $num2;
            break;
        default:
            $result = "Error.you have not selected the correct operator";
    }
    if(isset($result)){
    echo "<h2>Result : $result</h2>";
    }
    }
?>

<br>

<h2> 1. Write a php script to display courses as list. Use "li"</h2>

<?php 
    $courses=array("PHP", "HTML", "JavaScript", "CMS", "Project"); 

    foreach ($courses as $value) {
    echo "<li>".$value . "</li>";
    }
?>

<h2> 2. The unset() function is used to remove element from the array.</h2>

<?php
    $courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
    unset($courses1["4"]);

foreach ($courses1 as $value) {
    echo $value . "<br>";
}
?>

<h2> 3. Sort the following array....</h2>

<?php
    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");

    echo "a) ascending order sort by value <br>";
    asort($courses);
    foreach($courses as $x=>$x_value)
    {
    echo  $x_value;
    echo "<br>";
    }

    echo "b) ascending order sort by Key<br>";
    ksort($courses);
    foreach($courses as $x=>$x_value)
    {
    echo  $x_value;
    echo "<br>";
    }

    echo "c) descending order sort by Value<br>";
    arsort($courses);
    foreach($courses as $x=>$x_value)
    {
    echo  $x_value;
    echo "<br>";
    }

    echo "d) descending order sort by Key<br>";
    krsort($courses);
    foreach($courses as $x=>$x_value)
    {
    echo  $x_value;
    echo "<br>";
    }
?>

<h2> 4. Change the following array's all values to upper case.</h2>

<?php
    $courses=array("php", "html", "javascript", "cms", "project");
    print_r(array_change_key_case($courses,CASE_UPPER));
?>

<h2> 5. List all your favorite colors and their hexadecimal equivalents.</h2>

<?php 
    $color['#3A86FF'] = "Blue";
    $color['#8338EC'] = "Purple";
    $color['#FF006E'] = "Pink";
    $color['#FB5607'] = "Red";
    $color['#FFBE0B'] = "Yellow";
    
    foreach ($color as $x=>$x_values) {
    echo $x . " => ".$x_values."<br>";}
?>

<h2> 6. PHP script to calculate and display average temperature, five lowest and highest temperatures.</h2>

<?php
    $a=array(78, 60, 62, 68, 71, 68, 73,
    85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 
    74, 62, 62, 65, 64, 68, 73, 75, 79, 73
    );
    
    $sum=array_sum($a);
    $count=count($a);
    echo "Average temperature : ".$sum/$count;
   
    sort($a);

    for ($i=0; $i < 5; $i++) {
        echo $a[$i] . "<br>";}
   
    rsort($a);

    for ($i=0; $i < 5; $i++) {
        echo $a[$i] . "<br>";}
?>

<?php include "footer.php" ?>