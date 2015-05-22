<?php

//vaild
function validEmail($email) {
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo 'invalid emailaddress', PHP_EOL;
	} else {
		echo 'valid emailaddress', PHP_EOL;
	}	 
}

validEmail('aba@qq.com');
validEmail('aba1qq.com');

//sanitize: 
//FILTER_SANITIZE_EMAIL: Remove all characters except letters, digits and !#$%&'*+-/=?^_`{|}~@.[].
echo filter_var(':;::and%%^$%&@qwe@#:@#$$.com', FILTER_SANITIZE_EMAIL);
//sanitize :;

//check domain is valid of mail
if (!checkdnsrr('gmail.com', 'MX')) {
    // domain is not valid
    echo 'domain is not valid', PHP_EOL;
} else {
	echo 'domain is valid', PHP_EOL;
}
