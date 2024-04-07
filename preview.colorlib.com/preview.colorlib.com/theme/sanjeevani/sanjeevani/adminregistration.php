<?php
include 'include/signup_admin.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="doctorloginpage.css">
  </head>
  <body>
    <div class="sidenav">
        <div class="login-main-text">
            <img   class="Avtar"  src="icon-illustration-human-resources-manager_853677-73180-removebg-preview.png" alt="Admin's Avtar">
           <h2>Admin's<br> Registration Page</h2>
           <p>Login or register from here to access.</p>
        </div>
     </div>
     <div class="main">
        <div class="col-md-6 col-sm-12">
           <div class="login-form">
            <h3>Registration Page</h3>
              <form action="adminregistration.php" method="post">
              <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Name" name="name">
                 </div>
                 <div class="form-group">
                    <label>User Name</label>
                    <input type="text" class="form-control" placeholder="User Name" name="username">
                 </div>
                 <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" placeholder="Address" name="address">
                 </div>
                 <div class="form-group">
                    <label>E-Mail</label>
                    <input type="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" class="form-control" placeholder="E-Mail" name="email">
                 </div>
                 <div class="form-group">
                    <label>Contact Number</label>
                    <input type="tel" pattern="[0-9]{10}" class="form-control" placeholder="Contact Number" name="contactnum">
                 </div>
                 <div class="form-group">
                    <label>Age</label>
                    <input type="number" pattern="[0-100]" class="form-control" placeholder="Age" name="age">
                 </div>
                
                 <div class="form-group">
                    <label>Gender </label>
                    <input type="text"  class="form-control" placeholder="Male/Female" name="gender">
                 </div>

                 <div class="form-group">
                  <label>Password</label>
                  <input type="password"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" placeholder="Password" name="password">
               </div>
                 <div class="form-group">
                  <label>Confirm Password</label>
                  <input type="password" class="form-control" placeholder=" Confirm Password" name="cpassword">
               </div>
                 <!-- <button type="submit" class="btn btn-black">Login</button> -->
                 <button type="submit" class="btn btn-success">Register</button>
                 <!-- <button type="button" class="btn btn-success">Submit</button> -->
              </form>
           </div>
        </div>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>