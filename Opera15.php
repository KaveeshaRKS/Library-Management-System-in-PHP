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
               <a href="Opera13.php"><li><i class="bi bi-search"></i>Search</li></a>
               <a href="Opera14.php"><li><i class="bi bi-check2-all"></i>Selected</li></a>
               <a class="current" href="Opera15.php"><li><i class="bi bi-check2-circle"></i>Borrowed</li></a>
               <a href="Opera16.php"><li><i class="bi bi-check2-square"></i>Reserved</li></a>
               <a href="Opera7.php"><li><i class="bi bi-file-person"></i>About Us</li></a>
               <a href="Opera8.php"><li><i class="bi bi-bell-fill"></i>Notifications</li></a>
</ul>
</div>
<div id="dialogoverlay"></div>
        <div id="dialogbox">
          <div>
            <div id="dialogboxhead"></div>
            <div id="dialogboxbody"></div>
            <div id="dialogboxfoot"></div>
          </div>
        </div>
<p id="mn">Do you want to borrow the selected book?</p>
<p id="ik">
    <input type="button" id="b1" name="b1" value="Yes" onclick="return borrow();"/>
    <a href="Opera12.php"><input type="button" id="b2" name="b2" value="No"/></a>
</p>
</body>
</html>