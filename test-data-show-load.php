<?php
include "connection.php";
$val=$_REQUEST['val'];

if($val!=''){
  $srcVal="WHERE `full_name` LIKE '%$val%'";
}
else{
  $srcVal="";
}
?>
<table border="1" style="width:800px;" align="center">
  <tr>
    <th>SL</th>
    <th>Photo</th>
    <th>Name</th>
    <th>Mobile No</th>
    <th>Email</th>
  </tr>
  <?php
  $i=0;
  $get=mysqli_query($conn,"SELECT * FROM `test_data` $srcVal");
  while($row=mysqli_fetch_array($get)){
    $i++;
    $full_name=$row['full_name'];
    $mobile_no=$row['mobile_no'];
    $email=$row['email'];
    $file_path=$row['file_path'];
    //echo "$full_name = $mobile_no = $email<br>";
    ?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><img src="<?php echo $file_path; ?>" alt="" style="width:100px;"></td>
      <td><?php echo $full_name; ?></td>
      <td><?php echo $mobile_no; ?></td>
      <td><?php echo $email; ?></td>
    </tr>
    <?php
  }
  ?>
</table>
