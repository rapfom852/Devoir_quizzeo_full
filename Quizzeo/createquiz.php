 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Create quiz- Quizzeo</title>
    <style>
        input{
            width:320px;
        }
    </style>
    
</head>
<body>
<div class="container">
<div class="header">
    <ul style=" font-size: 30px;" class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" href="">Home</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="#">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="createquiz.php">New question</a>
  </li>
  <li class="nav-item">
    <a style="font-size: x-large; font-weight: Bold;" class="nav-link disabled" href="#">QUIZZEO</a>
  </li>
  </ul>
  
</div>
<div style=" margin-top: 100px; justify-content: center; align-items: center; display:flex;" class="row">

<div class="col">
<h1>Create new quiz</h1>
    <div style="  justify-content: center; align-items: center; display:flex; margin-top: 50px; font-size:30px;" class="Regform">Set your question</div>
     <div  style="  justify-content: center; align-items: center; display:flex; margin-top: 40px; font-size: 20px;"  class="form">
       <form  action="cqz.php" method="POST" >

        <label>Question:</label><br>
        <input type="text" name="qtn" id="qtn"  required><br>
        <label>Option1:</label><br>
        <input type="text" name="op1" id="op1"  required><br>
        <label>Option2:</label><br>
        <input type="text" name="op2" id="op2"  required><br>
        <label>Option3:</label><br>
        <input type="text" name="op3" id="op3"  required><br>
        <label>Option4:</label><br>
        <input type="text" name="op4" id="op4"  required><br>
        <label>Answer:</label><br>
        <input type="text" name="ans" id="ans" required><br>
        
        
        <br>
        <input id="snd" type="submit" value="Send">
    
        </form>
        
     </div>
</div>

</div>
</div>

</div>
 
</div>








<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>