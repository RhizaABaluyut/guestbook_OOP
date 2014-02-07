<?php
	require_once("config.php");
	$id = $_GET['id'];

	$is_approved = MessageDAO::view_data($id);
	if($is_approved['is_approved'] == 'N'){
		MessageDAO::approveMessage($id);
		 header("location:view_all.php");
	}else{
		MessageDAO::rejectMessage($id);
		 header("location:view_all.php");
	}
?>