<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<header>
<section class='logo'>
<a href="#"><img src="./images/logo" alt="logo"></a>
</section>

<div class='nav'>
<a href="index.php">Home</a>
<div class="dropdown">
  <button class="dropbtn">Membership</button>
  <div class="dropdown-content">
    <a href="#">Current Membership</a>
    <a href="joinUs.php">Join us</a>
    <a href="committee.php">Committee</a>
    <a href="certification.php">Certification</a>
    <a href="skill.php">Skill Building</a>
    <a href="gallery.php">Gallery</a>
  </div>
</div>
<a href="partners.php">Partners</a>
<a href="programs.php">Programs</a>
<a href="contact.php">Contact</a>
<a href="about.php">About Us</a>
</div>
</header>    
<body>
<section class='mainTitle'>
<h1>Contact Us</h1>
</section>

<form action="./includes/mail/send.php" id="contactForm" method="post">
            <h2 class="hidden">Contact form</h2>
                <label for="name">Name: (required)</label><br>
                
                <input type="text" required id="name" name="firstname" size="30" placeholder="Enter your First name"><br>
                <label for="name">Last name: (required)</label><br>
                
                <input type="text" required id="name" name="lastname" size="30" placeholder="Enter your last name"><br>
                <label for="email">E-mail: (will not be published)</label><br>
              <input type="email" required id="email" name="email" size="30" placeholder="Enter your Email"><br>
                
              
                <label for="comments">Comments:</label><br>
                <textarea name="comment" id="comments" required cols="50" rows="8"></textarea><br><br>
                
                <button class="submitContainer">
                    <span class="submit">Submit</span>
                    <i class="fas fa-paper-plane"></i>
                </button>
        </form>


</body>

<footer>
<section class="footerNav">
    
     <section class="Copyright"> something</section>
     <section class="socialMedia">
    <a href=""><img src="../images/facebook.svg"  width = "40px" height = "40px" alt=""></a>
    <a href=""><img src="../images/twitter.svg"  width = "40px" height = "40px" alt=""></a>
    <a href=""><img src="../images/youtube.svg"  width = "40px" height = "40px" alt=""></a>
    <a href=""><img src="../images/instagram.svg"  width = "40px" height = "40px" alt=""></a>
    
     </section>

</section>
</footer>
</html>