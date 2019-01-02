<?php  
session_start();
if(!isset($_SESSION['username'])){
    header("Refresh:0; url=index.php");
}
 require 'connect.php';
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $qw=$_SESSION['username'];
      $t="SELECT crn FROM tbl_images WHERE crn='$qw'";
      $t2=mysqli_query($conn,$t);
      if(mysqli_num_rows($t2)>0)
      {
        $query = "UPDATE tbl_images SET name='$file' WHERE crn='$qw'";  
      }
      else
      $query = "INSERT INTO tbl_images(crn,name) VALUES ('$qw','$file')";  
      if(mysqli_query($conn, $query))  
      {  
header("Refresh:0; url=dashboard.php");
exit();
           echo '<script>alert("Image Inserted into Database")</script>';  
           

      }  

 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  <link rel="shortcut icon" href="https://www.gndec.ac.in/sites/default/files/acquia_marina_favicon.png" type="image/x-icon" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <title>UPLOAD</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container">  
                <h3>UPLOAD YOUR IMAGE<br><b>Note:Should Be Less Than 1 MB</b></h3>  
                <br />  
                <form method="post" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" />  
                     <br />  
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                </form>  
                <br />  
                <br />  
               
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  
