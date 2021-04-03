<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<header>
<section class='logo'>
<a href="#"><img src="../images/logo.svg" alt="logo" width="100" height="100"></a>
</section>

<div class='nav'>
   <nav>
      <button id="button"></button>
      <div id="burgerCon">
<a href="index.php">Home</a>
<div class="dropdown">
  <button class="dropbtn">Membership</button>
  <div class="dropdown-content">
    <a href="membership.php">Current Membership</a>
    <a href="joinUs.php">Join us</a>
    <a href="committee.php">Committee</a>
    <a href="certification.php">Certification</a>
    <a href="skill.php">Skill Building</a>
    <a href="gallery.php">Gallery</a>
  </div>
</div>
<a href="partners.php">Partners</a>
<a href="programs.php">Programs</a>
<a href="#">Contact</a>
<div class="dropdown">
  <button class="dropbtn">About us</button>
  <div class="dropdown-content">
    <a href="about_us.php">Who are we</a>
    <a href="vm.php">Vision & mission</a>
  </div>
</div>
</nav>
</div>
</header>    
<body>
<section class='mainTitle'>
<h1>Contact Us</h1>
</section>

<section class="contactArea">

<section class="addressArea">
<h2>Address</h2>
<p>lorem ipsum</p>
<h3>lrg@londonrefereesgroup.com</h3>
</section>

<form action="../includes/mail/send.php" id="contactForm" method="post">
            <h2 class="hidden">Contact form</h2>
                <label for="name"></label><br>
                
                <input type="text" required id="name" name="firstname" size="30" placeholder="First Name"><br>
                <label for="name"></label><br>
                
                <input type="text" required id="name" name="lastname" size="30" placeholder="Last Name"><br>
                <label for="email"></label><br>
              <input type="email" required id="email" name="email" size="30" placeholder="Email"><br>
                
              
                <label for="comments"></label><br>
                <textarea name="comment" id="comments" required cols="50" rows="8" placeholder="Message"></textarea><br><br>
                
                <button class="submitContainer">
                    <span class="submit">Submit</span>
                    <i class="fas fa-paper-plane"></i>
                </button>
        </form>
        </section>

</body>

<script src="../js/menu.js"></script>
<footer>
<section class="footerNav">
    
     <section class="Copyright">Copyright</section>
     <section class="socialMedia">
    <a href=""><img src="../images/facebook.svg"   width = "30px" height = "30px" alt=""></a>
    <a href="https://twitter.com/groupreferees/status/1365040086040129541?s=21"><img src="../images/twitter.svg"   width = "30px" height = "30px" alt=""></a>
    <a href=""><img src="../images/youtube.svg"   width = "30px" height = "30px" alt=""></a>
    <a href="https://instagram.com/london_referees_group?igshid=n3lnrn7rkm5g"><img src="../images/instagram.svg"  width = "30px" height = "30px" alt=""></a>
    
     </section>

</section>
</footer>
</html>
