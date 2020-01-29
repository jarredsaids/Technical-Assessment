<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Request out of stock items.">
	<title>Reps - Piece Request</title>
	<link rel="icon" href="images/smiley.jpg" type="image/gif" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="resources/request.css">
	<script type="text/javascript" src="resources/request.js"></script>
	<script type="text/javascript" src="resources/jquery.min.js"></script>
</head>
<body>
	
	<!-- Container Start -->
	<div id="container">
		<div id="container-inner">
		<!-- Header Start -->
		<header id="header">
		<table id = "header-table">
		<tr>
			<td><div class="head-logo"><img id ="head-logo-img" src="images/smiley.jpg" alt="Reps LTD-Logo"></td>
			<td><div><img src="images/name.png" alt="Reps LTD."></td>
		</td>
		</table>
		
		</header>
		<!-- Header End -->
		</div>
		<br>
		<div id = "title-name">
	<!--			<iframe id="hidden-frame" name="hidden-frame" style="display: block"></iframe> <!--Will act as pop-up window on completion-->
		<p><h2>PIECE REQUEST FEATURE</h2></p>
		</div>
		<hr>
		<div id = "title-description"><p>The Piece Request feature lets us know which out of 
			stock itmes you are looking for, so we can do our best to help you find it.  Enter up to
			three items and we will notify you via email once we have them in stock.</p></div>
		<br>
		
		<!-- Form -->
		<div id = "main_form">
		<form method="post" action="resources/requestProcess.php" target="_parent"> <!--Will process the php in the hidden frame-->
		<fieldset>
		<legend>Piece Request Form</legend>
			<div class = "form-section">
				<label>Number of Pieces:</label><br><br>		<!--Number of Pieces to Order-->
				<input type="radio" name="amount" value="1" checked onclick="radioClick('1')">One<br>
				<input type="radio" name="amount" value="2" onclick="radioClick('2')">Two<br>
				<input type="radio" name="amount" value="3" onclick="radioClick('3')">Three<br>
			</div>
			<div class = "form-section">
				<label class = "required-label">Name</label>		<!--Personal Information-->
				<input type="text" name="name" value="" required>
			</div>
			<div class = "form-section">
				<label class = "required-label">E-mail Address</label>
				<input type="text" name="email" value="" required>
			</div>
			<div class = "form-section">
				<label>Phone Number</label>
				<input type="tel" name="tel" value="">
			</div>			
			<br>
			<div class = "form-label" id = "form_piece1">Piece #1:</div>				<!--Piece #1-->
			<div class = "form-section">
				<label class = "required-label">Type</label>
				    <select name="type1" required>
						<option value=""></option>
						<option value="dinner plate">dinner plate</option>
						<option value="teacup">teacup</option>
						<option value="serving plate">serving plate</option>
					</select>
			</div>
			<div class = "form-section">
				<label class = "required-label">Pattern Name</label>
				<select name="pattern1" required>
						<option value=""></option>
						<option value="Denby">Denby</option>
						<option value="Lenox">Lenox</option>
						<option value="Noritake">Noritake</option>
					</select>
			</div>
			<div class = "form-section">
				<label class = "required-label">Quantity</label>
				<input type="number" name="quantity1" value="" min = "1" max = "200" required>
			</div>			
			<br>
			<div id = "form_piece2">
			<div class = "form-label">Piece #2:</div>				<!--Piece #2-->
			<div class = "form-section">
				<label class = "required-label">Type</label>
				    <select id = "type2" name="type2">
						<option value=""></option>
						<option value="dinner plate">dinner plate</option>
						<option value="teacup">teacup</option>
						<option value="serving plate">serving plate</option>
					</select>
			</div>
			<div class = "form-section">
				<label class = "required-label">Pattern Name</label>
				<select id = "pattern2" name="pattern2">
						<option value=""></option>
						<option value="Denby">Denby</option>
						<option value="Lenox">Lenox</option>
						<option value="Noritake">Noritake</option>
					</select>
			</div>
			<div class = "form-section">
				<label class = "required-label">Quantity</label>
				<input id = "quantity2" type="number" name="quantity2" value="" min = "1" max = "200">
			</div>			
			<br>
			</div>
			<div id = "form_piece3">
			<div class = "form-label">Piece #3:</div>				<!--Piece #3-->
			<div class = "form-section">
				<label class = "required-label">Type</label>
				    <select id = "type3" name="type3">
						<option value=""></option>
						<option value="dinner plate">dinner plate</option>
						<option value="teacup">teacup</option>
						<option value="serving plate">serving plate</option>
					</select>
			</div>
			<div class = "form-section">
				<label class = "required-label">Pattern Name</label>
				<select id = "pattern3" name="pattern3">
						<option value=""></option>
						<option value="Denby">Denby</option>
						<option value="Lenox">Lenox</option>
						<option value="Noritake">Noritake</option>
					</select>
			</div>
			<div class = "form-section">
				<label class = "required-label">Quantity</label>
				<input id = "quantity3" type="number" name="quantity3" value="" min = "1" max = "200">
			</div>			
			<br>
			</div>
		</fieldset>
		<!-- End Form -->
    <br>
    <input type="submit" value="Submit">
 
</form>
		</div>
	</div>

	<!-- Container End -->


</body>
</html>