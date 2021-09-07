<?php
// var_dump($_GET);
// var_dump($_POST);
// echo '<br />';
// var_dump($_REQUEST);
// var_dump($_FILES);
/*
http://localhost/session1/checkLogin.php?
firstName=Ramy
&lastName=Mohamed
&age=32
&address=Dokki
 */
if (!isset($_REQUEST['username']) || !isset($_REQUEST['password'])) {
    echo 'Please login';
    die();    
}
if(empty($_REQUEST['username'])){
    echo 'Please enter a valid username';
    die();
}
if(empty($_REQUEST['password'])){
    echo 'Please enter a valid password';
    die();
}
if ($_REQUEST['username'] != 'Ramy' || $_REQUEST['password'] != '123') {
    echo 'invalid username or password';
    die();    
}
echo 'Your balance is 10000000 L.E.';

// !(a && b && c) = (!a || !b || !c)
// !(a || b || c) = (!a && !b && !c)
