<?php
include "connection.php";
$full_name_xyz=$_POST['full_name'];
$mobile_no_xyz=$_POST['mobile_no'];
$email_xyz=$_POST['email_id'];
if($full_name_xyz==''){
  echo "Please enter name";
}
elseif($mobile_no_xyz==''){
  echo "Please enter mobile no";
}
elseif($email_xyz==''){
  echo "Please enter email";
}
else{
  $getChk=mysqli_query($conn,"SELECT * FROM `test_data` WHERE `mobile_no`='$mobile_no_xyz'");
  $getCount=mysqli_num_rows($getChk);
  if($getCount>0){
    echo "Data already exist";
  }
  else{
    $target_file=basename($_FILES["file_name"]["name"]);
    move_uploaded_file($_FILES["file_name"]["tmp_name"],$target_file);
    $randName=rand(10000,99999);
    $inputFileName='multiple_file_name';
    $folderPath='multiple_file/'.$randName.'/';
    if(!file_exists($folderPath)){ mkdir($folderPath, 0777, true); }
    $totalFile=count($_FILES[$inputFileName]['name']);
    for($i=0; $i<$totalFile; $i++ ){
      $tmpFilePath=$_FILES[$inputFileName]['tmp_name'][$i];
      $fileNameWithPath=$_FILES[$inputFileName]['name'][$i];
      $newFilePath=$folderPath.$fileNameWithPath;
      move_uploaded_file($tmpFilePath,$newFilePath);
    }
    date_default_timezone_set('Asia/Kolkata');
    $date_time=date('Y-m-d H:i:s A');
    mysqli_query($conn,"INSERT INTO `test_data`(`full_name`, `mobile_no`, `email`, `file_path`, `multiple_file_path`, `date_time`) VALUES('$full_name_xyz', '$mobile_no_xyz', '$email_xyz', '$target_file', '$folderPath', '$date_time')");
    echo "Data submited successfully";
  }
}
?>
