<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
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
      <img src="img/drive.jpg" alt="image">
      <div class="welcome">
        <div class="bigmessage">
            THE HOME OF CAR ENTHUSISASTS
        </div>
        <div class="message">
          A good guide for anyone looking for a good read
        </div>
      </div>
    </div>

    <script>
    function myFunction(x) {
      x.classList.toggle("change");
    }
    </script>
  </body>
</html>
