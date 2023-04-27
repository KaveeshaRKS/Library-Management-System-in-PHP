<html>
    <head>
        <link href="opera.css" rel="stylesheet" type="text/css">
        <script language="JavaScript" src="opera.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    </head>
   <body>
   <img src="libraryicon.jpg" id="aa"/>
        <div class="bb">Opera Library Management System</div>
       <div class="nav">
           <ul>
               <a href="Opera12.php"><li><i class="bi bi-house-door-fill"></i>Home</li></a>
               <a class="current" href="Opera13.php"><li><i class="bi bi-search"></i>Search</li></a>
               <a href="Opera14.php"><li><i class="bi bi-check2-all"></i>Selected</li></a>
               <a href="Opera15.php"><li><i class="bi bi-check2-circle"></i>Borrowed</li></a>
               <a href="Opera16.php"><li><i class="bi bi-check2-square"></i>Reserved</li></a>
               <a href="Opera7.php"><li><i class="bi bi-file-person"></i>About Us</li></a>
               <a href="Opera8.php"><li><i class="bi bi-bell-fill"></i>Notifications</li></a>
</ul>
</div>
<form method="post" action="Opera14.php">
<div class="m"><input type="text" id="txtF" name="txtF" placeholder="Search by book title..."/>
<input type="submit" id="submitBtn" name="submitBtn" value="Search"/>
</div>
<div class="m1"><a href="Opera5.php"><img src="plus.png" id="plusIcon"/></a></div>

<div><a href="Opera14.php"><input type="submit" name="selectBtn" id="selectBtn" value="Select"/></a></div>
</form>
</body>
</html>