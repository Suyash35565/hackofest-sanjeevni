<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Patient Personal Information</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="style.css">
  <!-- <style>
    /* body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
} */

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* h1 {
    text-align: center;
    color: #333;
} */

.patient-info {
    border-top: 1px solid #ccc;
    padding-top: 20px;
    margin-top: 20px;
}

.patient-info p {
    margin: 10px 0;
}

.patient-info strong {
    font-weight: bold;
}

  </style> -->
<style>
   .container-emenumber {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color:  #151414;
    }
    .emergency-contacts h2 {
        margin-top: 10px;
    }
    .emergency-contacts p {
        margin: 10px 0;
    }

    /* .patient-info {
        margin-top: 20px;
        font-size: medium;
        color:#ff8B00
    }
    .patient-info p {
        margin: 10px 0;
        color:#ff8B00;
    } */
/* 
    .medical-history {
        margin-top: 20px;
        color:whitesmoke;
    }
    .medical-history p {
        margin: 10px 0;
        color:whitesmoke;
        
    }
    .medical-history li {
        margin: 10px 0;
        color:whitesmoke;
        font-size: small;
        
    }
    .medical-history h2{
      color:   #ff8B00;
      /* font-size: large; */
    
    /* .patient-info strong {
        margin: 10px 0;
        color:whitesmoke;
    } */
</style>



</head>
<body>
   <div class="container">
      <aside>
           
         <div class="top">
           <div class="logo">
             <h2 style="color:#ff8B00">S<span class="danger">ANJEEVANI</span> </h2>
           </div>
           <div class="close" id="close_btn">
            <span class="material-symbols-sharp">
              close
              </span>
           </div>
         </div>
         <!-- end top -->
          <div class="sidebar">

            <a href="p_dashboard.php" >
              <span class="material-symbols-sharp">grid_view </span>
              <h3>Patient's Dashbord</h3>
           </a>
           <a href="p_information.php"  >
            <span class="material-symbols-outlined">
              clinical_notes
              </span>
            <h3>Personal Information</h3>
         </a>
           <a href="p_medihis.php">
              <span class="material-symbols-sharp">person_outline </span>
              <h3>Medical History </h3>
           </a>
           
           <!-- <a href="#">
              <span class="material-symbols-sharp">insights </span>
              <h3>Analytics</h3> -->
           </a>
           <!-- <a href="#">
            <span class="material-symbols-outlined">
              reviews
              </span>
              <h3>Appointments</h3>
              
           </a> -->
           
           <a href="p_patientem.php"  class="active">
            <span class="material-symbols-outlined">
              account_balance_wallet
              </span>
              <h3>Emergency Contact</h3>
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
           <h1>Priyam Ranjan</h1>

           <!-- <div class="date">
             <input type="date" >
           </div> -->

        <div class="insights">

           <!-- start seling -->
            <!-- <div class="sales">
            
               <span class="material-symbols-outlined">
                patient_list
                </span>
               <div class="middle">

                 <div class="left">
                   <h3>Consulted Doctor</h3>
                   <h1>6</h1>
                 </div>
                  <div class="progress">
                     
                  </div>

               </div>
               <small>Last 2 Years</small>
            </div> -->
           <!-- end seling -->
              <!-- start expenses -->
              <div class="expenses">
                <!-- <span class="material-symbols-sharp">local_mall</span> -->
                <span class="material-symbols-outlined">
                  stethoscope
                  </span>
                <div class="middle">
 
                  <div class="left">
                    <h3>Today's Appointment </h3>
                    <h1>1
                    
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
<!-- ********************************************************************* -->



    <!-- start seling -->
     <!-- <div class="">
      
        <span class="material-symbols-outlined">
            bookmarks
            </span>
        <div class="middle">

          <div class="left">
            <h3>Favourite Doctor</h3>
            <h1>6</h1>
          </div>
           <div class="progress">
               
           </div>

        </div>
        <small>Last 2 Months</small>
     </div> -->
     <!-- ****************************************************** -->
     <div class="">
        <!-- <span class="material-symbols-sharp">trending_up</span> -->
        <span class="material-symbols-outlined">
            blood_pressure
            </span>
        <div class="middle">

          <div class="left">
            <h3>Blood Pressure</h3>
            <h1>120/80</h1>
          </div>
           <div class="progress">
               <!-- <svg>
                  <circle  r="30" cy="40" cx="40"></circle>
               </svg>
               <div class="number"><p>80%</p></div> -->
           </div>

        </div>
        <small>5 Minute Ago</small>
     </div>
     <!-- ************************************************************* -->
     <div class="">
        <!-- <span class="material-symbols-sharp">trending_up</span> -->
        <span class="material-symbols-outlined">
            weight
            </span>
        <div class="middle">

          <div class="left">
            <h3>Weight</h3>
            <h1>77 Kg</h1>
          </div>
           <div class="progress">
               <!-- <svg>
                  <circle  r="30" cy="40" cx="40"></circle>
               </svg>
               <div class="number"><p>80%</p></div> -->
           </div>

        </div>
        <small>2 Week Ago</small>
     </div>










               <!-- start seling -->
               <!-- <div class="income" >
                
                <span class="material-symbols-outlined">
                  checkbook
                  </span>
                <div class="middle">
 
                  <div class="left">
                    <h3> Past Appointments</h3>
                    <h1>8</h1>
                  </div>
                   <div class="progress">

                   </div>
 
                </div>
                <small>Last 2 Year </small>
             </div> -->
            <!-- end seling -->

        </div>
       <!-- end insights -->
      <div class="recent_order">
         <!-- <h2></h2> -->
         <!-- <h1 style="text-align: center;">More Confedincial Information</h1> -->





         <!-- <form action="book_appointment.php" method="post" >
           
               
           
             <label for="name">Name:</label><br>
             <input type="text" id="name" placeholder="e.g. Ramesh Gupta" name="name" required ><br><br>
             
             <label for="email">Email:</label><br>
             <input type="email" id="email" placeholder="e.g. kumar55@gmail.com" name="email" required><br><br>
             
             <label for="phone">Phone:</label><br>
             <input type="tel" id="phone" name="phone" placeholder="e.g. 9125544878"   required><br><br>
             
             <label for="date">Date:</label><br>
             <input type="date"  id="date" name="date" required><br><br>
             
             <label for="time">Time:</label><br>
             <input type="time" id="time" name="time" required><br><br>
             
             <input type="submit" value="Book Appointment">
            </fieldset>
         </form> -->
         <!--<a href="#">Show All</a> -->
         <!-- <div class="recent_order">
            <h2></h2>
            <table> 
                <thead>
                 <tr>
                   <th>Product Name</th>
                   <th>Product Number</th>
                   <th>Payments</th>
                   <th>Status</th>
                 </tr>
                </thead>
                 <tbody>
                    <tr>
                      <td>Ramesh</td>
                      <td>4563</td>
                      <td>Due</td>
                      <td class="warning">Pending</td>
                      <td class="primary">Details</td>
                    </tr>
                    <tr>
                     <td>Mini USB</td>
                     <td>4563</td>
                     <td>Due</td>
                     <td class="warning">Pending</td>
                     <td class="primary">Details</td>
                   </tr>
                   <tr>
                     <td>Mini USB</td>
                     <td>4563</td>
                     <td>Due</td>
                     <td class="warning">Pending</td>
                     <td class="primary">Details</td>
                   </tr>
                   <tr>
                     <td>Mini USB</td>
                     <td>4563</td>
                     <td>Due</td>
                     <td class="warning">Pending</td>
                     <td class="primary">Details</td>
                   </tr>
                 </tbody>
            </table>
            <a href="#">Show All</a>
         </div> -->

