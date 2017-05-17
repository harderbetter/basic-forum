<!--[if lt IE 9]>
  the code is based on https://interactiveonline.com/how-to-create-a-phpmysql-powered-forum-from-scratch/ 
  WEIDA ZHU and FENG MI studied it and changed it drastically.
<![endif]-->
<html>
    <style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
.button {
    width: 100%;
    background-color: #4CAF50; /* Green */
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

input[type=text]:hover {
    background-color: #45a049;
}
input[type=password]:hover {
    background-color: #45a049;
}
p{ color: #685206; font-family: 'Helvetica Neue', sans-serif; font-size: 20px; line-height: 30px; margin: 0 0 40px; text-align: justify; text-justify: inter-word;  }
h2{ color: #685206; font-family: 'Helvetica Neue', sans-serif; font-size: 40px; line-height: 50px; margin: 0 0 50px; text-align: justify; text-justify: inter-word;  }
.button2{
    width: 100%;
    background-color:  #008CBA; /* blue */
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
.button3{
    width: 100%;
    background-color:  #FF69B4; /* pink */
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


div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<body
    â€œstyle="background-image:url(); background-repeat:repeat-y;"â€>
<h2>music forum</h2>


<form action="checklogin.php" method="post">
<p>user name:</p><input type="text" name="username" id="myText1" value="">
<p>password:</p><input type="password" name="password" id="myText2" value="">
<input type="submit" class="button" value="confirm">
</form>


<input type="button" class="button2" onclick="javascript:window.location.href='register_test.php'" value="register"></button>
<input type="button" class="button3" onclick="myFunction3()" value="login as unregistered"></button>


<script type="text/javascript">
    function myFunction3(){
          window.location.assign("home.php");
    }
</script>




</html>