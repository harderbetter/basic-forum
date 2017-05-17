<!--[if lt IE 9]>
  the code is based on https://interactiveonline.com/how-to-create-a-phpmysql-powered-forum-from-scratch/ 
  WEIDA ZHU and FENG MI studied it and changed it drastically.
<![endif]-->
<!DOCTYPE html>
<html>
    <?php

    session_start(); 

//check if user if signed in
if($_SESSION['signed_in'] == true)
{

	

	

	 
    header("Location: topic-backend.php"); 
exit;  
	
}
else
{
	
	 header("Location: index_test.php"); 
}



?>
</html>