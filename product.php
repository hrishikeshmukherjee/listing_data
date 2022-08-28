<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Product</title>
  </head>
  <body>

    <table border="0" style="width:1000px;" align="center">
      <tr>
        <td>
          <label>Category</label>
          <select name="category_sl_src" id="category_sl_src" onchange="getSubCategory(this.value),getList()">
            <option value="">All</option>
            <?php
            $getCat=mysqli_query($conn,"SELECT * FROM `product_category`");
            while($rowCat=mysqli_fetch_array($getCat)){
              $catSl=$rowCat['sl'];
              $category_name=$rowCat['category_name'];
              ?><option value="<?php echo $catSl; ?>"><?php echo $category_name; ?></option><?php
            }
            ?>
          </select>
        </td>
        <td>
          <label>Sub Category</label>
          <div id="divSubCategory">
            <select name="sub_category_sl_src" id="sub_category_sl_src">
              <option value="">All</option>
            </select>
          </div>
        </td>
        <td>
          <label>Product</label>
          <input type="text" name="product_src" id="product_src" value="" onkeyup="getList()">
        </td>
      </tr>
    </table>
    <br>
    <div id="divList"></div>
    <script src="jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){ getList(); });
      function getSubCategory(cat_sl){
        $("#divSubCategory").load("get-sub-category.php?cat_sl="+cat_sl);
      }
      function getList(){
        var cat_sl=document.getElementById('category_sl_src').value;
        var sub_cat_sl=document.getElementById('sub_category_sl_src').value;
        var product_src=document.getElementById('product_src').value;
        $("#divList").load("product-list-load.php?cat_sl="+cat_sl+"&sub_cat_sl="+sub_cat_sl+"&product_src="+product_src);
      }
    </script>
  </body>
</html>
