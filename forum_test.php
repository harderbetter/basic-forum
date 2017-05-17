<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--[if lt IE 9]>
<!--[if lt IE 9]>
  the code is based on https://interactiveonline.com/how-to-create-a-phpmysql-powered-forum-from-scratch/ 
  WEIDA ZHU and FENG MI studied it and made a new one based on that.
<![endif]-->
<![endif]-->
<html >
<style>
    body {
    background-color: #4E4E4E;
    text-align: center;         /* make sure IE centers the page too */
}
 
#wrapper {
    width: 900px;
    margin: 0 auto;             /* center the page */
}
 
#content {
    background-color: #fff;
    border: 1px solid #000;
    float: left;
    font-family: Arial;
    padding: 20px 30px;
    text-align: left;
    width: 100%;                /* fill up the entire div */
}
 
#menu1 {
    float: left;
    border: 1px solid #000;
    border-bottom: none;        /* avoid a double border */
    clear: both;                /* clear:both makes sure the content div doesn't float next to this one but stays under it */
    width:100%;
    height:20px;
    padding: 0 30px;
    background-color: #FFF;
    text-align: left;
    font-size: 85%;
}
 
#menu a:hover {
    background-color: #009FC1;
}
 
#userbar {
    background-color: #7FFF00;
    float: right;
    width: 259px;
}
#userbar2 {
    background-color: #7FFF00;
    float: right;
    width: 259px;
}
 
#footer {
    clear: both;
}
 
/* begin table styles */
table {
    border-collapse: collapse;
    width: 100%;
}
 
table a {
    color: #000;
}
 
table a:hover {
    color:#373737;
    text-decoration: none;
}
 
th {
    background-color: #B40E1F;
    color: #F0F0F0;
}
 
td {
    padding: 5px;
}
 
/* Begin font styles */
h1, #footer {
    font-family: Arial;
    color: #F1F3F1;
}
 
h3 {margin: 0; padding: 0;}
 
/* Menu styles */
.item{    width: 100%;
    background-color:  #FF69B4; /* pink */
    border: 1px solid#0080ff;
    color: white;
    padding: 15px 32px;
    
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 8px 2px;
    cursor: pointer;}

 
.leftpart {
    width: 70%;
}
 
.rightpart {
    width: 30%;
}
 
.small {
    font-size: 75%;
    color: #373737;
}
#footer {
    font-size: 65%;
    padding: 3px 0 0 0;
}
 
.topic-post {
    height: 100px;
    overflow: auto;
}
 
.post-content {
    padding: 30px;
}
 
textarea {
    width: 500px;
    height: 200px;
}
</style>
<body>
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
</div>
<h1>Music Forum</h1>
    <div >
        <a class="item" href=home.php >Home</a> -
        <a class="item" href= "check_status.php">Create a topic</a> -
        <a class="item" href= "https://www.bobdylan.com/">Bob Dylan</a>
        


    


</body>
</html>


