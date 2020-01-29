/*
	radioClick -- depending on how many piece requests the customer wishes to make, 
				it hides the other non-essential parts of the request form.

	@args number -- the number of pieces (1-3 radio button) the customer
					wishes to enter into the form.
*/
function radioClick(number) {
 
  if (number == '1') {
    form_piece2.style.display = "none";  	//hide part of the form for piece#2
	type2.required = false;					//make piece#2 type input not required
	pattern2.required = false;				//make piece#2 pattern input not required
	quantity2.required = false;				//make piece#2 quantity input not required
	
	form_piece3.style.display = "none";		//hide part of the form for piece#3
	type3.required = false;					//make piece#3 type input not required
	pattern3.required = false;				//make piece#3 pattern input not required
	quantity3.required = false;				//make piece#3 quantity input not required
	
	type2.value = "";						//makes sure partially filled form is reset for type2
	pattern2.value = "";					//makes sure partially filled form is reset for pattern2
	quantity2.value = "";					//makes sure partially filled form is reset for quantity2
	
	type3.value = "";						//makes sure partially filled form is reset for type3
	pattern3.value = "";					//makes sure partially filled form is reset for pattern3
	quantity3.value = "";					//makes sure partially filled form is reset for quantity3
	
  } else if (number == '2'){
    form_piece2.style.display = "block";	//show part of the form for piece#2
	type2.required = true;					//make piece#2 type input required
	pattern2.required = true;				//make piece#2 pattern input required
	quantity2.required = true;				//make piece#2 quantity input required
	
	form_piece3.style.display = "none";		//hide part of the form for piece#3
	type3.required = false;					//make piece#3 type input not required
	pattern3.required = false;				//make piece#3 pattern input not required
	quantity3.required = false;				//make piece#3 quantity input not required

	type3.value = "";						//makes sure partially filled form is reset for type3
	pattern3.value = "";					//makes sure partially filled form is reset for pattern3
	quantity3.value = "";					//makes sure partially filled form is reset for quantity3
  } else {
	form_piece2.style.display = "block";	//show part of the form for piece#2
	type2.required = true;					//make piece#2 type input required
	pattern2.required = true;				//make piece#2 pattern input required
	quantity2.required = true;				//make piece#2 quantity input required
	
	form_piece3.style.display = "block";	//show part of the form for piece#3
	type3.required = true;					//make piece#3 type input required
	pattern3.required = true;				//make piece#3 pattern input required
	quantity3.required = true;				//make piece#3 quantity input required	
	
  }
}