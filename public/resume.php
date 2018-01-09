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
        <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
         <li><a href="#about" class="common" ><i class="fa fa-users" aria-hidden="true"></i> About</a></li>
        <li class="active"><a href="#"><i class="fa fa-briefcase" aria-hidden="true"></i> Resume</a></li>
        <li><a href="#"><i class="fa fa-question" aria-hidden="true"></i> Help</a></li>
      </ul>
    </div>
  </div>
</nav>

<!--create the container for holding the resume and body-->
<br><br>
<h4 class="container"><button class="btn btn-primary disabled">Home</button>/<button class="btn btn-primary">Projects<span class="badge">4</span></button></h4>
<fieldset class="container">
  <div class="container text-primary">   
  <table class="table table-hover table-condensed table-striped">
    <thead>
      <tr>
        <th>Project ID</th>
        <th>Project name</th>
        <th>Project Description</th>
        <th>Link to portfolio</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1211</td>
        <td>File Encryption</td>
        <td>This is a simple project done using java</td>
        <td><button class="btn btn-info">Check</button></td>
        <td>Completed</td>
      </tr>

        <tr>
        <td>1212</td>
        <td>My Blog</td>
        <td>This is the blog site developed using php and mysql.</td>
        <td><button class="btn btn-info">Check</button></td>
        <td>Pending</td>
      </tr>

        <tr>
        <td>1213</td>
        <td>Hospital Management System</td>
        <td>It is a desktop app for managing the hospital operations on the daily basis.</td>
        <td><button class="btn btn-info">Check</button></td>
        <td>Completed</td>
      </tr>

        <tr>
        <td>1214</td>
        <td>Duplicate files deletion</td>
        <td>It is a project for deleting the duplicated files within the computer.</td>
        <td><button class="btn btn-info">Check</button></td>
        <td>Not started</td>
      </tr>
    </tbody>
  </table>
</div>

  
</fieldset>
<br><br>


<!-- Third Container (Grid) -->
<fieldset class="container">
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

</fieldset>
</body>
</html>
