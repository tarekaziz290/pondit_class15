<?php
include './header.php';



?>
<div class="container-fluid" style="width:auto">

<header class="py-4 mx-0">
	<h2>Category create</h2> 
</header> 

<section>
<form action="./categoryCreateAction.php" method="POST">
  <div class="mb-3">
    <label for="cname" class="form-label">Category Name</label>
    <input type="text" class="form-control" id="cname" aria-describedby="cname" name="cname" required="">
   
  </div>
  <div class="mb-3">
    <label for="cdetails" class="form-label">Category Details</label>
    <input type="text" class="form-control" id="cdetails" aria-describedby="cdetails" name="cdetails" required="">
   
  </div>
  <div class="mb-3">
    <label for="cname" class="form-label">Approved By</label>
    <input type="text" class="form-control" id="capp" aria-describedby="capp" name="capp" required="">
   
  </div>
 <div class="d-flex justify-content-end ">

 <button type="submit" class="btn btn-primary">Submit</button>
 </div>

</form>
</section>


</div>



