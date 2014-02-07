<?php
	/**
	 * Filename: config.php
	 * Message class for the Guestbook
	 */
	require_once("Message.php");
	require_once("MessageDAO.php");

	mysql_connect("localhost","root") && mysql_select_db("excercise");
	session_start();
?>