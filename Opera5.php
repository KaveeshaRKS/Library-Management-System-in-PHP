<html>
<?php
include 'connectopera.php';
?>
    <head>
        <link href="opera.css" rel="stylesheet" type="text/css">
        <script language="JavaScript" src="opera.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="a">
            <img src="libraryicon.jpg" alt="LibraryIcon" id="b">
            <div class="c">Opera Library Management System</div>
            <div id="kl">Add new book....</div>
            <form method="post">
            <p><input type="text" name="text1" id="text1" placeholder="Book title"/></p>
            <p><input type="text" name="text2" id="text2" placeholder="Author"/></p>
            <p><input type="text" name="text3" id="text3" placeholder="Book category"/></p>
            <p><input type="text" name="text4" id="text4" placeholder="Publication_year"/></p>
            <p><input type="text" name="text5" id="text5" placeholder="Rack_no."/></p>
            <p><input type="text" name="text6" id="text6" placeholder="Book_items"/></p>
            <p id="gh">
                <input type="submit" name="submit3" id="submit3" value="Add book"/>
                <a href="Opera13.php"><input type="button" name="button7" id="button7" value="Back"/></a>
            </p>
</form>
        </div>
        <?php
        if(isset($_POST['submit3'])){
            $sql="INSERT INTO bookdetails(title, author, category, publication_year, rack_no, items) VALUES
            ('$_POST[text1]','$_POST[text2]','$_POST[text3]','$_POST[text4]','$_POST[text5]','$_POST[text6]')";
      
      header('Location:Opera6.php');
      
            if(!mysqli_query($con,$sql)){
              die('Error:'.mysqli_error($con));
            }
          }
          mysqli_close($con);
        ?>
    </body>
</html>