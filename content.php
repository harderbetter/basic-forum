<!--[if lt IE 9]>
  the code is based on https://interactiveonline.com/how-to-create-a-phpmysql-powered-forum-from-scratch/ 
  WEIDA ZHU and FENG MI studied it and changed it drastically.
<![endif]-->
<html>
    <style>
         input[type=topic1], select {
    width: 50%;
    
    padding: 12px 20px;
    margin: 10px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

textarea{ width: 50%;
    
    padding: 120px 20px;
    margin: 10px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;}

textarea:hover {
             
    width: 50%;
    
    padding: 120px 20px;
    margin: 10px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  
}


    </style>

    
    
        <div id="userbar">
    <?php
    session_start(); 
    if($_SESSION['signed_in'])
    {
        echo 'Hello ' . $_SESSION['user_name'] . '. Not you? <a href="loggout_test.php">Sign out</a>';
    }
    else
    {
        echo '<a href="index_test.php">Sign in</a> or <a href="register_test.php">create an account</a>.';
    }
    ?>
    
    
 
<p>topic:</p>
<br>
<input id="topic" type="topic1" name="topic" id="myText1" value="<?php 


$topic_name = $_GET['topic_name'];
//echo $topic_name;

  

$con = mysql_connect("localhost","mifeng","mifeng");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("forum", $con);
$result = mysql_query("SELECT * FROM topics where topic_name = '$topic_name'");  

while($row = mysql_fetch_array($result))
  {
 echo $row['topic_name']; 
  
  
  }


?>"readonly="readonly">



<br>

<p>content:</p>
<br>
<textarea class="topic2" name ="comment" readonly="readonly">
    
<?php 

session_start(); 

$topic_name = $_GET['topic_name'];
$_SESSION['topic'] = $topic_name;

//echo $topic_name;

  

$con = mysql_connect("localhost","mifeng","mifeng");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("forum", $con);
$result = mysql_query("SELECT * FROM topics where topic_name = '$topic_name'");  

while($row = mysql_fetch_array($result))
  {
 echo $row['topic_detail']; 
  
  
  }









?>
</textarea>
<br>




<script>
   function myFunction3(){
          window.location.assign("home.php");}
</script>







<input type="button" class="button2" onclick="myFunction3()" value="return to home page"></button>






<form action="create_comment.php" method="post">
<p>comment input:</p><input type="text" name="comment_detail" id="myText1" value="">

<input type="submit" class="button" value="confirm">
</form>
<form action="delete_comment.php" method="post">
<p>comment delete(can only delete the comment create by youself):</p><input type="text" name="comment_detail" id="myText1" value="">

<input type="submit" class="button" value="confirm">
</form>

<form action="modify_comment.php" method="post">
<p>paste the comment you want to change(can only change the comment create by youself),then input your new comment in the second form:</p>
<input type="text" name="comment_detail" id="myText1" value="">
<input type="text" name="comment_change" id="myText1" value="">
<input type="submit" class="button" value="confirm">
</form>

<?php
   

    
$topic_name = $_GET['topic_name'];
//echo $topic_name;

  

$con = mysql_connect("localhost","mifeng","mifeng");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("forum", $con);

$result = mysql_query("SELECT * FROM topics where topic_name = '$topic_name'");

while($row = mysql_fetch_array($result))
  {
      	
					
					
 
  $result_comment = mysql_query("SELECT * FROM comments where topic_name = '$topic_name'");
  while($row_comment = mysql_fetch_array($result_comment))
  { 
      echo '<table class="topic" border="1">
					<tr>
						<th colspan="2">' . 'comment_detail:' . $row_comment['comment_detail'] . '</th>
						<th colspan="2">' . 'user_name:' . $row_comment['user_name'] . '</th>
						
					</tr>';
    
  }
  
  }
  mysql_close($con);
  
  
  
  





?>






</html>