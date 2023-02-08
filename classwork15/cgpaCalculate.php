<?php
include './header.php';





?>

<div class="container-fluid" style="width:auto">

<header class="py-4 mx-0">
	<h3>CGPA Calculator</h3> 
</header> 

<section>

<form action="" method="POST">
  <div class="mb-3">
    <label for="cnum" class="form-label">Enter a number </label>
    <input type="text"  class="form-control" id="cnum" aria-describedby="cnum" name="cnum" required="" placeholder="90">
   
  </div>
  
 <div class="d-flex justify-content-middle ">

 <button type="submit" class="btn btn-primary">Calculate</button>
 </div>

</form>
</section>


</div>
<style>
    
        h4 {
  text-align: center;
}

</style>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # code...

    $dNum =$_POST['cnum']??'';

$cNum=(float)$dNum;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
    
if ($cNum<=100 && $cNum>=90) {
    echo " <h4>CGPA IS  :A+</h4>";
}
elseif ($cNum<90 && $cNum>=85) {
    # code...
    echo " <h4>CGPA IS  :A</h4>";
}
elseif ($cNum<85 && $cNum>=80) {
    # code...
    echo " <h4>CGPA IS  :B+</h4>";
}
elseif ($cNum<80 && $cNum>=75) {
    # code...
    echo " <h4>CGPA IS  :B</h4>";
}
elseif ($cNum<75 && $cNum>=70) {
    # code...
    echo " <h4>CGPA IS  :C+</h4>";
}
elseif ($cNum<70 && $cNum>=65) {
    # code...
    echo " <h4>CGPA IS  :C</h4>";
}
elseif ($cNum<65 && $cNum>=60) {
    # code...
    echo " <h4>CGPA IS  : D+</h4>";
}
elseif ($cNum<60 && $cNum>=50) {
    # code...
    echo " <h4>CGPA IS  : D</h4>";
}
elseif ($cNum<50 && $cNum>=0) {
    # code...
    echo " <h4>Fail</h4>";
}
elseif ($cNum<0 && $cNum>100) {
    # code...
    echo " <h4>Enter wrong Number<br>Please try Again</h4>";
}
else{
    echo " <h4>Enter wrong Number<br>Please try Again</h4>";
}




}





?>