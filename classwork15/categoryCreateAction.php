<?php
include './header.php';

// echo "<pre>";
// print_r($_POST);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # code...

    $cName =$_POST['cname']??'';
$cDetails =$_POST['cdetails']??'';
$cApp =$_POST['capp']??'';

$a=1;
}




// echo $cName ,$cApp ,$cDetails;

?>


<table class="table table-striped">
<thead>
    <tr>
      <th >#</th>
      <th >Category Name</th>
      <th >Category Details</th>
      <th >Approved BY</th>
    </tr>
  </thead>

  <tbody>
    <tr>
    <td><?php echo $a??' '; ?></td>
<td> <?php echo $cName??'';  ?> </td>
<td> <?php echo $cDetails??'';  ?> </td>
<td> <?php echo $cApp??'';  ?> </td>
    </tr>
   

  </tbody>
</table>