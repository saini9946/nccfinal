<?php  
session_start();
error_reporting(0);
if(!isset($_SESSION['usernamea'])){
    header("Refresh:0; url=index.php");
}
 require 'connect.php';
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
   $ex=strtolower(end(explode('.',$_FILES['image']['name'])));
   
      $qw=mysqli_real_escape_string($conn,$_POST['name']);
      if($ex=='jpeg'||$ex=='png'||$ex=='gif'||$ex=='jpg')
       $ex1='image/'.$ex;
        else
           $ex1='application/'.$ex;
            $query = "INSERT INTO files(name,type,file) VALUES ('$qw','$ex1','$file')";  
            if(mysqli_query($conn,$query))
               {
                   header("Refresh:0; url=../download.php");
               }
       else
        echo 'error';

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
                <h3>UPLOAD YOUR File</h3>  
                <br />  
                <form method="post" enctype="multipart/form-data"> 
                     <input type="text" placeholder="Enter Name" name="name"><br/> 
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
                alert("Please Select File");  
                return false;  
           }  
           
      });  
 });  
 </script>  
