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
<a href="#"><img src="./images/logo" alt="logo"></a>
</section>

<div class='nav'>
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
<a href="about.php">About Us</a>
</div>
</header>    
<body>
  
<section class='mainTitle'>
<h1>Join Us</h1>
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

<footer>
<section class="footerNav">
     <section class="Copyright">Copyrights</section>
     <section class="socialMedia">
    <a href=""><img src="./images/facebook" alt="fb"></a>
    <a href=""><img src="./images/twitter" alt="twitter"></a>
    <a href=""><img src="./images/youtube" alt="yt"></a>
    <a href=""><img src="./images/instagram" alt="insta"></a>
    
     </section>

</section>
</footer>
</html>