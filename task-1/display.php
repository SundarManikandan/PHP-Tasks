<?php
include 'connect.php';

?>
  <!DOCTYPE html>
  <html>
  
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>Crud Operation</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
	</head>
  <body style="background-color: lightcoral;">
	   <div class="container">
		    <button class="btn btn-primary my-5"><a href="index.php" class="text-light">Add User</a>
		    </button>
		        <table class="table">
              <thead>
              <tr>
              <th scope="col">Sl.no</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Email</th>
              <th scope="col">Mobile</th>
              <th scope="col">Operations</th>
              </tr>
              </thead>
                <tbody>
  	             <?php
  	             $sql="Select * from seriescrud";
  	             $result=mysqli_query($con,$sql);
                  if($result)
                  {
                  while ($row=mysqli_fetch_assoc($result)) 
                  {
  			             $id=$row['id'];
  			             $fname=$row['fname'];
  			             $lname=$row['lname'];
  			             $email=$row['email'];
  			             $mobile=$row['mobile'];
                      echo'<tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$fname.'</td>
                        <td>'.$lname.'</td>
                        <td>'.$email.'</td>
                        <td>'.$mobile.'</td>
                        <td><button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
    	                       <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
                      </tr>';
  		            }
  	              }
?>
                </tbody>
              </table>
        </div>
    </body>
    </html>