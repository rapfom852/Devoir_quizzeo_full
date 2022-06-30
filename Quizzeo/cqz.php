<?php
require('connect.php');

$qtn = $_POST['qtn'];
$op1 = $_POST['op1'];
$op2 = $_POST['op2'];
$op3 = $_POST['op3'];
$op4 = $_POST['op4'];
$ans = $_POST['ans'];



$sql = "INSERT INTO `online`(question, option1, option2, option3, option4, corrans)VALUES ('$qtn', '$op1','$op2', '$op3', '$op4', '$ans')";
$result = $conn->query($sql);



header("Location:answerquiz.php");
?>