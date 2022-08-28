<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Show Test Data</title>
  </head>
  <body>
    <input type="text" name="srcValue" value="" onkeyup="getList(this.value)">
    <div id="divList"></div>
    <script src="jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){ getList(''); });
    function getList(val){
      $("#divList").load("test-data-show-load.php?val="+val);
      //document.location="test-data-show-load.php?val="+val;
    }
    </script>
  </body>
</html>
