<?php
include_once 'sidebar_menu.php'
 ?>
<div class="main_content">
  <div class="main_header">
    <h1 style="text-align:center;"><u>Travel with us!</u></h1>
  </div>
  <div>
    <?php
      $dirname = "U:/xampp/htdocs/uploads/";
      $images = glob($dirname."*.jpg");
      foreach($images as $image) {
        echo $image;
       echo '<img src="' . $image .'" /><br />';
        }
    ?>
  </div>
  <form action="includes/upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name="submit">Upload</button>
  </form>
</div>
 <?php
 include_once 'footer.php'
  ?>
