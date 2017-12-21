<?php
session_start();

$name = 'Ajay Parmar';
$email = 'parmarajay2@yahoo.in';

$_SESSION['name'] = $name;
$_SESSION['email'] = $email;
$_SESSION['time'] = date('d-m-Y H:i:s a');


echo '<pre>';
print_r($_SESSION);
print_r('session name is : '.session_name());

// session_unset();
// print_r($_SESSION);

// setcookie('cookie_name_detail',$name,time()+60);
echo '<br/>cookie is set & its detail is : <br/	>';
print_r($_COOKIE);





?>