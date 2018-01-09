<!DOCTYPE html>
<html lang="en">
<head>
  <title>Evans | website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../resources/img/me.jpg">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <script src="../jquery/jquery.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../custom-css/style.css">
  <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../custom-css/w3.css">
</head>
<body id="mypage"  data-spy="scroll">

<!--create then nav with the fixed top -->
<nav class="navbar navbar-inverse navbar-fixed-top" id="nav">       
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Evans Kiptarus Kibet</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
         <li><a href="#about" class="common" ><i class="fa fa-users" aria-hidden="true"></i> About</a></li>
        <li><a href="resume.php"><i class="fa fa-briefcase" aria-hidden="true"></i> Resume</a></li>
        <li><a href="#"><i class="fa fa-question" aria-hidden="true"></i> Help</a></li>
      </ul>
    </div>
  </div>
</nav>


<br><br><br>
<div class="w3-content w3-section" id="image-slider-example" style="max-width:100%">

  <img class="mySlides w3-animate-fading" src="../resources/img/me.jpg" style="width:100%;height: 550px;">
  <img class="mySlides w3-animate-fading" src="../resources/img/2.jpg" style="width:100%;height: 550px;">
  <img class="mySlides w3-animate-fading" src="../resources/img/3.jpg" style="width:100%;height: 550px;">
  <img class="mySlides w3-animate-fading" src="../resources/img/4.jpg" style="width:100%;height: 550px;">
  <h2 class="text-img">Welcome to this platform</h2>
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 9000);    
}
</script>








<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin" id="about"><u>About me</u></h3>
  <p>Evans Kiptarus Kibet is a junior Software engineer and a network specialist with 2 years experience in both fields.
    He is specialize in front-end web application systems and the Enterprise applications development with Java. He is currently a junior system developer at <a href="https://www.mwalimuplus.com/">Elimuplus Company</a> and also a founder of the Pre-Konza technologies company</p>
    <div class="container">
  <input type="text" name="btn-search" placeholder="Search.." class="form-control"><input type="button" class="glyphicon glyphicon-search" value="Search"><br>
</div>
</div>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">    
  <h3 class="margin">Where To Find Me?</h3><br><br>
  <div class="row">
    <div class="col-sm-4">
      <h3><i class="fa fa-twitter" aria-hidden="true"></i> <strong>Twitter</strong></h3>
      <p class="text-primary">Find me in the <a href="https://twitter.com/@evansKi37295289">twitter</a></p>
      <br>
    </div>
    <div class="col-sm-4">
    <h3><i class="fa fa-facebook-official" aria-hidden="true"></i> <strong>Facebook</strong></h3> 
      <p class="text-primary">You can also follow me in the<a href="#"> facebook</a></p>
    </div>
    <div class="col-sm-4"> 
      <h3><i class="fa fa-linkedin-square" aria-hidden="true"></i> <strong>Linkedin</strong></h3>
      <p class="text-primary">Follow me also on <a href="linkedin.com/in/evans-kiptarus-860701144"> Linkedin</a></p>
    </div>
  </div>
  <br><br>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <h2>Copyright © Evans Kiptarus Kibet</h2> 
</footer>
<script type="text/javascript">
  $(".common").click(function() {
    $('html, body').animate({
        scrollTop: $("#about").offset().top
    }, 1000);
});



</script>

</body>
</html>
