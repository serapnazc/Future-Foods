<?php
include('./includes-website/html_header.php');
/*   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

      $extensions= array("pdf","png");
	$myfile = mkdir("uploads/tcebst");
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }

      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }

      if(empty($errors)==true){

         move_uploaded_file($file_tmp,"uploads/test/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }*/
?>
<html>
   <body>

      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />ggg
         <input type="submit"/>
      </form>
			<?php

			$string = "UC-86QW'x'B0FS.pdf";
			$file = CleanVariable(preg_replace('/[^A-Za-z0-9.]/', '-', $string));
			echo $file;

			 ?>

   </body>
</html>
