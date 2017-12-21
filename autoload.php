<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$obj  = new MyClass();
// $obj2 = new MyClass2(); 
?>