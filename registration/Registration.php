<?php
  include_once "connection.php";
?>



<!DOCTYPE html>
<html>      
  <head>
     <title>Donor Page</title>
     <link rel="stylesheet" href="Registarion.CSS">

   </head>
<body class="back">
    <nav>
        <img src="images2/Images 1.png" alt="" width= "10% " height="25%"> 
        <div class="right-nav">
        <ul class="navi-links">
            <li><a class="na-link" href="../index.html">HOME</a></li>
            <li><a class="na-link" href="Registration.html">REGISTER</a></li>
            <li><a class="na-link" href="../Profile/Profile.html">PROFILE</a></li>
            <li><a class="na-link" href="../edit profile/edit.html">EDIT PROFILE</a></li>
            <li><a class="na-link" href="../dashboard/DB.html">DASHBOARD</a></li>
            <li><a class="na-link" href="../admin login/admin.html">ADMIN LOGIN</a></li>
            <li><a class="na-link" href="../login/login.html">LOGIN</a></li>
            <li><a class="na-link" href="../Alert page/alert.html">ALERT</a></li>
       </ul>        
    <input class="input" type="search" placeholder="Search Branches" />
    </nav>
 
    <!-- ================================center section====================== --> 

    <form action="signup.fun.php" method="post">
      <div class="container">
        <h1>Blood Donor Register</h1>
        <hr>
            <div class="profile-pic-div">
            <img src="images2/profile.png" width="250px" width="250px" id="photo">
                <input type="file" name="profile" id="file">
                <label for="file" id="uploadBtn">Choose Photo</label>
              </div>
              <br> 
              <script src="registration.js"></script>

    <div class="Names1">
        <label class="label" for="Name & Surname"></label>
        <input type="text" placeholder="Enter Name " name="name" id="Name" required>

     <label for="name"></label>
        <input type="text" placeholder="Enter Mobile" name="mobile" id="Mobile" required>
    
        <label for="email"></label>
        <input type="text" placeholder="Enter Email" name="email" id="email" required>

        <label for="psw"></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

        <label for="psw-repeat"></label>
        <input type="password" placeholder="Repeat Password" name="psw_repeat" id="psw-repeat" required>

     <br><br>
    <label class="label" for="Gender"></label>
    <select name="gender">
        <option value="none" selected>Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">other</option>
    </select>
    </div>
    <hr>
    
        <p>By creating an account you agree to our Terms & Privacy</p>
        <button type="submit" name="submit" class="registerbtn">Register</button>
      </div>
  
    </form>
    <div class="popup">

      <div class="fab fa-youtube icon1"></div>
   <!-- cancel button -->
      <button id="close">&times;</button>
   
       <h2> Code Media </h2>
       <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita distinctio fugiat alias iure qui,</p>
       <a href="#">Subscribe Here</a>
   </div>

<!-- ================================footer section====================== -->


<div class="footer">
  <div class="footer-items">
       <ul class="footer-list">
           <li><a class="diff-links headings" href="">WHERE TO DONATE</a></li>
           <li><a class="diff-links" href="">Donor centers</a></li>
           <li><a class="diff-links" href="">Plasma and Platelets</a></li>
           <li><a class="diff-links" href="">Convalescent Plasma Donor</a></li>
           <li><a class="diff-links"href="">Blood drives</a></li>
           <li><a class="diff-links"href="">DONORS</a></li>
           <li><a class="diff-links"href="">Who can donate?</a></li>
           <li><a class="diff-links"href="">Why donate blood</a></li>
           <li><a class="diff-links"href="">Donation process</a></li>
           <li><a class="diff-links"href="">Deferrals</a></li>
           <li><a class="diff-links"href="">Donor Partners</a></li>
           <li><a class="diff-links"href="">Brand Ambassadors</a></li>
           <li><a class="diff-links"href="">Recipient stories</a></li>
           <li><a class="diff-links"href="">FAQs</a></li>
           <li><a class="diff-links"href="">Can i save 3 lives today?</a></li>                              
       </ul>

       <ul class="footer-list">
         <li><a class="diff-links headings"href="">ABOUT US</a></li>
         <li><a class="diff-links"href="">Annual reports</a></li>
         <li><a class="diff-links" href="">Blood drives</a></li> 
         <li><a class="diff-links"href="">Blood products</a></li>
         <li><a class="diff-links"href="">Blood types</a></li>  
         <li><a class="diff-links"href="">Book a blood drive</a></li>
         <li><a class="diff-links"href="">Campaigns</a></li>
         <li><a class="diff-links"href="">Can I save 3 lives today?</a></li>
         <li><a class="diff-links"href="">Careers</a></li>
         <li><a class="diff-links"href="">Chat page</a></li>
         <li><a class="diff-links"href="">Clinical services</a></li>
         <li><a class="diff-links"href="">Compliance</a></li>
         <li><a class="diff-links"href="">Contact us</a></li>
     </ul>

     <ul class="footer-list">
         <li><a class="diff-links headings"href="">Blood types</a></li>
         <li><a class="diff-links"href="">Types of donation</a></li>
         <li><a class="diff-links"href="">SERVICES</a></li>
         <li><a class="diff-links"href="">Blood products</a></li>
         <li><a class="diff-links"href="">Clinical services</a></li>
         <li><a class="diff-links"href="">Proficiency Testing (EQA)</a></li>
         <li><a class="diff-links"href="">Product price list</a></li>
         <li><a class="diff-links"href="">Specialised services</a></li>
         <li><a class="diff-links"href="">Customer Invoice Portal</a></li>
         <li><a class="diff-links"href="">User Guide – Customer Invoice Portal</a></li>
         <li><a class="diff-links"href="">Healthcare Worker – Learning Portal</a></li>
     </ul>


 <div class="footer-sub">
    <p class="footer-sub">Subscribe to our news:</p>
    <form action=""></form>
 <input type="text" placeholder="Enter email" />
 <a href=""></a><h6>By subscribing you confirm that you have read and
     accept our Terms of Use</h6</a>
    </form>
 </div>
</div>
<div class="last-footer">
  <img src="images2/Images 1.png" alt="" width= "10% " height="10%"> 
 <p>© CGTrader 2011-2022 Terms & Conditions Privacy 🇺🇸English</p>
 <div class="social-icons">
     <a href="#"><img src="images2/Vector.png" alt="" style="width: 20px;"></a>
     <a href="#"><img src="images2/linkin.png" alt="" style="width: 20px;" ></a>
     <a href="#"><img src="images2/twitter1.png" alt="" style="width: 20px;"></a>                 
</div>
 
</div>
<div>


    
</div>

</div>

</div>


</div>
   
</footer>   
</html>   
</body>


</html>