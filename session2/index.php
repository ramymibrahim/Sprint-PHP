<?php
/*
Variables -> $ defined in scope
Globale variables -> $GLOBALS['var1'] multiple scopes
Constants -> define multiple scopes (UpperCase, without $)
OOP, Class Object
    Static variables
Pawn::name
p1 = new Pawn();
p1->coordinates
*/
//Globals
$x=5;

$GLOBALS['x']=5;
define('CONST1',10);
function test(){     
    static $var1=5;   
    $var1++;
    echo $var1;
    //echo $x;
    echo $GLOBALS['x'];
    echo CONST1;
}   
test();
test();