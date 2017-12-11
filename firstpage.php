<!DOCTYPE html>
<html>
<head>
<style>
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
</style>
</head>
<body>

<ul>
  <li><a href="firstpage.php">Home</a></li>
  <li><a href="#news">Blogs</a></li>
  <li style="float:right"><a class="active" href="logIn.php">Log In</a></li>
  <li style="float: right"><a href="#contact">Register</a></li>
  
</ul>
<h1>WELCOME TO MY BLOGS</h1><br>

</body>
</html>
