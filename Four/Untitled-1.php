<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>字符串替换</title>
</head>

<body>
<?php
$a = "你好，我是黄克豫，我喜欢茹妞！";
$b = "喜欢";
echo str_ireplace($b,"<font color='#FF0000'>".$b."</font>",$a);
?>
</body>
</html>