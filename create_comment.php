<!--[if lt IE 9]>
  the code is based on https://interactiveonline.com/how-to-create-a-phpmysql-powered-forum-from-scratch/ 
  WEIDA ZHU and FENG MI studied it and made a new one based on that.
<![endif]-->
<html>


<?php

$comments=$_REQUEST["comments"];
echo $comments;


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

//check if user if signed in
if($_SESSION['signed_in'] == true)
{
 $user_name = $_SESSION['user_name'];
 $topic = $_SESSION['topic'];
 
 $comment_detail = $_POST['comment_detail'];
// echo 'topicname:' . $topic;
 //echo $user_name;
// echo $comment_detail;


$sql = "INSERT INTO comments (comment_detail, topic_name,user_name)
VALUES ('$comment_detail', '$topic','$user_name')";
if ($conn->query($sql) === TRUE) {
    echo "insert success";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

	

	 
    
	
}
else
{
	
	 header("Location: index_test.php"); 
}



?>


              
<input type="button" class="button2" onclick="myFunction2()" value="return"></button>
<script>
 function myFunction2(){
          window.location.assign("home.php");}
</script>



</html>