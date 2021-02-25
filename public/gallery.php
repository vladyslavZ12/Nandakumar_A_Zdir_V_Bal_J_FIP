


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
</head>
<header>
<section class='logo'>
<a href="#"><img src="./images/logo" alt="logo"></a>
</section>

<div class='nav'>
<a href="#">Home</a>
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
<a href="contact.php">Contact</a>
<a href="about.php">About Us</a>
</div>
</header>    
<body>

<section class='mainTitle'>
<h1>Gallery</h1>
</section>
<main id="app1">
    <section class="projectTitle">
    <h1 @click="clickHeader">{{ message }}</h1>
    <p>{{anotherMessage}}</p>
</section>
<section class="projectSection">
    <mini-card v-for="mini in miniCars"  data-offset = 0 @showmydata='showMiniData' :mini="mini" :key="mini.id" class="miniImages"></mini-card>
   
</section>
<section class="bio-data" :class="{'show-lightbox' : showMiniData}" class="descrip">
   <span class="close-button">X</span>
    <h2>Project: {{ currentMiniData.name }}</h2>
    <p>Description: {{ currentMiniData.description}}</p>
</section>
</main>
</body>

<footer>
<section class="footerNav">
    
     <section class="Copyright"> something</section>
     <section class="socialMedia">
    <a href=""><img src="./images/facebook" alt=""></a>
    <a href=""><img src="./images/twitter" alt=""></a>
    <a href=""><img src="./images/youtube" alt=""></a>
    <a href=""><img src="./images/instagram" alt=""></a>
    
     </section>

</section>
</footer>
</html>



















