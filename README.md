# Technical-Assessment
Piece Request Feature

This Project starts with the request.php in the Replacements directory (stylized with /resources/request.css).  

The user is presented with a form to add their personal information, as well as the data for up to 3 "out of stock" items. (Powered by resources/request.js)

On 'submit', resources/requestProcess.php handles the POST[] data and turns them into Customer and PieceRequest Objects with the appropriate attributes.

After the objects are created, requestProcess.php reads the /saved_requests/saved_requests.csv to an array and adds the new request data to that array.  When that is done, it re-writes the csv file with the new data as well as the old.

After requestProcess.php finishes saving to saved_requests.csv, it loads a confirmation page thanking the customer, and displaying a summary of the request details they just entered.  A feature in requestProcess.php prevents duplicate data from being written again if the customer refreshes this page.  A button is displayed that can take the customer back to the origional request.php page.

A file called /saved_requests/saved_requests(blank).csv is available to manualy reset the saved_requests.csv file.

-David M. Turner
