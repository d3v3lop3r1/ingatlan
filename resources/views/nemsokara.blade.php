<!doctype html>
<html>
<head>
<link rel="icon" href="images/logos/ingatlanfox_favicon.png" type="image/x-icon"/>
<link rel="shortcut icon" href="/images/logos/ingatlanfox_favicon.png" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="./css/coming_soon.css">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<meta charset="utf-8">
<title>INGATLANFOX Foxinfo Service group</title>
</head>

<body>
<div class="bgimg">
  <div class="topleft">
    <p>INGATLANFOX Foxinfo Service group</p>
  </div>
  <div class="middle">
  	<img src="/images/logos/ingatlanfox-logo.png" width="250" height="72" alt="Ingatlanfox LOGO">
    <h1>NEMSOKÁRA JÖVÜNK....</h1>
    <p>addig is <a href="https://foxinfo.hu">FOXINFO oldal</a>
    <hr>
    <div id="demo"></div> 
  </div>
  <div class="bottomleft">
    <p>Gyere nézz vissza később</p>
  </div>
</div>
<script>
// Set the date we're counting down to
var countDownDate = new Date("jan 06, 2020 20:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "nap " + hours + "óra "
  + minutes + "perc " + seconds + "másodperc ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "LEJÁRT";
  }
}, 1000);
</script>
</body>
</html>