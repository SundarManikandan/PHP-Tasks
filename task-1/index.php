<?php
include 'connect.php';
//accesing all the values whatever i am inserting in input fields
    if(isset($_POST['submit']))
    {
      $fname=$_POST['fname'];
      $lname=$_POST['lname'];
      $email=$_POST['email'];
      $mobile=$_POST['mobile'];
      //insert query
      $sql="insert into seriescrud (fname,lname,email,mobile) values('$fname','$lname','$email',$mobile)";
      $result=mysqli_query($con,$sql);
      if($result)
      {
        // echo'Data inserted successfully';
      header('location:display.php');
      }
      else
      {
        die(mysqli_error($con));
      }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>StudentRegister</title>
    <style>
              *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        body{
            height:100vh;
            width:100%;
            color:white;
            display:flex;
            justify-content:center;
            background:url(img/back.jpg);
            background-size:100% 100%;
            padding:80px;
            font-family: 'Poppins', sans-serif;
        }
        form{
            padding:15px;
            width:35rem;
            height:38rem;
            display:block;
            background: rgba(255,255,0,0.06);
            box-shadow: 0 8px 32px 0 rgba(31,38,135,.37);
            border-radius: 30px;
            border-left: 1px solid rgba(255,255,255,.3);
            border-top: 1px solid rgba(255,255,255,.3);
        }
        label{
            font-size: 15px;
            color: white;
            margin-left: 10%;
            opacity: .8;
        }
        input[type=text]{	
            width: 80%;
            margin:5% auto;
            margin-left: 10%;
            margin-bottom: 8%;
            border: none;
            outline: none;
            background: transparent;
            color: white;
            border-bottom: 1px solid rgba(255,255,255,0.6);
            opacity: .8;
        }
        input[type=submit]{
            width: 100%;
            margin: 3% auto;
            color: white;
            font-size: 15px;
            font-family: 'Poppins', sans-serif;
            opacity: .7;
            background: rgba(255,255,255,0.06);
            padding: 7px 20px;
            border: none;
            outline: none;
            border-radius: 20px;
            text-shadow: 2px 2px 4px rgba(255,255,255,0.2);
            box-shadow: 3px 3px 5px rgba(31,38,135,.37);
            border-left: 1px solid rgba(255,255,255,.3);
            border-top: 1px solid rgba(255,255,255,.3);
        }
        h3{
            letter-spacing:.2rem;
            text-align:center;
        }
        img{
            width:70px;
            height:70px;
        }

    </style>
  </head>
  <body>
    <form method="post">
    <center><img src="img/emp.png"></center><br>
    <h3>ENTER STUDENT DETAILS HERE</h3><br>
        <label>First Name</label>
        <input type="text" placeholder="Enter your first name" name="fname">

        <label>Last Name</label>
        <input type="text" placeholder="Enter your last name" name="lname">

        <label>E-mail</label>
        <input type="text" placeholder="Enter your email" name="email">
   
        <label>Mobile</label>
        <input type="text" placeholder="Enter your mobile" name="mobile">

        <input type="submit" name="submit" value="submit">
    </form>

  </body>
</html>