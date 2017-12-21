<?php
#example--2
//no need to create a new class or function
$obj = (object) array('foo' => 'bar', 'property' => 'value');
echo $obj->foo; // prints 'bar'
echo $obj->property; // prints 'value



?>