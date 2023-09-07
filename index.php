<?php
// using for loop
   //init
   //condition
   //increment or decrement

//print 1 to 100 using for loop
for ($i=1;$i<=100;$i++){
  // echo " $i<br>";

}
?>
<!-- Check if a number is prime number or not using a form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
    <h3 class="col-4 mx-auto mt-6" style="padding: 30px 0 0 170px"> PHP HW CLASS 6</h3>
    <div class="card col-4 mx-auto mt-5" style="border-color: black;">
        <div class="card-header" style="background-color: black; color:white;border:1px solid blue; text-align:center;font-size:20px">
            Checking Prime Number
        </div>
        <div class="card-body">
            <form action="./prime.php" method="post">
                <input name="Enternumber" type="text" class="form-control" placeholder="Checking your Number" style="border:1px solid blue;">
                <button class="btn btn-primary mt-3" style="border:1px solid black;">Submit</button>
            </form>
        </div>
    </div>
    
</body>
</html>

<!-- Build a authentication system using a form -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="card col-4 mx-auto mt-5" style="border-color: black;">
        <div class="card-header" style="background-color: black; color:white;border:1px solid blue; text-align:center;font-size:20px">
        Build a authentication system using a form
        </div>
        <div class="card-body">
            <form action="./gmail.php" method="get">
                <input name="Mail" type="text" class="form-control" placeholder="Enter your Email Address" style="border:1px solid blue;"><br>
                <input name="pass" type="text" class="form-control" placeholder="Enter your Password" style="border:1px solid blue;" >
                <button class="btn btn-primary mt-3" style="border:1px solid black;">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>

<!-- Practice work  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-hw-6</title>
</head>
<body>

<!-- select option using for loop
<h2>Select option using for loop</h2>
<select name="" id="">
    <?php
    
    for($i=2023;$i>=1905;$i--){
        echo '<option value="">'.$i.'</option>';
    }
    ?>
</select><br><br>
select option using for loop Ends -->
</body>
</html>
<?php
// echo "<h2>Pattern with(*) for loop</h2>";
// $value = "*";
// for ($i=1;$i <5;$i++){
//     echo str_repeat ($value,$i) . "<br>";
// }
// for($i=5;$i>=1;$i--){
//     echo str_repeat ($value,$i) . "<br>";
// }
// echo "<h2>Time table using for loop</h2>";
// $num = 5;
// for($i=1;$i<=10;$i++){
//     echo "$num * $i = ".$num*$i."<br>";
// }
// echo "<h2>Factorial problem using for loop</h2>";
// $num = 5;
// $result = 1;
// for($i=1;$i<=$num;$i++){
//     $result = $result *$i;
// }
// echo "The factorial number is = $result <br><br>";
?>