<!DOCTYPE html>
<html>
<head>
<style>
<?php

session_start();
?>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}

.form{

  margin-left: 10%;
  margin-right: 10%;
  background-color: #80ccff;
  height: 100px;
}

</style>
</head>
<body>

<ul>
  <li><a href="firstpage.php">Home</a></li>
  <li><a href="#news">Blogs</a></li>
  
  
</ul>
<h1>LOG IN TO MY BLOGS</h1>
<div class="log" style="margin-top: 0%; margin-left: 30%; margin-right: 30%; margin-bottom: 30%;  background-color: #007acc; "> 
    <center><h4 style="">LOG IN HERE</h4><br></center>
    <div class="form" id="formdiv" >
      <form action="/Blogs.php" method="post" >
        USER NAME:<input type="text" name="username" "></br>
        PASSWORD:<input type="password" name="password" "></br>
        <input type="submit" name="LOG IN" style="float: right;"><br>
      </form>

    </div>


</div>

</body>
</html>
