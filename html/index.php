<?php  require "connect.php";  
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Contact Form</title>
    <link rel="stylesheet" href="styles.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/addnew.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">

  </head>
  <body>
  <header>
    <img class="logo" src="../images/LOGO.jpg" alt="LOGO" width="300" height="100"> <a href="#"><button>SIGN IN</button></a>
  </header>
  <!--Navigation bar stat-->
    <nav>
      <ul class="navLinks">
        <li><a href="#" class="active">HOME         </a></li>
        <li><a href="#">CONTACT US   </a></li>
        <li><a href="#">REGISTER     </a></li>
        <li><a href="#">BOOK GALLERY </a></li>
      </ul>
    </nav>
    <div style = "background-image:url(img/3d67f51158c08e9bfde45543aa386772.jpg);">
    <div class="container">
      
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Lets keep engaged</h3>
          <p class="text">
          Welcome to our contact us page.You can share your thoughts and problems with us!
          </p>

          <div class="info">
            <div class="information">
              <img src="imgs/location.png" class="icon" alt="" />
              <p>No 24,Flower road,Colombo 07,Sri-Lanka</p>
            </div>
            <div class="information">
              <img src="imgs/email.png" class="icon" alt="" />
              <p>elibrary@gmail.com</p>
            </div>
            <div class="information">
              <img src="imgs/phone.png" class="icon" alt="" />
              <p>076-1234567</p>
            </div>
          </div>
          <div class="btn-group">
            <button class="button1"><img src="imgs/facebook.jpg" style="width:40px"></button>
            <button class="button1"><img src="imgs/instagram.jpg" style="width:40px"></button>
            <button class="button1"><img src="imgs/linkedin-in.jpg" style="width:40px"></button>
          </div>
    
          <a href = "about.php"><button class = "btn">ABOUT US</button></a></div>
        </div>

        <div class="contact-form">
          

          <form action="insert.php" method="post">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="details" />
              
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="details" />
             
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="details" />
             
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="details"></textarea>
             
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" name = "Submit" value="Send" class="btn" />
          </form>
         
        </div>
      </div>
    </div>

    <script src="app.js"></script>
    <footer>
    
    <a href="#"><button>ABOUT US</button></a>
    <!--Icons for footer-->
    <div  class="social_icon">
    <ul>
      <a href="#"> <ion-icon name="logo-facebook">  </ion-icon></a>
      <a href="#"> <ion-icon name="logo-youtube">  </ion-icon></a>
      <a href="#"> <ion-icon name="logo-twitter">   </ion-icon></a>
      <a href="#"> <ion-icon name="logo-instagram"> </ion-icon></a>
    </ul></div>
    
  </footer>
  
  <script type="module"   src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  </body>

  
</html>