<!-- <div class="container-info">

         
    <div class="patient-info">
        <p><strong>Name:</strong> John Doe</p>
        <p><strong>Date of Birth:</strong> January 1, 1980</p>
        <p><strong>Gender:</strong> Male</p>
        <p><strong>Address:</strong> 123 Main St, Anytown, USA</p>
        <p><strong>Phone Number:</strong> 555-123-4567</p>
        <p><strong>Email:</strong> johndoe@example.com</p>
        <p><strong>Medical Record Number:</strong> 123456789</p>
        <p><strong>Emergency Contact:</strong> Jane Doe (555-987-6543)</p>
        <p><strong>Insurance Provider:</strong> ABC Insurance</p>
        <p><strong>Policy Number:</strong> 987654321</p>
        <p><strong>Primary Care Physician:</strong> Dr. Smith</p>
        <p><strong>Last Appointment:</strong> March 15, 2024</p>
        <p><strong>Next Appointment:</strong> April 15, 2024</p>
        <p><strong>Allergies:</strong> None</p>
        <p><strong>Medical Conditions:</strong> Hypertension</p>
        <p><strong>Medications:</strong> Lisinopril, 10mg</p>
        <p><strong>Additional Notes:</strong> Patient prefers to be contacted via email.</p>
    </div>
</div> -->




