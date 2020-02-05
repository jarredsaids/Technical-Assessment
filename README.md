# Technical-Assessment

*****THE TASK*****<br>
Piece Request Feature

The Piece Request feature allows customers to make requests for out-of-stock tableware pieces (e.g. dinner plate, salad plate) the customer is missing from a pattern. A customer is notified when the requested piece becomes available again. The functional and technical requirements for this feature are as follows:

Functional Requirements
Piece Request page must contain a heading, some copy, and a form to submit customer information with one or more piece requests.
Customers must enter contact information, including Name, E-Mail Address, Phone Number. Name and e-mail address are required, but phone number is optional.
Customers may enter as many as three (3) piece requests at a time. Each piece request consists of the piece type (e.g. dinner plate, teacup, serving plate), the pattern name (e.g. Denby, Lenox, Noritake), and the quantity requested.
Customers must receive a confirmation of the information submitted, and the information must be saved for later (e.g. saved to a file or database).
Technical Requirements
Build using HTML, CSS, JavaScript, and PHP. Common frameworks such as Bootstrap, jQuery, Laravel, etc. may be used to complete the assessment, but add more complexity than necessary.
Create and use at least two (2) classes (Customer and PieceRequest) in processing the form.
Demonstrate fundamental principles responsive web design, object-orientation, and separation of concerns.
Manage the source code is a public Github repository. Use a README.md file for any explanation or assumptions of your solution. Email a link to the Github repository when complete.

*****PROJECT NOTES*****<br>
This Project starts with the request.php in the Replacements directory (stylized with /resources/request.css).  

The user is presented with a form to add their personal information, as well as the data for up to 3 "out of stock" items. (Powered by resources/request.js)

On 'submit', resources/requestProcess.php handles the POST[] data and turns them into Customer and PieceRequest Objects with the appropriate attributes.

After the objects are created, requestProcess.php reads the /saved_requests/saved_requests.csv to an array and adds the new request data to that array.  When that is done, it re-writes the csv file with the new data as well as the old.

After requestProcess.php finishes saving to saved_requests.csv, it loads a confirmation page thanking the customer, and displaying a summary of the request details they just entered.  A feature in requestProcess.php prevents duplicate data from being written again if the customer refreshes this page.  A button is displayed that can take the customer back to the origional request.php page.

A file called /saved_requests/saved_requests(blank).csv is available to manualy reset the saved_requests.csv file.

-David M. Turner
