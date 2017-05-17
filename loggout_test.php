<!--[if lt IE 9]>
  the code is based on https://interactiveonline.com/how-to-create-a-phpmysql-powered-forum-from-scratch/ 
  WEIDA ZHU and FENG MI studied it and changed it drastically.
<![endif]-->
<?php

session_start(); 

//check if user if signed in
if($_SESSION['signed_in'] == true)
{

	//unset all variables
	$_SESSION['signed_in'] = NULL;
	$_SESSION['user_name'] = NULL;
	
	session_destroy();

    header("Location: index_test.php"); 
exit;  
	
}
else
{
	
	echo '<h2>Sign out</h2>';
	echo 'You are not signed in. Would you <a href="index_test.php">like to</a>?';
}



?>