<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Employee Details</title>
  </head>
  <body>
  <div class="container">
  <div class="card ">
  <div class="card-header text-center my-5">
  Employee Details
  </div>
  <div class="card-body">
   <form method="post" class="row g-3">
 
  <!-- Name Section -->
  <div class="col-md-4">
    <label for="Firstname" class="form-label">First Name</label>
    <input type="text" class="form-control" name="fname" id="fname">
  </div>
  <div class="col-md-4">
    <label for="Middlename" class="form-label">Middle Name</label>
    <input type="text" class="form-control" name="mname" id="mname">
  </div>
  <div class="col-md-4">
    <label for="Lastname" class="form-label">Last Name</label>
    <input type="text" class="form-control" name="lname" id="lname">
  </div>


    <!-- Gender and contact maregial status -->

    <div class="col-md-4">
    <label for="gender" class="form-label">Gender</label> <br/>
    <input type="radio" id="html"  value="Male" name="gender"  > Male
    <input type="radio" id="html" value="Female" name="gender" > Female
  </div>


  <div class="col-md-4">
    <label for="contact" class="form-label">Contact Number</label>
    <input type="text" class="form-control" name="contact"  id="contact">
  </div>

  <div class="col-md-4">
  <label for="Maritalstatus" class="form-label">Marital Status</label>
  <select class="form-select" aria-label="Default select example" name="ms">
  <option value="Married" >Married</option>
  <option value="Single" >Single</option>
</select>
  </div>


<!-- calender tasks -->

<div class="col-md-4">
    <label for="Dateofbirth" class="form-label">Date of Birth</label>
    <input type="date" class="form-control" name="dob" id="dob">
  </div>

  <div class="col-md-4">
    <label for="Anniversarydate" class="form-label">Anniversary Date</label>
    <input type="date" class="form-control" name="asd" id="asd">
  </div>

  <div class="col-md-4">
    <label for="Dateofjoining" class="form-label">Date of Joining</label>
    <input type="date" class="form-control" name="doj" id="doj">
  </div>



        <!-- Email Addres -->

  <div class="col-md-6">
    <label for="Officialemailaddress" class="form-label">Official Email Address</label>
    <input type="email" class="form-control" name="oemail" id="oemail">
  </div>

  <div class="col-md-6">
    <label for="Personalemailaddress" class="form-label">Personal Email Address</label>
    <input type="email" class="form-control" name="pemail" id="pemail">
  </div>

    <!-- Employee Info -->

  <div class="col-md-4">
  <label for="Role" class="form-label">Role</label>
  <select class="form-select" aria-label="Default select example"  name="role">
  <option value="Hardware Technician">Hardware Technician</option>
  <option value="Network Administrator/Engineer">Network Administrator/Engineer</option>
  <option value="Business Analys">Business Analyst</option>
  <option value="Web Developer">Web Developer</option>
  <option value="Help Desk Analyst and Help Desk Support">Help Desk Analyst and Help Desk Support</option>
</select>
  </div>

  <div class="col-md-4">
  <label for="Department" class="form-label" >Department</label>
  <select class="form-select" aria-label="Default select example" name="department">
  <option value="Hardware & Network">Hardware & Network</option>
  <option value="IT Support">IT Support</option>
  <option value="Design & Development">Design & Development</option>
  <option value="Business">Business</option>
</select>
  </div>

  <div class="col-md-4">
  <label for="Designation" class="form-label">Designation</label>
  <select class="form-select"  name="designation" aria-label="Default select example">
  <option value="Developer">Developer</option>
  <option value="Manager">Manager</option>
  <option value="Support">Support</option>
</select>
  </div>

  
  <div class="col-12">
    <button type="submit" name="submit" class="btn btn-primary">Submit</button> 
    <button type="submit" class="btn btn-dark"><a href="show.php">Check Details</a></button> 
  
  </div>
  
</form>
</div>
  </div>
  <!-- <div class="card-footer text-muted">
    2 days ago
  </div> -->
</div>

 <!--  Databse Connectivity   -->   

 <?php

include 'dbcon.php';


if (isset($_POST['submit'])) {
 

   
 
 
   $fname= $_POST['fname'];
   $mname= $_POST['mname'];
   $lname= $_POST['lname'];
   $gender= $_POST['gender'];
   $contact= $_POST['contact'];
   $ms= $_POST['ms'];
   $dob= $_POST['dob'];
   $asd= $_POST['asd'];
   $doj= $_POST['doj'];
   $oemail= $_POST['oemail'];
   $pemail= $_POST['pemail'];
   $role= $_POST['role'];
   $department= $_POST['department'];
   $designation= $_POST['designation'];
   
        
 
 


   $insertq ="  INSERT INTO users (fname, mname, lname, gender, contact, marital_status, dob, asd, doj, official_email, personal_email, role, department, designation ) VALUES ('$fname', '$mname', '$lname', '$gender', '$contact', '$ms', '$dob', '$asd', '$doj', '$oemail', '$pemail', '$role', '$department', '$designation' )" ;

 $result = mysqli_query($con , $insertq);



 if ($result){

  
  ?>
	<script>
		alert("Details submitted successfully");

	</script>
	<?php
  
 }else{
 
  ?>
	<script>
		alert("Details not submit");

	</script>

  <?php
 }
}

?>
    


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>