<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
p {
      text-align: center;
    font-size: 60px;
    margin-top: 199px;
    font-style: italic;
    color: #801616;
}
</style>
<title>The First Event of Life</title>
</head>
<body id="body">

<p id="demo"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("March 1, 2019 00:00:01").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + " Days " + hours + " Hours "
  + minutes + " Minutes " + seconds + " Seconds "+"<br>"+"Please wait and see";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "Happy Birthday Riya";
   
     var changeBG = document.getElementById("body");
     changeBG.style.cssText = "background-image: url(b1.gif)";
  }

}, 1000);

</script>

</body>
</html>