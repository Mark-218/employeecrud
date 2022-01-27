
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container my-5">
<div class="table-responsive">
           
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Middle Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Marital Status</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Anniversary Date</th>
      <th scope="col">Date of Joining</th>
      <th scope="col">Official Email Address</th>
      <th scope="col">Personal Email Address</th>
      <th scope="col">Role</th>
      <th scope="col">Department</th>
      <th scope="col">Designation</th>
      <th colspan="2">Oprations</th>
     
      
    </tr>
  </thead>
  
    <tbody>
      <?php
      include 'dbcon.php';

      $select = "select * from users";

      $query = mysqli_query ($con, $select);

     

      while( $result = mysqli_fetch_array($query)){


      ?>

      <tr>
        <td><?php echo $result['ID']; ?></td>
         <td><?php echo $result['fname']; ?></td>
          <td><?php echo $result['mname']; ?></td>
           <td><?php echo $result['lname']; ?></td>
           <td><?php echo $result['gender']; ?></td>
           <td><?php echo $result['contact']; ?></td>
           <td><?php echo $result['marital_status']; ?></td>
           <td><?php echo $result['dob']; ?></td>
           <td><?php echo $result['asd']; ?></td>
           <td><?php echo $result['doj']; ?></td>
           <td><?php echo $result['official_email']; ?></td>
           <td><?php echo $result['personal_email']; ?></td>
           <td><?php echo $result['role']; ?></td>
           <td><?php echo $result['department']; ?></td>
           <td><?php echo $result['designation']; ?></td>
           <td scope="col " data-bs-toggle="tooltip" data-bs-placement="top" title="UPDATE"> <a href="update.php?id=<?php echo $result['ID']; ?>" > <i class="fas fa-edit "></i></a></td>
           <td scope="col" data-bs-toggle="tooltip" data-bs-placement="top" title="DELETE"><a href="delete.php?id=<?php echo $result['ID']; ?>" ><i class="fas fa-trash-alt "></i></td>
            
      </tr>

      <?php
    }

      ?>
    </tbody>
  </table>
</div>
</div>