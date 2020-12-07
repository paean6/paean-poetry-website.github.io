<?php 

$host="localhost";
$username="root";
$password="";
$db="demo";

$abc=mysqli_connect ($host,$username,$password , $db);

if(isset($_POST['Submit'])){
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from users where username='".$username."'AND password='".$password."' limit 1";
    
    $result=mysqli_query( $abc,$sql);
    
    if(mysqli_num_rows($result)==1){
        echo "<script> window.location.href='main.html';</script>";
        
    }
    else{
        echo " You Have Entered Incorrect Password";
        
    }
        
}
?>