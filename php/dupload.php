<?php
session_start();
if(!isset($_SESSION['usernamea'])){
    header("Refresh:0; url=index.php");
}
?>
<!DOCTYPE html>
<html>
<body>

<form action="supload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="text" name="path" id="path">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>