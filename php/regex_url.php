<?php

$pattern = '/^[a-z]+:\/\/[a-z0-9_\-\/.%]+$/i';
$subject = 'http:/www.qq.com';
$subject_valid = 'http://www.qq.com';
var_dump(preg_match($pattern, $subject));
echo filter_var($subject, FILTER_VALIDATE_URL);
var_dump(preg_match($pattern, $subject_valid));
echo filter_var($subject_valid, FILTER_VALIDATE_URL);