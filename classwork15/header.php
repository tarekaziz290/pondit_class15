<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tarek's World</title>
  </head>
  <body>
  <header>
<div class="bg-warning py-2"> 
 <h3>Class 15 ,home work;</h3>
</div>

<nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark bg-primary">
 <div class="container">
 	 <a class="navbar-brand" href="./index.php">MY Work</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="main_nav">
	<ul class="navbar-nav ms-auto">
		<li class="nav-item"><a class="nav-link" href="./cgpaCalculate.php"> CGPA calculator </a></li>
		<li class="nav-item"><a class="nav-link" href="./categoryCreate.php"> Categorycreate</a></li>
    <li class="nav-item"><a class="nav-link" href="./categoryCreateAction.php"> Categorydata</a></li>
	</ul>
  </div> <!-- navbar-collapse.// -->
 </div> <!-- container-fluid.// -->
</nav>
</header>


























    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>
        document.addEventListener("DOMContentLoaded", function(){
  window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        document.getElementById('navbar_top').classList.add('fixed-top');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('navbar_top').classList.remove('fixed-top');
         // remove padding top from body
        document.body.style.paddingTop = '0';
      } 
  });
});
    </script>
  </body>
</html>