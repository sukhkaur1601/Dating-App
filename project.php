<!DOCTYPE html>
<html>
<title>Dream Date</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/project.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("images/maincover.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style> 
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide"><marquee style="color:white;margin-top:20px;font-size:40px;">WELCOME TO DREAM DATE</marquee></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="upload_image.php" class="w3-bar-item w3-button">ABOUT</a>
      <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
      <a href="#profiles" class="w3-bar-item w3-button"><i class="fa fa-desktop"></i> PROFILES</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <a href="#profiles" onclick="w3_close()" class="w3-bar-item w3-button">PROFILES</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">For me you are perfect</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Perfect Match</span><br>
    <span class="w3-large">Stop wasting valuable time to wait for your partner.</span>
    <p><a href="#profiles" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Search here and just choose someone</a></p>
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">ABOUT THE DREAMDATE</h3>
  <p class="w3-center w3-large">Key features of our website</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">PERFECT MATCH</p>
      <p>You can find your perfect match by just one click ,because we provide you profiles of people having the same interests as you have.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">ALL GENDERS</p>
      <p>As we make this website for all the genders while they are looking partner of same gender or opposite gender.All are welcomed here.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Design</p>
      <p>As you can see, we design our website in such a way that it looks attractive and also easy to use.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Support</p>
      <p>we support all genders and all their personal interests ,so accordingly,we provide them their perfect match</p>
    </div>
  </div>
</div>



<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="team">
  <h3 class="w3-center">THE TEAM</h3>
  <p class="w3-center w3-large">The ones who runs this website</p>
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/sharan.jpg" alt="Sharan" style="width:100%">
        <div class="w3-container">
          <h3>Sharanpreet Kaur</h3>
          <p class="w3-opacity">Web Designer</p>
          <!-- <p></p> -->
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/gursharan.jpg" alt="gursharan" style="width:100%">
        <div class="w3-container">
          <h3>Gursharan Kaur</h3>
          <p class="w3-opacity">Web Designer</p>
          <!-- <p></p> -->
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/sukh.jpg" alt="sukh" style="width:100%">
        <div class="w3-container">
          <h3>Sukhwinder Kaur</h3>
          <p class="w3-opacity">Web Designer</p>
          <!-- <p></p> -->
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/jaydhish.jpg" alt="jaydhish" style="width:100%">
        <div class="w3-container">
          <h3>Jaydhish Patel</h3>
          <p class="w3-opacity">Web Designer</p>
          <!-- <p></p> -->
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
  <div class="w3-quarter">
  <i class="fa fa-heartbeat w3-margin-bottom w3-jumbo"></i>
  <br> Search Your Match
  </div>
  <div class="w3-quarter">
  <i class="fa fa-thumbs-up w3-margin-bottom w3-jumbo"></i> 
    <br>Like them
  </div>
  <div class="w3-quarter">
  <i class="fa fa-mobile w3-margin-bottom w3-jumbo"></i> 
    <br>Contact with them
  </div>
  <div class="w3-quarter">
  <i class="fa fa-meetup w3-margin-bottom w3-jumbo"></i>
    <br>Meet them
  </div>
</div>



<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Skills Section -->
<div class="w3-container w3-light-grey w3-padding-64">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Look For</h3>
      <p><q>One day you shall meet your perfect match, someone you can love, someone you can look upto, someone you can adore, someone who is just perfect for you. Do not let that special person exit your life, tell them how special they are and how much you love them. Everyone deserves to be with the person they want to be with.”</q></p>
    </div>
    <div class="w3-col m6">
      <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Profiles</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-search w3-margin-right"></i>Search for match</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-heart w3-margin-right"></i> Common Interests</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:75%">75%</div>
      </div>
    </div>
  </div>
</div>

<!-- Profile Section -->
<div class="w3-container w3-center w3-dark-grey" style="padding:128px 16px" id="profiles">
  <h3>PROFILES</h3>
  <p class="w3-large">Choose a person according to the your interests</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">GENDER</li>
        <li class="w3-padding-16"><b>MALE</b></li>
        <li class="w3-padding-16"><b>FEMALE</b></li>
        <li class="w3-padding-16"><b>OTHERS</b></li>
        <li class="w3-light-grey w3-padding-24">
        <form action="register.php"> 
          <button class="w3-button w3-black w3-padding-large" type="submit"><a href="register.php">Sign Up</a></button>
        </form>
        <form action="log.php'>
          <button class="w3-button w3-black w3-padding-large" type="submit"><a href="log.php">if you are already registered? Log In</a></button>
        </form>
        </li>
      </ul>
    </div>
    <div class="w3-third">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-red w3-xlarge w3-padding-48">Age</li>
        <li class="w3-padding-16"><b>15-25</b></li>
        <li class="w3-padding-16"><b>26-35</b></li>
        <li class="w3-padding-16"><b>36-55</b> </li>
        <li class="w3-light-grey w3-padding-24">
          <form action="register.php"> 
          <button class="w3-button w3-black w3-padding-large" type="submit"><a href="register.php">Sign Up</a></button>
          </form>
          <form action="log.php'>
          <button class="w3-button w3-black w3-padding-large" type="submit"><a href="log.php">if you are already registered? Log In</a></button>
          </form>
        </li>
      </ul>
    </div>
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Nationality</li>
        <li class="w3-padding-16"><b>Indian</b></li>
        <li class="w3-padding-16"><b>American</b></li>
        <li class="w3-padding-16"><b>African</b></li>
        <li class="w3-padding-16"><b>Canadian</b></li>
        <li class="w3-light-grey w3-padding-24">
          <form action="register.php"> 
          <button class="w3-button w3-black w3-padding-large"><a href="register.php">Sign Up</a></button>
          </form>
          <form action="log.php'>
          <button class="w3-button w3-black w3-padding-large" type="submit"><a href="log.php">if you are already registered? Log In</a></button>
          </form>
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Montreal, CANADA</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +00 151515</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: mail@mail.com</p>
    <br>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-black" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
    
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="#" title="W3.CSS" target="_blank" class="w3-hover-text-green">dreamdate</a></p>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>
