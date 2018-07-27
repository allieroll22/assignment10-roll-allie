<!-- HTML top code goes here -->

<?

// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'allieroll.com' // Put you mail domain here
	,
	'Allie Roll' // Put your site name / form name here
	,
	'allieroll22@ufl.edu' // Where will the form notification be sent?
	,
	'allieroll22@ufl.edu' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field

);


?>

<!-- HTML bottom code goes here -->
