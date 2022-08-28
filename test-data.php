<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add Test Data</title>
  </head>
  <body>
    <form action="test-data-submit.php" method="post" enctype="multipart/form-data">
      <h3>Name:</h3>
      <input type="text" name="full_name" value="">
      <h3>Mobile No.</h3>
      <input type="number" name="mobile_no" value="">
      <h3>Email</h3>
      <input type="email" name="email_id" value="">
      <h3>Photo Copy</h3>
      <input type="file" name="file_name" value="">
      <h3>Multiple File</h3>
      <input type="file" name="multiple_file_name[]" value="" multiple>
      <div>
      <br><input type="submit" value="SAVE">
      </div>
    </form>
  </body>
</html>
