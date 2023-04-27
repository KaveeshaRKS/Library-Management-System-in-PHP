<html>
    <head>
        <link href="opera.css" rel="stylesheet" type="text/css">
        <script language="JavaScript" src="opera.js" type="text/javascript"></script>
    </head>
    <body>
    <?php
    include 'connectopera.php';
    ?>
        <div id="dialogoverlay"></div>
        <div id="dialogbox">
          <div>
            <div id="dialogboxhead"></div>
            <div id="dialogboxbody"></div>
            <div id="dialogboxfoot"></div>
          </div>
        </div>
        <div class="a">
        <form action="Opera4.php" method="post">
            <img src="libraryicon.jpg" alt="LibraryIcon" id="b">
            <div class="c">Opera Library Management System</div>
        </br></br><div id="fpass">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sign Up</div>
        <p id="para4"><input type="text" id="fname" name="fname" placeholder="First Name" required/><input type="text" id="lname" name="lname" placeholder="Last Name"required/></p>
        <p id="para4"><input type="email" id="email2" name="emailaddress" placeholder="E-mail"required/></p>
        <p id="para4"><input type="password" id="email3" name="pass" placeholder="Password"required/></p>
        <p id="para4"><input type="password" id="email4" name="pass" placeholder="Confirm Password"required/></p>
        <p id="para4"><input type="checkbox" id="checkbox" tabindex="1"/>I accept the Terms of Use & Privacy Policy.</p>
        <p id="para4"><a href="Opera1.php"><input type="submit" id="buttona" value="Sign Up" onclick="return validate();"/></a></p>
        <p id="fpass1">Already have an account? <a href="Opera1.php">Login</a> here.</p>
    </form></div>
     </body>
     <?php
    if(isset($_POST['fname']) || isset($_POST['lname']) || isset($_POST['emailaddress']) || isset($_POST['pass'])){
      $sql="INSERT INTO signupopera(FirstName, LastName, email, PW) VALUES
      ('$_POST[fname]','$_POST[lname]','$_POST[emailaddress]','$_POST[pass]')";

header('Location:Opera1.php');

      if(!mysqli_query($con,$sql)){
        die('Error:'.mysqli_error($con));
      }
    }
    mysqli_close($con);
    ?>
</html>