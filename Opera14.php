<html>
<?php
include 'connectopera.php';
?>
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
               <a class="current" href="Opera14.php"><li><i class="bi bi-check2-all"></i>Selected</li></a>
               <a href="Opera15.php"><li><i class="bi bi-check2-circle"></i>Borrowed</li></a>
               <a href="Opera16.php"><li><i class="bi bi-check2-square"></i>Reserved</li></a>
               <a href="Opera7.php"><li><i class="bi bi-file-person"></i>About Us</li></a>
               <a href="Opera8.php"><li><i class="bi bi-bell-fill"></i>Notifications</li></a>
</ul>
</div>
<br/><br/><br/>
<?php
if(isset($_POST['submitBtn'])){
    $text=$_POST['txtF'];
    
    $result=mysqli_query($con,"SELECT * FROM bookdetails");
    
    echo "<table border='1'>
    <tr>
    <th>Title</th>
    <th>Author</th>
    <th>Category</th>
    <th>Publication_Year</th>
    <th>Rack No.</th>
    <th>Items</th>
    </tr>";
    
    while($row=mysqli_fetch_array($result)){
        if($row['title']==$text){
            echo "<tr>";
            echo "<td>".$row['title']."</td>";
            echo "<td>".$row['author']."</td>";
            echo "<td>".$row['category']."</td>";
            echo "<td>".$row['publication_year']."</td>";
            echo "<td>".$row['rack_no']."</td>";
            echo "<td>".$row['items']."</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
    }
?>
<div class=lkj>
<a href="Opera13.php"><input type="reset" name="reset" id="reset" value="Cancel"></a>
<a href="Opera15.php"><input type="submit" name="submit" id="reset1" value="Borrow"></a>
<a href="Opera16.php"><input type="submit" name="submit1" id="reset2" value="Reserve"></a>
</div>
</body>
</html>