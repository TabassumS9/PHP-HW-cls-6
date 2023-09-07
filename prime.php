<?php

$num = $_POST["Enternumber"];
$value = 0;
for($i =2; $i<$num; $i++){
    if($num % $i == 0){
        $value++;
    }
}
if ($value == 0){
    echo '<h1>Prime Number output</h1>';
    echo "<h2>$num is prime number.</h2> <br><br>";
}
else{
    echo '<h1>Prime Number output</h1>';
    echo "<h2>$num is not prime number.</h2> <br><br>";
}
