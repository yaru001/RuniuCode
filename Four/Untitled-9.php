<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
$a = "白领女子公寓，温馨街南行200米，交通便利，亲情化专人管理，您的理想选择！";
$content = $_POST['content'];
echo str_ireplace($content,"<font color='#FF0000'><strong>".$content."</strong></font>",$a);
?>
</body>
</html>