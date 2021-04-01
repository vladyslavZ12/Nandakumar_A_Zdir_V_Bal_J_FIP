


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</head>
<header>
<section class='logo'>
<a href="#"><img src="../images/logo.svg" alt="logo" width="80" height="80"></a>
</section>

<div class='nav'>
<a href="index.php">Home</a>
<div class="dropdown">
  <button class="dropbtn">Membership</button>
  <div class="dropdown-content">
    <a href="membership.php">Current Membership</a>
    <a href="joinUs.php">Join us</a>
    <a href="committee.php">Committee</a>
    <a href="certification.php">Certification</a>
    <a href="skill.php">Skill Building</a>
    <a href="#">Gallery</a>
  </div>
</div>
<a href="partners.php">Partners</a>
<a href="programs.php">Programs</a>
<a href="contact.php">Contact</a>
<div class="dropdown">
  <button class="dropbtn">About us</button>
  <div class="dropdown-content">
    <a href="about_us.php">Who are we</a>
    <a href="vm.php">Vision & mission</a>
  </div>
</div>
</div>
</header>    
<body>

<section class='mainTitle'>
<h1>Gallery</h1>
</section>
<main id="app1">
<section class="gallerySection">
 <gall-card v-for="gallery in gallPics"   @showmydata='showGallData' :gallery="gallery" :key="gallery.id" class="Images"></gall-card>

</section>
</main>


<footer>
<section class="footerNav">
     <section class="Copyright">Copyrights</section>
     <section class="socialMedia">
     <a href=""><img src="../images/facebook.svg" width = "40px" height = "40px"alt=""></a>
    <a href=""><img src="../images/twitter.svg"  width = "40px" height = "40px" alt=""></a>
    <a href=""><img src="../images/youtube.svg"  width = "40px" height = "40px" alt=""></a>
    <a href=""><img src="../images/instagram.svg"  width = "40px" height = "40px" alt=""></a>
    
     </section>

</section>
</footer>

<script src="../js/main.js" type="module"></script>
</html>



















