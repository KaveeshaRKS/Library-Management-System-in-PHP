<html>
    <head>
        <link href="opera.css" rel="stylesheet" type="text/css">
        <script language="JavaScript" src="opera.js" type="text/javascript"></script>
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
            <img src="libraryicon.jpg" alt="LibraryIcon" id="b">
            <div class="c">Opera Library Management System</div></br></br></br>
            <div id="fpass">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forgot password?</div></br>
            <p id="para">Let us help you!</br>If you do not have an account, click here to set up a new account.(It's free) Type your e-mail address in the field below to receive your validation code.</p>
        <form name="myForm" method="POST"><table><tr><td><img src="emailicon.png" id="email"/></td><td><input type="email" id="emailaddress" placeholder="E-mail Address" required/>
        </td></tr></table></form><br/><center><a href="Opera3.php"><input type="submit" value="Send me my validation code" id="button1" onclick="return emailValidationTwo()"/></a></center>
    </div>
    </body>
</html>