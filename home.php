<!--[if lt IE 9]>
  the code is based on https://interactiveonline.com/how-to-create-a-phpmysql-powered-forum-from-scratch/ 
  WEIDA ZHU and FENG MI studied it and changed it drastically.
<![endif]-->
<html>
    <style>
    .leftpart {
    width: 70%;
}
 
.rightpart {
    width: 30%;
}
th {
    background-color: #0000ff;
    color: #F0F0F0;
}
 
td {
    padding: 15px;
}
table {
    border-collapse: collapse;
    width: 100%;
}
 
table a {
    color: #0000ff;
}
 
table a:hover {
    color:#373737;
    text-decoration: none;
}
    </style>
    <?php


	



    $a=3;
		echo '<table border="1" >
			  <tr>
				<th>Topic</th>
				<th>Author</th>
			  </tr>';
	   
        echo '<tr>';
        
        
        
  

$con = mysql_connect("localhost","mifeng","mifeng");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("forum", $con);

$result = mysql_query("SELECT * FROM topics");

while($row = mysql_fetch_array($result))
  {
 echo '<td class="leftpart">';
                         echo '<h3><a href="content.php?topic_name=' . $row['topic_name'] . '">' . $row['topic_name'] . '</a><h3>';
                        echo '</td>';
                        echo '<td class="rightpart">';
                            echo $row['user_name'];
                        echo '</td>';
                    echo '</tr>';

  echo "<br />";
  }

mysql_close($con);
	
        
        
        
        
        
        
                       


                
?>



</html>