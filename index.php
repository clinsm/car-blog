<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>Car News</title>
  </head>
  <body>
    <div class="navbar" align='center'>
      <div class="menu" onclick="myFunction(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
      </div>
      <div class="ph">
      </div>
      <div class="logo">
        <img src="img/logo.svg" alt="" width="40" height="40">
      </div>
      <div class="plh">
      </div>
      <div class="searchbox">
        <input type="text" class="search" name="search" value="" placeholder="search">
        <img src="img/search.svg" alt="find" width="20" height="20">
      </div>
      <div class="account">
        <img src="img/account.svg" height="30" width="30" alt="account">
      </div>
    </div>
    <div class="section1">
      <div class="welcome" align='left'>
        <div class="bigmessage">
            THE HOME OF CAR ENTHUSISASTS
        </div>
        <div class="message">
          A good guide for anyone looking for a good read
        </div>
      </div>
      <img src="img/drive.jpg" alt="image">
    </div>
    <div class="section2">
      <div class="bigrow1">
        <div class="info">
          Latest news
        </div>
        <div class="row1">

          <div class="col1">
            <div class="head">
              <img src="img/toyota.jpg" width="50" height="50" alt="head">
            </div>
            <div class="midup">
              Recent news head
            </div>
            <div class="midlow">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet
            </div>
            <div class="tail">
              <a href="#">Read</a>
            </div>
          </div>

          <div class="col1">
            <div class="head">
              <img src="img/suv.jpg" width="50" height="50" alt="head">
            </div>
            <div class="midup">
              Recent news head2
            </div>
            <div class="midlow">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet
            </div>
            <div class="tail">
              <a href="#">Read</a>
            </div>
          </div>

          <div class="col1">
            <div class="head">
              <img src="img/interior.jpg" width="50" height="50" alt="head">
            </div>
            <div class="midup">
              Recent news head3
            </div>
            <div class="midlow">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet
            </div>
            <div class="tail">
              <a href="#">Read</a>
            </div>
          </div>

          <div class="col2">
            ad space
          </div>
        </div>
      </div>
    </div>

    <script>
    function myFunction(x) {
      x.classList.toggle("change");
    }

    var myNav = document.getElementById('mynav');
window.onscroll = function () {
    "use strict";
    if (document.body.scrollTop >= 200 ) {
        myNav.classList.add("nav-colored");
        myNav.classList.remove("nav-transparent");
    }
    else {
        myNav.classList.add("nav-transparent");
        myNav.classList.remove("nav-colored");
    }
};
    </script>
  </body>
</html>
