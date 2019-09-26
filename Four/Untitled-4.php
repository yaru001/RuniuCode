<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>图片上传</title>
</head>

<body>
<center>
<label>请选择要上传的图片（格式为.jpg）：</label>
<form method="post" action="Untitled-4.php" enctype="multipart/form-data">
    <input type="hidden" name="action" value="upload" />
    <input type="file" name="u_file" />
    <input type="submit" value="上传" />
</form>
<?php
    if(isset($_POST['action'])&&$_POST['action']=="upload"){
	    $file_path="./uploads\\";
		$picture_name=$_FILES['u_file']['name'];
		$picture_name=strstr($picture_name,".");
		if($picture_name!=".jpg"){
			echo "<script>alert('上传格式不正确');window.location.href='Untitled-4.php';</script>";
		}else if($_FILES['u_file']['tmp_name']){
			move_uploaded_file($_FILES['u_file']['tmp_name'],$file_path.$_FILES['u_file']['name']);
			echo "图片上传成功";
		}else{
			echo"图片上传失败";
		}
			
	}
		
?> 
</center>
</body>
</html>