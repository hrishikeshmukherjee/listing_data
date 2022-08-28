<?php
include "connection.php";

function getData($tableName,$category_sl,$return_value){
  global $conn;
  $getCategory=mysqli_query($conn,"SELECT * FROM `$tableName` WHERE `sl`='$category_sl'");
  while($rowCategory=mysqli_fetch_array($getCategory)){
    $categoryName=$rowCategory[$return_value];
  }
  return $categoryName;
}


$cat_sl=$_REQUEST['cat_sl'];
$sub_cat_sl=$_REQUEST['sub_cat_sl'];
$product_src=$_REQUEST['product_src'];


if($cat_sl!='')
{
  $catSl="AND `category_sl`='$cat_sl'";
}else{
  $catSl='';
}

if($sub_cat_sl!='')
{
  $subCatSl="AND `sub_category_sl`='$sub_cat_sl'";
}
else
{
  $subCatSl='';
}

if($product_src!=''){
  $productSrc="AND `product_name` LIKE '%$product_src%'";
}
else {
  $productSrc='';
}
?>
<table border="1" style="width:1000px;" align="center">
  <tr>
    <th>SL</th>
    <th>Category</th>
    <th>Sub Category</th>
    <th>Product Name</th>
  </tr>
  <?php
  $count=0;
  //echo "SELECT * FROM `product` WHERE `sl`>0 $catSl $subCatSl";
  $getProduct=mysqli_query($conn,"SELECT * FROM `product` WHERE `sl`>0 $catSl $subCatSl $productSrc ORDER BY `product_name`");
  while($rowProduct=mysqli_fetch_array($getProduct)){
    $count++;
    $category_sl=$rowProduct['category_sl'];
    $sub_category_sl=$rowProduct['sub_category_sl'];
    $product_name=$rowProduct['product_name'];
    $categoryName = $subCategoryName='';
    $getSubCategory=mysqli_query($conn,"SELECT * FROM `product_sub_category` WHERE `sl`='$sub_category_sl'");
    while($rowSubCategory=mysqli_fetch_array($getSubCategory)){
      $subCategoryName=$rowSubCategory['sub_category_name'];
    }
    ?>
    <tr>
      <td><?php echo $count; ?></td>
      <td><?php echo getData('product_category',$category_sl,'category_name'); ?></td>
      <td><?php echo getData('product_sub_category',$sub_category_sl,'sub_category_name'); ?></td>
      <td><?php echo $product_name; ?></td>
    </tr>
    <?php
  }
  ?>
</table>
