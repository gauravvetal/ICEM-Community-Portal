<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">
    <meta name="apple-mobile-web-app-title" content="CodePen">

    <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">

    <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">

    <style media="screen">
*{
  box-sizing: border-box;
}      
    body{
  padding: 0;
  margin: 0;
  display: flex;
  flex-flow: wrap;
  justify-content: space-around;
  font-family: 'Poppins',sans-serif;
  list-style: none;
  text-decoration: none;
  background-image: url(ICEM.jpg);
  background-repeat:no-repeat;
  background-size:100% 125%;
 

}
nav{

  background-color: #ffff;
  height: 70px;
  justify-content: space-between;
  align-items: center;
  font-size: 16px;
  box-shadow: 10px 10px 5px grey;
  width: 100%;

}
img{
margin: 5px;

}
.nimg{
padding: 20px;
line-height: 20px;

}
nav ul{
  float: right;
  margin-right: 20px;
}
nav ul li{
  align-items: center;
  display: inline-block;
  margin: 0 5px;
  line-height: 40px;
   opacity: 5;

}
nav ul li a{

  color: #52ab98;
  border-radius: 7px;
  padding: 10px 10px;
  text-decoration: none;
}
body * {
  box-sizing: border-box;
}
.h1:hover{
  background:#52ab98;
  transition: 0.5s;
  color: #fff;
  padding: 18px;
  font-size:18px;
}
.card-container {
  flex: 300px;
  margin: 50px;
  position: relative;
  /* top: 100px;
  right: 200px; */
}
.card-container .card {
  font-weight: bold;
  position: relative;
  width: 100%;
}
.card-container .card a {
  padding: 30px;
  width: 100%;
  height: 400px;
  border: 2px solid black;
  background: white;
  background-image: url(icem_logo.jpeg);
  background-repeat: no-repeat;
  background-size:80px;
  text-decoration: none;
  color: black;
  display: block;
  transition: 0.25s ease;
}
.card-container .card a:hover {
  transform: translate(-30px, -30px);
  border-color: #5bc0eb;
}
.card-container .card a:hover .card--display {
  display: none;
}
.card-container .card a:hover .card--hover {
  display: block;
  
}
.card-container .card a .card--display i {
  font-size: 60px;
  margin-top: 200px;
}
.card-container .card a .card--display h2 {
  margin: 20px 0 0;
}
.card-container .card a .card--hover {
  display: none;
  
}
.card-container .card a .card--hover h2 {
  margin: 55px 05px;
  font-style: italic;
  
}
.card-container .card a .card--hover p {
  font-weight: normal;
  line-height: 1.5;
  
}
.card-container .card a .card--hover p.link {
  margin: 20px 0 0;
  font-weight: bold;
  color: #5bc0eb;
  
}
.card-container .card .card--border {
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  border: 2px dashed black;
  z-index: -1;
}
.card-container .card.card--dark a {
  color: white;
  background-color: black;
  border-color: black;
}
.card-container .card.card--dark a .card--hover .link {
  color: #fde74c;
}

    </style>

    <title>Home</title>
    <script>
    window.console = window.console || function(t) {};
  </script>

  <script>
    if (document.location.search.match(/type=embed/gi)) {
      window.parent.postMessage("resize", "*");
    }
  </script>
</head>
<body>
    <nav>
        <a href="#" class="nimg"><img src="iimp-logo.png" width="380"> </a>
       <ul>
        <li><a href="" class="h1">Home</a></li>
        <li><a href="logout.php" class="h1">Logout</a></li>

       </ul>
    </nav>
    <div class="card-container">
    <div class="card"><a href="home.php?id=1">
        <div class="card--display"><i class="material-icons">hot_tub</i>
          <h2>Sports Club</h2>
        </div>
        <div class="card--hover">
          <h2>Sports Club</h2>
          <p>A student organization recognized by the Physical Education and Athletic Department. Formed by individuals with common interests to participate in a sport activity. Governed by same rules and regulations as all student organizations.</p>
        </div></a>
      <div class="card--border"></div>
    </div>
  </div>
  <div class="card-container">
    <div class="card"><a href="home.php?id=2">
        <div class="card--display"><i class="material-icons">public</i>
          <h2>Cultural Club</h2>
        </div>
        <div class="card--hover">
          <h2>Cultural Club</h2>
          <p>An entire gamut of activities is organized by Swayam to unleash the talent that exudes from the budding student managers. The Annual Cultural Festival of NDIM, Spandan where the artists of national repute are invited to present a musical festival, which is enjoyed by the guests, students, faculty, staff and the jam-packed audience.</p>
        </div></a>
        <div class="card--border"></div>
</div>
</body>
</html>
