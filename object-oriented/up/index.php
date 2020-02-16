<?php 

function __autoload($class)
{
	include $class.'.php';
}

$up = new Controller\Upload;
$up->save();

include 'include/header.php';

	if (isset($_GET['home'])) include 'pages/home.php';
		else include 'pages/home.php';

include 'include/footer.php';
?>
