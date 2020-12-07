<?php
$host="localhost";
$username="root";
$password="";
$db="demo";

$abc=mysqli_connect ($host,$username,$password , $db);

if(isset($_POST['sub']))
{
  $title = $_POST['title'];
  $type = $_POST['type'];
  $poetry = $_POST['poetry'];
  

  $sql = "INSERT INTO post(title, type, poetry) VALUES('$title','$type','$poetry')";


  if(mysqli_query($abc,$sql))
    {
      echo "<script>alert(' Poetry Added Successfully'); window.location.href='compose.html';</script>";
    }
    else
    {
      echo "<script>alert('Error Occured in Adding Student'); window.location.href='compose.html';</script>";
    }

  echo "connection Successfully";
}




?>