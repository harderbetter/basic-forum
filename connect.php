<!--[if lt IE 9]>
  the code is based on https://interactiveonline.com/how-to-create-a-phpmysql-powered-forum-from-scratch/ 

<![endif]-->
<?php
//connect.php
$server = 'localhost';
$username   = 'mifeng';
$password   = 'mifeng';
$database   = 'forum';
 
if(!mysql_connect($server, $username,  $password))
{
    exit('Error: could not establish database connection');
}

if(!mysql_select_db($database)) 
{
    exit('Error: could not select the database');
}
//the code is based on tutorial https://interactiveonline.com/how-to-create-a-phpmysql-powered-forum-from-scratch/
?>