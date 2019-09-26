<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>习题5-4</title>
</head>

<body>
<?php
$content = "北京,上海,天津,重庆,河北,山西,辽宁,吉林,黑龙江,江苏,浙江,安徽,福建,江西,山东,河南,湖北,湖南,其他";
$b = explode(",",$content);
//print_r($b);
for($index=0;$index<count($b);$index++){
	echo $b[$index];
	echo "<br>";
}
?>
</body>
</html>