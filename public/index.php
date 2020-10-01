<?php
require'../vender/autoload.php';

use \Demo\HelloWorld as World;
use Demo\Hello\Lara;
use Demo\Hello;

$world = new World();
$lara =new Lara();
$vincemt = new Hello\Someone('Vincent');

$mary= new \Demo\Hello\Someone('Mary');
$john= new Demo\Hello\Someone('John');
