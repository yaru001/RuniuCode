<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
if((strlen($_POST['IDcard'])<>15)&&(strlen($_POST['IDcard'])<>18)){						 //检测用户身份证号的长度是否正确
	echo "<script>alert('用户身份证号标准长度为15位或18位!'); history.back();</script>";
}
else{
	echo "用户信息输入合法！";
}
?>

</body>
</html>