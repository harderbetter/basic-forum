<!--[if lt IE 9]>
  the code is based on https://interactiveonline.com/how-to-create-a-phpmysql-powered-forum-from-scratch/ 
  WEIDA ZHU and FENG MI studied it and changed it drastically.
<![endif]-->
<html>
    <style>
        
        .button {
    width: 100%;
    background-color: #008CBA;
     /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 8px 2px;
    cursor: pointer;
}
    </style>
    
    
<?php

session_start(); 
$servername = "localhost";
$username = "mifeng";
$password = "mifeng";
$dbname = "forum";
 
// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
}
$salt="zhuweida";
$username = $_POST['username']; 
$password = hash("sha256",hash("sha256", $_POST['password'].$salt));

 $sql = "SELECT 
                        user_name,
                        user_pw
                    FROM
                        users
                    WHERE
                        user_name = '" . $username . "'
                    AND
                        user_pw = '" . $password . "'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if ($row["user_pw"] == $password) {
    
      //  echo "user_name: " . $row["user_name"]. " -user_pw: " . $row["user_pw"].  "<br>";
       $_SESSION['user_name']  = $row['user_name'];
       	$_SESSION['signed_in'] = true;	
        echo "<input type='button' value='head to our forum!' onclick='myFunction2()' >";
    }
 else {
 //   echo "password not correct";
  //  echo $row["user_pw"];
    echo "<input type='button' value='password is not correct and head to login page' onclick='myFunction1()' >";
}
 
mysqli_close($conn);
               
?>   


<script >

    
    
    function myFunction2(){
          window.location.assign("forum_test.php");}
          
    function myFunction1(){
          window.location.assign("index_test.php");}
          
</script>
</html>

 							
								
								
								
