<!doctype html>
    <?php
/*
	@Title REQUESTPROCESS.PHP
	@Author David M. Turner
	@Date 29JAN2020
	
	This will take the form data from request.php as POST, and create objects with
	the customer and pieces information.  It will then append them to the saved_requests.csv
	in the ./saved_requests folder.  It will not write data to CSV if it detects a page refresh.
*/
  //******CLASS DEFINITIONS
	class Customer {			//Customer Class
			var $name;			//Customer name
			var $email;			//Customer email
			var $phone;			//Customer phone number (can be blank)
			
      function setName($n){ 	//Customer name setter funtion
         $this->name = $n; 
      }         
      function getName(){ 		//Customer name getter funtion
         return $this->name; 
      }       
      function setEmail($e){ 	//Customer E-mail setter funtion
         $this->email = $e; 
      }        
      function getEmail(){ 		//Customer E-mail getter funtion
         return $this->email; 
      } 	  
	  function setPhone($p){ 	//Customer phone number setter funtion
         $this->phone = $p; 
      }        
      function getPhone(){ 		//Customer phone number getter funtion
         return $this->phone; 
      } 
	}
	
	class PieceRequest{				//Piece Class
		var $the_type;				//Piece type
		var $design;				//Piece design
		var $quantity;				//Piece quantity

	  function setTheType($t){ 		//Piece type setter function
         $this->the_type = $t; 
      }       
      function getTheType(){ 		//Piece type getter function
         return $this->the_type; 
      }        
      function setDesign($d){ 		//Piece design setter function
         $this->design = $d; 
      }         
      function getDesign(){ 		//Piece type getter function
         return $this->design; 
      } 	  
	  function setQuantity($q){ 	//Piece quantity setter function
         $this->quantity = $q; 
      }       
      function getQuantity(){ 		//Piece quantity getter function
         return $this->quantity; 
      } 
	}



  //******FILE VARIABLE DECLARATIONS
	$save_me = '..\saved_requests\saved_requests.csv';  //Place + Name of the CSV to save to
	$customer = new Customer();							//Creates Customer Object
	$piece1 = new PieceRequest();						//Creates first Pieces Object
	$piece2 = new PieceRequest();						//Creates second Pieces Object
	$piece3 = new PieceRequest();						//Creates third Pieces Object
	
  //******LOAD OBJECTS WITH HTML POST DATA
	$customer->setName($_POST["name"]);				//Customer Name
	$customer->setEmail($_POST["email"]);			//Customer Email
	$customer->setPhone($_POST["tel"]);				//Customer Phone

	$piece1->setTheType($_POST["type1"]);			//Piece 1 Type
	$piece1->setDesign($_POST["pattern1"]);			//Piece 1 Patter
	$piece1->setQuantity($_POST["quantity1"]);		//Piece 1 Quantity
		
	$piece2->setTheType($_POST["type2"]);			//Piece 1 Type
	$piece2->setDesign($_POST["pattern2"]);			//Piece 1 Patter
	$piece2->setQuantity($_POST["quantity2"]);		//Piece 1 Quantity

	$piece3->setTheType($_POST["type3"]);			//Piece 1 Type
	$piece3->setDesign($_POST["pattern3"]);			//Piece 1 Patter
	$piece3->setQuantity($_POST["quantity3"]);		//Piece 1 Quantity

  //*******Read what's already in the saved CSV file into an array
	$file1 = fopen($save_me,"r");				   	//open the server CSV file as $file1
	$saved_array = [];								//array to store CSV entries and new ones from objects
	$line = [];										//holds the row read from the CSV file
	while (($line = fgetcsv($file1)) !== FALSE) {	//iterates through the CSV file and stores into an array by $line
		array_push($saved_array, $line);			//store current line of CSV into $saved_array by $line
	}
	fclose($file1);									//closes server CSV file

  //*******Create an array with the oject's attributes to push onto the end of the $saved_array
	$new_entry_array = array($customer->getName(), $customer->getEmail(), $customer->getPhone(),
				$piece1->getTheType(), $piece1->getDesign(), $piece1->getQuantity(),
				$piece2->getTheType(), $piece2->getDesign(), $piece2->getQuantity(),
				$piece3->getTheType(), $piece3->getDesign(), $piece3->getQuantity());	
	
  //*********DETECT IF ALREADY PROCESSED AND CUSTOMER IS JUST REFRESHING THE PAGE
	if ($saved_array[sizeof($saved_array) - 1] !== $new_entry_array){

		array_push($saved_array, $new_entry_array);		//pushes new save data into old save data array

  //*******Write and save the new CSV file with the combined old and new data
		$file1 = fopen($save_me,"w");					//open saved-data CSV file for writing	

		foreach ($saved_array as $line) {	//iterates through the saved_array by $line
			fputcsv($file1, $line);			//store current array read from save_me array to CSV File
		}	
		fclose($file1);						//close the saved-data CSV file
  	}
?>

<!--LOADS THE REQUEST RECEIVED PAGE-->
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Request out of stock items.">
	<title>Reps - Request Received</title>
	<link rel="icon" href="../images/smiley.jpg" type="../image/gif" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="../resources/request.css">
</head>
<body>
	
	<!-- Container Start -->
	<div id="container">
		<div id="container-inner">
		<!-- Header Start -->
		<header id="header">
		<table id = "header-table">
		<tr>
			<td><div class="head-logo"><img id ="head-logo-img" src="../images/smiley.jpg" alt="Reps LTD-Logo"></td>
			<td><div><img src="../images/name.png" alt="Reps LTD."></td>
		</td>
		</table>
		
		</header>
		<!-- Header End -->
		</div>
		<br>
		<div id = "title-name">
	
		<p><h2>THANK YOU FOR YOUR REQUEST</h2></p>
		</div>
		<hr>
		<div id = "title-description"><p>Your request for the specific items has been received.
				you will recieve an email when one or more of these items become available.
				Thank you for your continued interest in REPS, LTD.!</p>
		</div>
		
	<!--Display request details-->
		<?php echo '<div id = "request-details"><p><span class = "detail">Name: </span>'. $_POST["name"] . '</p>
			<p><span class = "detail">E-mail: </span>' . $_POST["email"] . '</p><p><span class = "detail">Phone Number: </span>' . $_POST["tel"] . '</p>
			<p><span class = "detail">Item 1: </span>' . $_POST["type1"] . ', ' . $_POST["pattern1"] . ' - QTY ' . $_POST["quantity1"] .'</p>';
		
		if ($_POST["type2"] !== ""){ 	//detects if there is an second requested item
			echo '<p><span class = "detail">Item 2: </span>' . $_POST["type2"] . ', ' . $_POST["pattern2"] . ' - QTY ' . $_POST["quantity2"] .'</p>';
		}
		
		if ($_POST["type2"] !== ""){ 	//detects if there is a third requested item
			echo '<p><span class = "detail">Item 3: </span>' . $_POST["type3"] . ', ' . $_POST["pattern3"] . ' - QTY ' . $_POST["quantity3"] .'</p>';
		}
		
		echo '</div>'?>
			
		<div id = "button-area"><br>
		<form action = "../request.php">
				<input type="submit" value = "Go Back to Requests"/>
			</form>
		</div>
</body>
</html>

