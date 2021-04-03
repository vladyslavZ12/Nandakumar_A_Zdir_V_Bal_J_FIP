<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join us</title>
    
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
    <a href="#">Join us</a>
    <a href="committee.php">Committee</a>
    <a href="certification.php">Certification</a>
    <a href="skill.php">Skill Building</a>
    <a href="gallery.php">Gallery</a>
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
</nav>
</div>
</header>    
<body>
  
<section class='mainTitle'>
<h1>Join Us</h1>
</section>



<section class="partnersContent">
  <section class="linkRow1">
    <a href="https://www.hockeycanada.ca/en-ca/home">Hockey Canada</a>
  </section>

  <section class="linkRow2">
    <section class="linkRowInner">
      <a href="https://www.ohf.on.ca/">OHF</a>
  </section>

    
    <section class="linkRowInner">
      <a href="https://alliancehockey.com/">Alliance</a>
 </section>

    
    <section class="linkRowInner">
      <a href="https://www.omha.net/">OMHA</a>
     </section>
  </section>

  <section class="linkRow3">
    <section class="linkRowInner">
      <a href="https://www.owha.on.ca/">OWHA</a>
</section>

    
    <section class="linkRowInner">
      <a href="http://www.ohahockey.ca/">OHA</a>
 </section>

    
    <section class="linkRowInner">
      <a href="https://sportabilitybc.ca">Sledge Hockey</a>
     </section>
  </section>

</section>


<form action="form.php" method="get">
  <section class="formContainer">
<section class="formSection1">
     <label for="firstname"></label>
        <input type="text" name="firstname" placeholder="firstname">
    <label for="lastname"></label>
    <input type="lastname" name="lastname" placeholder="lastname">


    <label for="dateofbirth"></label>
    <input type="date" name="dateofbirth" placeholder="date of birth">


    <label for="email"></label>
    <input type="email" name="email" placeholder="E-mail address">
    
    <label for="phone"></label>
    <input type="tel" name="phone" placeholder="Phone number">

    
    <label for="phone"></label>
    <input type="tel" name="phone" pattern="[0-9]*" placeholder="Home phone">




    </section>

    <section class="formSection2">
     <label for="address"></label>
        <input type="text" name="homeaddress" placeholder="Home address">

<section class="formSection3">
    <label for="city"></label>
    <input type="text" name="city" placeholder="City">
  <label for="zip"></label>
    <input type="text" pattern="[0-9]{6}" placeholder="Postal Code"/>
    </section>


    <label for="hockey"></label>
    <select name="hockey" id="hockey" placeholder="Are you playing Hockey?">
    <option value="yes">Yes</option>
    <option value="no">No</option>
    </select>


    <label for="association"></label>
    <input type="text" name="association" placeholder="If yes association or division">

    
    <label for="work"></label>
    <select name="work" id="work" placeholder="Do you work?">
    <option value="yes">Yes</option>
    <option value="no">No</option>
    </select>

    <label for="reference"></label>
    <input type="text" name="reference" placeholder="Reference(optional)">

    </section>
    </section>
<section class="conditions">
        <section class="set1">
            <h2>Required Commitments</h2> 
            <p>- Must be 14yrs as of Dec 31-2021</p>
            <p>- Attend on ice evaluation - </p>
            <p>- Complete Alliance on-line Clinic</p>
            <p>- Attend all day in class clinic - Sept </p>
            <p>- Attend a minimum of 3 hrs of on ice Exhibition Training Games</p>
            <p>- Attend Monthly Membership Meetings </p>
            <p>- Be available one day every weekend to skate 2 or 3 games (Sept-March) . </p>
          
        </section>

        
        <section class="set1">
            <p>- Be prepared for Initial start up costs</p>
            <p>- Price of clinic registration and required equipment including:</p>
            <section class="set2">
            <p>- Black Helmet and Half Visor CSA</p>
            <p>- BNQ Neck Guard CSA</p>
            <p>- Authorized Ref Jersey </p>
            <p>- Acme Thunder Whistle(2)</p>
            <p>- Black Pants & Shin Tights </p>
            <p>- Protective Equipment </p>
            <p>- Elbow Pads</p>
            <p>- Shin Pads etc. </p>
            </section>
        </section>
   </section>
<section class="submitButton">
   <p>I have read and understand the information above and I acknowledge as an official of LRG assigned games I am not an employee but I provide my services on a freelance basis</p>
        
        
        <button type="submit" name="submit">Join</button>
        </section>
    </form>
</body>
<script src="../js/menu.js"></script>

<footer>
<section class="footerNav">
    
     <section class="Copyright">copyright</section>
     <section class="socialMedia">
    <a href=""><img src="../images/facebook.svg"   width = "30px" height = "30px" alt=""></a>
    <a href="https://twitter.com/groupreferees/status/1365040086040129541?s=21"><img src="../images/twitter.svg"   width = "30px" height = "30px" alt=""></a>
    <a href=""><img src="../images/youtube.svg"   width = "30px" height = "30px" alt=""></a>
    <a href="https://instagram.com/london_referees_group?igshid=n3lnrn7rkm5g"><img src="../images/instagram.svg"  width = "30px" height = "30px" alt=""></a>
    
     </section>

</section>
</footer>
</html>