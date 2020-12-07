<?php
  $host="localhost";
  $username="root";
  $password="";
  $db="demo";
  
  $abc=mysqli_connect ($host,$username,$password , $db);

  $sql = "SELECT * FROM post";   
  $res = mysqli_query($abc,$sql);
  if($res)
  {
    $x=0;
  }
  else printf("error: %s\n", mysqli_error($conn));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paean:A poetry website</title>
</head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Texturina:ital,wght@1,100&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<style>
    /* css reset */
    body {
        font-family: 'Baloo Bhai 2', cursive;
        font-family: 'Texturina', serif;
        margin: 0px;
        padding: 0px;
        background: url('img/readus3.jpg') repeat;
       

    }

    .left {
        display: inline-block;

        position: absolute;
        left: 34px;
        top: 20px;
    }

    .left img {

        width: 98px;
    }

    .mid {
        display: block;
        font-size: 25px;
        width: 32%;
        margin: 4px auto;

    }

    .right {
        display: inline-block;
        border: white;
        border-radius: 6px;
        position: absolute;
        right: 34px;
        top: 30px;

    }

    .navbar input {
        border-radius: 7px;
        border: 2px solid black;

    }

    .navbar {
        display: inline-block;

    }

    .navbar li {

        display: inline-block;
        font-size: 25px;

    }

    .navbar li a {
        color: white;
        text-decoration: none;
        padding: 34px 23px;

    }

    .navbar li a:hover,
    .navbar li a:active {
        text-decoration: underline;
        color: grey;
    }

  

    /* footer styling starts here*/
    footer {
        text-align: center;
        padding: 50px;
        color: rgb(5, 12, 11);
        background-color: rgb(177, 228, 219);
    }

    /* footer styling ends here*/


    }
</style>

<body>
    <header class="header">
        <!--left box for logo-->
        <div class="left">
            <img src="img/logo.png" alt="">

        </div>
        <!--mid box for navbar-->
        <div class="mid">
            <ul class="navbar">
                
                <li><a href="compose.html">Compose</a></li>
                <li><a href="aboutus.html">About us</a></li>
                <li><a href="contact/index.php">Contact</a></li>
            </ul>
        </div>
        <!--right box for button-->
        
    </header>

    <?php  if (isset($_SESSION['username'])) : ?> 

            <p> 

                Welcome  

                <strong> 

                    <?php echo $_SESSION['username']; ?> 

                </strong> 

            </p> 

            <p>  

                <a href="index.php?logout='1'" style="color: red;"> 

                    Click here to Logout 

                </a> 

            </p> 

        <?php endif ?>
        <!--login page-->
<div class="mainbod">
  <table class="table" style="width: 1500px; border: 2px solid black; padding: 5px; background-color: #ffe6f9 ; height: 300px; margin-top: -300px;">
    <caption class="table-header"><h1>Recent post</h1></caption>
     
    <col style="width: 5%;"/>
    <col style="width: 10%;"/>
    <col style="width: 10%;"/>
    <tr style="background-color: grey">
      <th><strong >ID</strong></th>
      <th><strong>Title</strong></th>
      <th><strong>Type</strong></td>
      <th><strong>Poetry</strong></th> 
    </tr>


        
  <?php
      while($row = mysqli_fetch_assoc($res)) {
        {
          echo '<tr><td>'.$row['id'] . '</td><br><td>'.$row['title'] . "</td><br><td>".$row['type']."</td><br><td>".$row['poetry'] . "</td>";
        };
      ?>
      <?php
      };



      ?>


                </div>

               
















</body>