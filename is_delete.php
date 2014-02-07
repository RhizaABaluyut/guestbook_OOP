<?php
	require_once("config.php");
	$id = $_GET['id'];
	$del = new MessageDAO();
	MessageDAO::deleteMessage($id);
	echo "<script>alert('Successfully Deleted!!');window.location.href='view_all.php'</script>";
?>