<?php
if (isset($_POST['submit'])) {
  $file = $_FILES['file'];
  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png');
  if (in_array($fileActualExt,$allowed)) {
    if ($fileError == 0) {
      if ($fileSize < 10000000) {
        $fileNameNew = uniqid('',true).".".$fileActualExt;
        $fileDest = "U:/xampp/htdocs/uploads/" . $fileNameNew;
        move_uploaded_file($fileTmpName, $fileDest);
        header("location: ../memories.php?error=none");
      }
      else {
          header("location: ../memories.php?error=filetoobig");
      }
    }
    else {
      header("location: ../memories.php?error=wrongupload");
    }
  }
  else {
    header("location: ../memories.php?error=wrongfiletype");

  }

}
