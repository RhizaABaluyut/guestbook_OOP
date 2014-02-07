<?php
require_once("config.php");
$lists = MessageDAO::view_approved();

?>
<html>
<head>
	<title>Messages</title>
	<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.css" >
</head>
<div class="navbar">
        <div class="navbar-inner">
          <div class="container" style = "background-color: seashell;">
            <h1><a href="index.php" class="brand text-success" style = "font-family: georgia;
font-size: 35;
color: yellowgreen;">Laverdad Guests</a></h1>
          </div>
        </div>
        <div class = "container well" style = "background:none">
			<body>
				
				<div class = "container">
					<div class="span6 offset3 well" style = "margin-top:50px;background-color: darkgrey;border-radius:20px">
						<table class = "table table-striped">
							<caption><h3 style = "background: seashell;
color: cornflowerblue;
font-family: georgia;">Messages</h3></caption>
							<?php foreach ($lists as $list):?>
							<tr>
								<td><?php echo $list['name'];?><br><small class="text-success"><?php echo $list['date_posted'];?></small></td>
								<td><?php echo $list['message'];?></td>
							</tr>
							<?php endforeach;?>	
						</table>
					</div>
				</div>
				<br><br><br>
				<div class = "container">				
					<div class="span6 offset3 well" style = "background-color: darkgrey;
border-radius: 20;">
						<center>
							<div class = "row"><h3 style = "background: seashell;
color: cornflowerblue;
margin-left: 20px;
font-family: georgia;">POST NEW MESSAGE</h3></div>
							<form action = "validateMessage.php" method = 'POST'>
							<div class = "row">
								Name&nbsp&nbsp<input type = "text" name = "fname">
							</div>
							<div class = "row">
								Email&nbsp&nbsp<input type = "text" name = "email">
							</div>
							<div class = "row" style = "margin-right:25px">
								Message&nbsp&nbsp <textarea type = "text" name = "message"></textarea>
							</div>
							<div class = "row">
								<input type = 'submit' name = "send" value = "POST MESSAGE" class = "btn btn-primary">
							</div>
							</form>
							<form action = "view_all.php">
							<input type = "submit" value = "VIEW LIST" class = "btn btn-default" style = "border-radius: 30;">
							</form>
						</center>
					</div>
				</div>
				
			</body>
		</div>
	</div>
</html>