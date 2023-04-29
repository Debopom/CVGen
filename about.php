<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <div > <?php
include("header.php"); 
?>
 </div>
</head>
<style> 
body {
    height: 100%;
    min-height: 100vh;
    width: 100%;
    
    margin: 0;
    padding: 0;
    background: linear-gradient(160deg, #82E0AA 500px, #fff 0);
    background-repeat: no-repeat;
}
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 22.3%;
  margin-bottom: 16px;
  padding: 0 8px;
   margin:auto;
  padding-bottom: 50px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
  background-color: white;
}

.about-section {
  padding: 50px;

  text-align: center;
  background-color: #00ccfffe;
  color: black;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  width: 60%;
  margin: auto;
}


.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

#teamdetails{

  padding-left: 8%;
}

#aboutcvgen{

}
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us</h1>
  <p id="aboutcvgen">CVGen is a website where people can create their curriculum vitae (CV) for free. Users can fill out the form with their information, choose a template, and obtain a PDF of their curriculum vitae. It is user friendly and completely free to use.</p>

</div>
<div >
<h2 style="text-align:center">Developers</h2>

<div id="teamdetails">
  <div class="row">
  <div class="column">
    <div class="card">
      <img src="image\1.jpg" alt="Shawpnil" style="width:100%">
      <div class="container">
        <h2>Kazi Shawpnil</h2>
        <p class="title">Student</p>

        <p>Email: kshawpnil201125@bscse.uiu.ac.bd</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="image\debo cropped.jpg" alt="Debopom" style="width:100%">
      <div class="container">
        <h2>Debopom Sutradhar</h2>
        <p class="title">Student</p>

        <p>Email: dsutradhar201046@bscse.uiu.ac.bd</p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="image\sami.jpg" alt="Sami" style="width:100%">
      <div class="container">
        <h2>Sami Nayeem</h2>
        <p class="title">Student</p>

        <p>Email: snayeem193020@bscse.uiu.ac.bd</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="image\zeba.jpg" alt="Zeba" style="width:100%">
      <div class="container">
        <h2>Musarrat Zeba</h2>
        <p class="title">Student</p>

        <p>Email: mzeba201090@bscse.uiu.ac.bd</p>
      </div>
     </div>
    </div>
  </div>
</div>
</div>
<div > <?php
include("footer_about.php"); 
?>
 </div>
</body>

</html>