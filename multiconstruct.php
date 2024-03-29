<?php 
class A 
{ 
    function __construct() 
    { 
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this,$f='__construct'.$i)) {
            call_user_func_array(array($this,$f),$a); 
        }
    } 
    
    function __construct1($a1) 
    { 
        echo('__construct with 1 param called: '.$a1.PHP_EOL.'<br>'); 
    } 
    
    function __construct2($a1,$a2)
    { 
        echo('__construct with 2 params called: '.$a1.','.$a2.PHP_EOL.'<br>'); 
    } 
    
    function __construct3($a1,$a2,$a3) 
    { 
        echo('__construct with 3 params called: '.$a1.','.$a2.','.$a3.PHP_EOL.'<br>'); 
    } 
} 
$o = new A('sheep'); 
$o = new A('sheep','cat'); 
$o = new A('sheep','cat','dog'); 

// results: 
// __construct with 1 param called: sheep 
// __construct with 2 params called: sheep,cat 
// __construct with 3 params called: sheep,cat,dog 
?>