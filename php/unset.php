<?php

$a = 'hello';
$b = &$a;
unset($b);
$b = 'world';
echo $a;

function foo(&$bar) {
	unset($bar);
	$bar = 'blah';
}

$bar = 'something';
echo "$bar\n";

foo($bar);
echo "$bar\n";
