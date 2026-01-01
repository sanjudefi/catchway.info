<?php

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["image"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
?>
<!DOCTYPE html>
<html>
<body>

<form action="image.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="image" id="image">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
