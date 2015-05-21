<?php

$a = 'hello';
$b = &$a;
unset($b);
$b = 'world';
echo $a;
//output hello

//http://php.net/manual/en/function.unset.php
//If a variable that is PASSED BY REFERENCE is unset() inside of a function, only the local variable is destroyed. The variable in the calling environment will retain the same value as before unset() was called.

function foo(&$bar) {
	unset($bar);
	$bar = 'blah';
}

$bar = 'something';
echo "$bar\n";

foo($bar);
echo "$bar\n";
//out put something something

