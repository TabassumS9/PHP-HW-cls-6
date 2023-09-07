<?php
$email_address = $_REQUEST['Mail'];
$password = $_REQUEST['pass'];
if($email_address == 'tabassum@gmail.com'){
    if($password == '12345'){
        echo '<h1>Build a authentication system using a form output</h1>';
        echo '<h2> welcome your Login form </h2> ';
    }
    else{
        echo '<h1>Build a authentication system using a form output</h1>';
        echo '<h2> Incorrect Password </h2> ';
    }

}
else{
    echo '<h1>Build a authentication system using a form output</h1>';
    echo '<h2> Incorrect Email address</h2> ';
}
