<!--[if lt IE 9]>
  the code is based on https://interactiveonline.com/how-to-create-a-phpmysql-powered-forum-from-scratch/ 
  WEIDA ZHU and FENG MI studied it and made a new one based on that.
<![endif]-->
<!DOCTYPE html>
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
$topic = $_POST['topic']; 
$content = $_POST['content'];
$user_name = $_SESSION['user_name'];
echo "user:";
echo $user_name;
echo "<br>";
echo "title:";
echo $topic;
echo "<br>";
echo "content:";
echo $content;
echo "<br>";

$sql = "INSERT INTO topics (topic_name, user_name, topic_detail)
VALUES ('$topic', '$user_name', '$content')";




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


<script >

    
    
    function myFunction2(){
          window.location.assign("forum.php");}
</html>

