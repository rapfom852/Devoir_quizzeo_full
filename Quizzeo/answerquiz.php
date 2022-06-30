<?php require('connect.php');
session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Answer quiz- Quizzeo</title>
    <style>
        td{
            font-size:20px;
            
        }
        input{
            cursor: pointer;
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
    <a style="font-size: x-large; font-weight: Bold;" class="nav-link disabled" href="#">QUIZZEO</a>
  </li>
  </ul>
  
</div>
<div style=" margin-top: 100px; display: flex; justifiy-content: center; align-item: center;" class="row">
    <h1>Quiz</h1>
    <div class="col">
       
        </div>
        <div class="col-lg-6">
        <?php 
    $result = mysqli_query($conn,"SELECT * FROM online");
    echo"<center>";
    if (mysqli_num_rows ($result)>0){
        echo"<table>";
        while($row=mysqli_fetch_array($result))
        {
            echo"<tr>";
            echo"<td>".$row['qid'].")".$row['question']."</td>";
            echo"</tr>";
            echo"<tr>";
            echo"<td><input type='radio' id='option1' name=".$row['qid']." class='radoptions' value =".$row['option1']."/>".$row['option1']."";
            echo"<input type='radio' id='option2' name=".$row['qid']." class='radoptions' value =".$row['option2']."/>".$row['option2']."";
            echo"<input type='radio' id='option3' name=".$row['qid']." class='radoptions' value =".$row['option3']."/>".$row['option3']."";
            echo"<input type='radio' id='option4' name=".$row['qid']." class='radoptions' value =".$row['option4']."/>".$row['option4']."";
            echo"</td>";
            echo"</tr>";
            echo"<tr>";
            echo"<td><span id='span1' class='radoptions' style='color:green; display:none;'><hr/><b>Correct answer is : ".$row['corrans']."</b><hr/></span></td>";
            echo"</tr>";
        }
        echo"</table>";
    }
    echo"</center>";
    mysqli_close($conn);
    ?>
        </div>
        <div style="display: flex; justify-content: center; align-items: center;" class="col-lg-6">
        <button style="border: 1px solid grey; border-radius: 5%; width: 300px; height: 80px; background-color: rgb(195, 0, 255); color: white; font-size: 30px; cursor: pointer; " id="but1" type="button" onclick= "displayans();">Submit</button>
         <label id="labmsg"><label>
        </div>
    
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document). ready (function()
            {
                $("#but1").click(function()
                {
                    $(".radoptions").show();
                    $(".radoptions").attr("disabled", true);
                    $("#but1").attr("disabled", true);
                });
            });
        function displayans()
        {
            document.getElementById("labmsg").innerHTML="";
            var results=document.getElementsByTagName('input');
            for(i=0;i<results.length;i++)
        {
            if(results[i].type=="radio")
            {
                if(results[i].checked)
                {
                    document.getElementById("labmsg").innerHTML
                    +="Q"+results[i].name+")"+"Your selected Answer is:"+results[i].value+"<br/>";
                }
            }
        }
        }
    </script>
</div>

</div>








<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>