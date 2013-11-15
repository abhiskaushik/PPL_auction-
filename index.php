<!DOCTYPE html>
<html>
<head>
<title>Ajax Demo</title>
<link rel="stylesheet" src="bootstrap/css/bootstrap.css" type="text/css">
</head>
<body onload="time()">
<nav class="navbar-wrapper navbar-default navbar-fixed-top" role="navigation" style="background:grey;height:7%;">
 <div class="container">
          <div class="navbar-header">
           <h1 align="center">Welcome To Online Auction of Pragyan Premier League</h1>
          </div>
        </div>
</nav>
<div id="timer" style="position:absolute;left:40%;top:40%;height:7%;width:15%;background:grey;font-family:cursive;font-size:20px;text-align:center;font-weight:bold">00:00</div> 
<div id="player_pic" style="position:absolute;left:40%;top:47%;height:27%;width:15%;background:black"></div>
<input type="text" placeholder="Enter Your Bid" style="position:absolute;left:40%;top:74%;height:5%;width:14.8%;background:rgb(34,65,64);font-family:cursive;font-size:20px;text-align:center;font-weight:bold" > 

<script>
function time() {
	var currentTime = new Date();
	//var x = "AM";
	//var h = currentTime.getHours();
	//var m = currentTime.getMinutes();
    var s = currentTime.getSeconds();
	
    /*if (h == 0) {
		h = 12;
	} else if (h > 12) { 
		h = h - 12;
		x="PM";
	}
	if (h < 10) {
		h = "0" + h;
	}
	if (m < 10) {
		m = "0" + m;
	} */
	if (s < 10) {
		s = "0" + s;
	} 
    var myClock = document.getElementById('timer');
	myClock.innerHTML = s
	setTimeout(time,1000);
}

</script>