<?php 
session_start();
require_once 'config/connect.php';
include 'inc/header.php'; ?>
<?php include 'inc/nav.php'; ?>
	
	<div class="close-btn fa fa-times"></div>

	
	<!-- SHOP CONTENT -->
	<section id="content">
		<div class="content-blog">
			<div class="container">
				<div class="row">
					<div class="page_header text-center">
						<h2>Contact Form</h2>
						<p>Please contact for any emergency</p>
					</div>

<html>
<title> Contact </title>
<head>
<title> Contact </title>
</head>
<body>

<form action="contact_process.php" method="post" name="contact">

    Name: <input type="text" name="name" value=""><br>
    City: <input type="text" name="city" value=""><br>
    Email: <input type="text" name="email" value=""><br>
    Message: <textarea name="message"></textarea>
    <input type="submit" value="Submit">


</body>
</html>					
	
</section>
	
<?php include 'inc/footer.php'; ?>