<!--[if lt IE 9]>
  the code is based on https://interactiveonline.com/how-to-create-a-phpmysql-powered-forum-from-scratch/ 
  WEIDA ZHU and FENG MI studied it and made a new one based on that.
<![endif]-->
<html>


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


//check if user if signed in
if($_SESSION['signed_in'] == true)
{
 $user_name = $_SESSION['user_name'];
 $topic = $_SESSION['topic'];
 
 $comment_detail = $_POST['comment_detail'];
  $comment_change = $_POST['comment_change'];
// echo 'topicname:' . $topic;
 //echo $user_name;
// echo $comment_detail;
//UPDATE comments SET comment_detail = '$comment_change' WHERE user_name = '$user_name' and topic_name = '$topic' and comment_detail = '$comment_detail' 

$sql = "UPDATE comments SET comment_detail = '$comment_change' WHERE user_name = '$user_name' and topic_name = '$topic' and comment_detail = '$comment_detail' ";
//$sql = "INSERT INTO comments (comment_detail, topic_name,user_name)
//VALUES ('$comment_detail', '$topic','$user_name')";
if ($conn->query($sql) == TRUE) {
    echo "if the comment is      " . $comment_detail . "     and it is created by     " . "$user_name" .  "(your login account),";
    echo "\r\n";
    echo "then this comment has been modifyed as you want.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo "the comment dose not created by you.";
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