<!-- <div class="conntainer-medicalhistroy">
<h1 style="text-align: center;">Patient Medical History</h1>
<div class="medical-history">
    <h2 style="color: #ff8B00;">Medical Conditions</h2>
    <ul>
        <li>Hypertension</li>
        <li>Diabetes</li>
        <li>Asthma</li>
        <li>Hyperlipidemia</li>
        <li>Osteoarthritis</li>
    </ul>
    <h2 style="color: #ff8B00;">Allergies</h2>
    <ul>
        <li>Penicillin</li>
        <li>Sulfa</li>
        <li>Aspirin</li>
    </ul>
    <h2 style="color: #ff8B00;">Surgeries</h2>
    <ul>
        <li>Appendectomy - 2010</li>
        <li>Cholecystectomy - 2015</li>
        <li>Total knee replacement - 2018</li>
    </ul>
    <h2 style="color: #ff8B00;">Medications</h2>
    <ul>
        <li>Lisinopril - 10mg daily</li>
        <li>Metformin - 500mg twice daily</li>
        <li>Albuterol inhaler - as needed</li>
        <li>Atorvastatin - 20mg daily</li>
        <li>Insulin glargine - 20 units at bedtime</li>
    </ul>
    <h2 style="color: #ff8B00;">Past Medications</h2>
    <ul>
        <li>Metoprolol - discontinued in 2019</li>
        <li>Glipizide - discontinued in 2017</li>
    </ul>
    <h2 style="color: #ff8B00;">Family History</h2>
    <p>Family history of heart disease and diabetes.</p>
    <h2 style="color: #ff8B00;">Immunizations</h2>
    <ul>
        <li>Influenza vaccine - annually</li>
        <li>Tetanus vaccine - 10 years ago</li>
    </ul>
    <h2 style="color: #ff8B00;">Recent Tests</h2>
    <ul>
        <li>Blood pressure - 140/90 mmHg</li>
        <li>Cholesterol - LDL 130 mg/dL, HDL 50 mg/dL</li>
    </ul>
</div>
</div> -->








<div class="container-emenumber">
  <h1>Emergency Contact Information</h1>
  <div class="emergency-contacts">
      <h2 style="color: #ff8B00;">Ambulance Numbers</h2>
      <p ><strong>Local Ambulance:</strong> 112</p>
      <p><strong>National Ambulance Service:</strong> 102</p>
      <p><strong>Private Ambulance Service:</strong> 9658742232</p>

      <h2 style="color: #ff8B00;">Loved Ones' Numbers</h2>
      <p><strong>Priya Kumari (Spouse):</strong>9526359869</p>
      <p><strong>Shayamnath Kumar(Parent):</strong> 7423589562</p>
      <p><strong>Parth Kumar (Sibling):</strong> 8596598234</p>

      <h2 style="color: #ff8B00;">Different Hospital Emergency Numbers</h2>
      <p><strong>Local Hospital:</strong> 9155845682</p>
      <p><strong>Nearest Trauma Center:</strong> 9855874623</p>
      <p><strong>Children's Hospital:</strong> 7895428614</p>
  </div>
</div>












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
           <p><b>Pavani</b></p>
           <p>Kumari</p>
           <small class="text-muted">Premium</small>
       </div>
       <div class="profile-photo">
         <img src="imagedash/face-young-man-in-frame-circular-avatar-character-vector-28828812-removebg-preview.png" alt=""/>
       </div>
    </div>
</div>

  <div class="recent_updates">
     <h2>Recent Update</h2>
   <div class="updates">
      <div class="update">
         <div class="profile-photo">
            <img src="imagedash/4.jpg" alt=""/>
         </div>
        <div class="message">
           <p><b>Migraine </b>linked to increased risk of IBD in new Study </p>
        </div>
      </div>
      <div class="update">
        <div class="profile-photo">
        <img src=" imagedash/6.png" alt=""/>
        </div>
       <div class="message">
          <p><b>Chronic </b>Managing Chronic Inflammation with psoriasis</p>
       </div>
     </div>
     <div class="update">
      <div class="profile-photo">
         <img src = "imagedash/3.jpg" alt=""/>
      </div>
     <div class="message">
        <p><b>Asthama</b>Disease may be Stoppable</p>
     </div>
   </div>
  </div>
  </div>


   <div class="sales-analytics">
     <h2>Health Goal</h2>

      <div class="item onlion">
        <div class="icon">
            <span class="material-symbols-outlined">
                exercise
                </span>
        </div>
        <div class="right_text">
          <div class="info">
            <h3>Physical Fitness</h3>
            <small class="text-muted">Improving cardiovascular endurance, strength, flexibility, and overall physical fitness.</small>
          </div>
          <h5 class="danger">Goal: 18 Weeks</h5>
          <!-- <h3>3849</h3> -->
        </div>
      </div>
      <div class="item onlion">
        <div class="icon">
            <span class="material-symbols-outlined">
                skillet
                </span>
        </div>
        <div class="right_text">
          <div class="info">
            <h3>Diet</h3>
            <small class="text-muted">Maintain a balanced diet with a focus on whole foods, and reduce intake of processed foods and sugars.</small>
          </div>
          <h5 class="success">Goal:5 Week</h5>
          <!-- <h3>3849</h3> -->
        </div>
      </div>
      <div class="item onlion">
        <div class="icon">
            <span class="material-symbols-outlined">
                body_system
                </span>
        </div>
        <div class="right_text">
          <div class="info">
            <h3>Lifestyle Changes</h3>
            <small class="text-muted">Adopting healthier habits such as quitting smoking, reducing alcohol intake, or improving sleep quality.</small>
          </div>
          <h5 class="danger">Goal: 15 Weeks</h5>
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