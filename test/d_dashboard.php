<?php
include 'partials/db_doctor.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>doctors</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="container">
      <aside>
           
         <div class="top">
           <div class="logo">
             <h2>S<span class="danger">ANJEEVANI</span> </h2>
           </div>
           <div class="close" id="close_btn">
            <span class="material-symbols-sharp">
              close
              </span>
           </div>
         </div>
         <!-- end top -->
          <div class="sidebar">

            <a href="#" class="active">
              <span class="material-symbols-sharp">grid_view </span>
              <h3>Dashbord</h3>
           </a>
           <a href="d_dash_appoint.php" >
            <span class="material-symbols-outlined">
              clinical_notes
              </span>
            <h3>Appointment</h3>
         </a>
           <a href="#" >
              <span class="material-symbols-sharp">person_outline </span>
              <h3>Patient List </h3>
           </a>
           
           <!-- <a href="#">
              <span class="material-symbols-sharp">insights </span>
              <h3>Analytics</h3> -->
           </a>
           <a href="#">
            <span class="material-symbols-outlined">
              reviews
              </span>
              <h3>Feedback</h3>
              <!-- <span class="msg_count">14</span> -->
           </a>
           
           <a href="#">
            <span class="material-symbols-outlined">
              account_balance_wallet
              </span>
              <h3>Earning</h3>
           </a>
           <a href="#">
            <span class="material-symbols-outlined">
              manage_accounts
              </span>
              <h3> Profile Settings</h3>
           </a>
           <a href="#">
            <span class="material-symbols-outlined">
              lock
              </span>
              <h3>Change Password</h3>
           </a>
           <a href="#">
              <span class="material-symbols-sharp">logout </span>
              <h3>logout</h3>
           </a>
             


          </div>

      </aside>
      <!-- --------------
        end asid
      -------------------- -->

      <!-- --------------
        start main part
      --------------- -->

      <main>
           <h1><?php echo $name;?></h1>

           

        <div class="insights">

           <!-- start seling -->
            <div class="sales">
               <!-- <span class="material-symbols-sharp">trending_up</span> -->
               <span class="material-symbols-outlined">
                patient_list
                </span>
               <div class="middle">

                 <div class="left">
                   <h3>Total Patient</h3>
                   <?php echo '<h1>'.$num4.'</h1>' ?>
                 </div>
                  <div class="progress">
                      <!-- <svg>
                         <circle  r="30" cy="40" cx="40"></circle>
                      </svg>
                      <div class="number"><p>80%</p></div> -->
                  </div>

               </div>
               <small>Last 5 Years</small>
            </div>
           <!-- end seling -->
              <!-- start expenses -->
              <div class="expenses">
                <!-- <span class="material-symbols-sharp">local_mall</span> -->
                <span class="material-symbols-outlined">
                  stethoscope
                  </span>
                <div class="middle">
 
                  <div class="left">
                    <h3>Today's Patient </h3>
                    <h1><?php echo $num5; ?>
                    
                    </h1>
                  </div>
                   <div class="progress">
                       <!-- <svg>
                          <circle  r="30" cy="40" cx="40"></circle>
                       </svg>
                       <div class="number"><p>80%</p></div> -->
                   </div>
 
                </div>
                <small>Last 24 Hours</small>
             </div>
            <!-- end seling -->
               <!-- start seling -->
               <div class="income" >
                <!-- <span class="material-symbols-sharp" >stacked_line_chart</span> -->
                <span class="material-symbols-outlined">
                  checkbook
                  </span>
                <div class="middle">
 
                  <div class="left">
                    <h3>Appointments</h3>
                    <h1><?php echo $num1?></h1>
                  </div>
                   <div class="progress">
                       <!-- <svg>
                          <circle  r="30" cy="40" cx="40"></circle>
                       </svg>
                       <div class="number"><p>100%</p></div> -->
                   </div>
 
                </div>
                <small>Last 24 Hours</small>
             </div>
            <!-- end seling -->

        </div>
       <!-- end insights -->
      <div class="recent_order">
         <h2></h2>
         <table> 
             <thead>
              <tr>
                <th>Patient Name</th>
                <th>Mobile Number</th>
                <th>Payments</th>
                <th>Status</th>
              </tr>
             </thead>
              <tbody>
              <?php
              while ($row = mysqli_fetch_assoc($result1)) {
              $name2=$row['patient_name'];
              $mobilenum=$row['patient_mobile'];
                  echo'<tr>
                   <td>'.$name2.'</td>
                   <td>'.$mobilenum.'</td>
                   <td>due</td>
                   <td class="warning">Pending</td>
                   <td class="primary">Details</td>
                 </tr>';}?>
                
              </tbody>
         </table>
         <a href="#">Show All</a>
      </div>

      </main>
      <!------------------
         end main
        ------------------->

      <!----------------
        start right main 
      ---------------------->
    <div class="right">

<div class="top">
   <button id="menu_bar">
     <span class="material-symbols-sharp">menu</span>
   </button>

   <div class="theme-toggler">
     <span class="material-symbols-sharp active">light_mode</span>
     <span class="material-symbols-sharp">dark_mode</span>
   </div>
    <div class="profile">
       <div class="info">
           <p><b><?php echo $username;?></b></p>
           <p>Doctor</p>
           <small class="text-muted"></small>
       </div>
       <div class="profile-photo">
         <img src="./images/profile-1.jpg" alt=""/>
       </div>
    </div>
</div>

  <div class="recent_updates">
     <h2>Recent Update</h2>
   <div class="updates">
      <div class="update">
         <div class="profile-photo">
            <img src="images-20240406T121948Z-001/images/4.jpg" alt=""/>
         </div>
        <div class="message">
           <p><b>Migraine </b>linked to increased risk of IBD in new Study </p>
        </div>
      </div>
      <div class="update">
        <div class="profile-photo">
        <img src="images-20240406T121948Z-001/images/6.png" alt=""/>
        </div>
       <div class="message">
          <p><b>Chronic </b>Managing Chronic Inflammation with psoriasis</p>
       </div>
     </div>
     <div class="update">
      <div class="profile-photo">
         <img src="images-20240406T121948Z-001/images/3.jpg" alt=""/>
      </div>
     <div class="message">
        <p><b>Asthama</b>Disease may be Stoppable</p>
     </div>
   </div>
  </div>
  </div>


   <div class="sales-analytics">
     <h2>Recent Reviews</h2>

      <div class="item onlion">
        <div class="icon">
          <span class="material-symbols-outlined">
            star_rate_half
            </span>
        </div>
        <div class="right_text">
          <div class="info">
            <h3>Himanshu</h3>
            <small class="text-muted">Excellent, friendly care.</small>
          </div>
          <h5 class="danger">5 Hrs.</h5>
          <!-- <h3>3849</h3> -->
        </div>
      </div>
      <div class="item onlion">
        <div class="icon">
          <span class="material-symbols-outlined">
            stars
            </span>
        </div>
        <div class="right_text">
          <div class="info">
            <h3>Ravi</h3>
            <small class="text-muted">Very nervous but a great experience from start to finish</small>
          </div>
          <h5 class="success">2 days</h5>
          <!-- <h3>3849</h3> -->
        </div>
      </div>
      <div class="item onlion">
        <div class="icon">
          <span class="material-symbols-outlined">
            star_half
            </span>
        </div>
        <div class="right_text">
          <div class="info">
            <h3>Priya</h3>
            <small class="text-muted">Really informative consultation</small>
          </div>
          <h5 class="danger">6 Months</h5>
          <!-- <h3>3849</h3> -->
        </div>
      </div>
   
  

</div>

      <div class="item add_product">
            <div>
            <span class="material-symbols-sharp">add</span>
            </div>
     </div>
</div>


   </div>



   <script src="script.js"></script>
</body>
</html>