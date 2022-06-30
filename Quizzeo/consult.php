<?php
 require('connect.php');
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Users/quizzeurs- Quizzeo</title>
    
</head>
<body>
<div class="container">
<div class="header">
    <ul style=" font-size: 30px;" class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" href="">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="profilea.php">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="disconnect.php">Disconnect</a>
  </li>
  <li class="nav-item">
    <a style="font-size: x-large; font-weight: Bold;" class="nav-link disabled" href="#">QUIZZEO</a>
  </li>
  </ul>
  
</div>
<div style=" margin-top: 100px;" class="p">
    <h1>These is a list of registered users</h1>
</div>
<div style=" justify-content: center; align-items: center; display: flex;" class="row">
    <div class="col-1 col-lg-4">
    
        
    <?php
$sql = "SELECT * FROM user where ro_le <> 1 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  ?>

    <table>
        <th><h4>A/Q</h4></th>
       <tr  >
         <th >ID</th>
         <th >pseudo</th>
         <th>email</th> 
         <th>role</th>
       </tr>
       
       
   <?php
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr ><td>  " . $row["id"]. "</td><td> " . $row["pseudo"]. "</td><td>" . $row["email"]. "</td><td> " . $row["ro_le"]. "</td></tr>";
    }
} else {
    echo "0 results";
}?>
</table>
        
    </div>
    <div class="col-2 col-lg-4">
    <?php
$sql = "SELECT * FROM user where ro_le = 1 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  ?>

    <table>
        <th><h4>U</h4></th>
       <tr  >
         <th >ID</th>
         <th >pseudo</th>
         <th>email</th> 
         <th>role</th>
       </tr>

       
   <?php
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr ><td>  " . $row["id"]. " </td><td>" . $row["pseudo"]. "</td><td>" . $row["email"]. "</td><td>" . $row["ro_le"]. "</td></tr>";
    }
} else {
    echo "0 results";
}?>
</table>
    </div>
    
</div>
</div>








<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>