<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ibrahim Page Auto Reload</title>

<script>

function slideshow()
{
	var stime=3000; // 3 sec
	var mypage = <?Php echo isset($_REQUEST['page'])? $_REQUEST['page']: '1'; ?>;
	mypage = mypage + 1;
	if(mypage > 5 ) mypage = 1;
	setTimeout('window.location.href="?page=' + mypage + '";',stime);
	
}

</script>
</head>

<body>
<script>slideshow();</script>
<?php
 echo "This is Page: " . $_REQUEST['page'];
?>
</body>
</html>