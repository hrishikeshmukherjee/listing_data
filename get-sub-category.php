<?php
include "connection.php";
$cat_sl=$_REQUEST['cat_sl'];
if($cat_sl!=''){ $catSl="WHERE `category_sl`='$cat_sl'"; }else{ $catSl=''; }
?>
<select name="sub_category_sl_src" id="sub_category_sl_src" onchange="getList()">
  <option value="">All</option>
  <?php
  $getCatSub=mysqli_query($conn,"SELECT * FROM `product_sub_category` $catSl");
  while($rowCatSub=mysqli_fetch_array($getCatSub)){
    $subCatSl=$rowCatSub['sl'];
    $subCategory_name=$rowCatSub['sub_category_name'];
    ?><option value="<?php echo $subCatSl; ?>"><?php echo $subCategory_name; ?></option><?php
  }
  ?>
</select>
