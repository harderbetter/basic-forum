<!--[if lt IE 9]>
  the code is based on https://interactiveonline.com/how-to-create-a-phpmysql-powered-forum-from-scratch/ 
  WEIDA ZHU and FENG MI studied it and made a new one based on that.
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

    background-color: #14a000;
}
    </style>
<form action="db_submit_topic.php" method="post">   
<p>topic:</p>
<br>
<input type="topic1" name="topic" id="myText1" value="">
<br>
<p>content:</p>
<br>

<textarea class="topic2" name ="content">

</textarea>
<br>
<input type="submit" class="button2">
</form>
<input type="button" class="button2" onclick="myFunction3()" value="return to home page"></button>
<script>
   function myFunction3(){
          window.location.assign("forum_test.php");}
</script>
</html>