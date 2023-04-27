<html>
    <head>
        <link href="opera.css" rel="stylesheet" type="text/css">
        <script language="JavaScript" src="opera.js" type="text/javascript"></script>
<?php
include 'connectopera.php';
?>
    </head>
    <body>
        <div id="dialogoverlay"></div>
        <div id="dialogbox">
          <div>
            <div id="dialogboxhead"></div>
            <div id="dialogboxbody"></div>
            <div id="dialogboxfoot"></div>
          </div>
        </div>
        <div class="a">
            <form name="myForm" method="post">
            <img src="libraryicon.jpg" alt="LibraryIcon" id="b">
            <div class="c">Opera Library Management System</div></br></br></br></br><form name="myForm" action="opera1.php" method="POST"><table>
            <tr><td><img src="emailicon.png" id="email"/></td><td>
            <input type="email" id="emailaddress" name="emailaddress" placeholder="E-mail Address" required/></td></tr>
            <tr>
                <td><img src="passwordicon1.png" id="password"/></td>
                <td class="showbtn1"><input type="password" id="pass" name="pass" placeholder="Password" required/></td>
            </tr>
        </table>
    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Opera2.php" id="fpass">Forgot password?</a>
</br></br><center><a href="Opera12.php"><input type="submit" id="button" name="button" value="Login" onclick="return emailValidation()"/></a></center></br></br>
<div id="fpass">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Don't have an account? <a href="Opera4.php" id="fpass">Sign up</a> here!</div>
</form></div>
</body>
<?php
if(isset($_POST["button"])){
    $email=$_POST["emailaddress"];
    $pw=$_POST["pass"];
    $result=mysqli_query($con,"SELECT * FROM signupopera");

    while($row=mysqli_fetch_array($result)){
        if($row["email"]!=$email || $row["PW"]!=$pw){
            echo "Invalid E-mail or Password! Recheck!!"; 
        }
        else{
            header('Location:Opera12.php');
            break;
        }
    }
}
?>
</html>