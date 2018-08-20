<?php

if(isset($_POST['submit'])){

	$msg = 'Jonathon Khoi Nail Spa - Job Application' .$_POST[''] ."\n"   
.'First Name: ' .$_POST['fname'] ."\t\t\t" 
.'Middle Name: ' .$_POST['mname'] ."\t\t\t" 
.'Last Name: ' .$_POST['lname'] ."\n" 
.'Email: ' .$_POST['email'] ."\n"  
.'Address: ' .$_POST['address'] ."\t\t\t" 
.'City: ' .$_POST['city'] ."\t\t\t" 
.'Zip Code:' .$_POST['zip'] ."\n" 
.'Date of Birth:' .$_POST['birth'] ."\n" 
.'Phone:' .$_POST['phone'] ."\t\t\t" 
.'Cell Phone:' .$_POST['cell'] ."\t\t\t" 
.'Work phone:' .$_POST['work'] ."\n" 
.'Are you currently working?:' .$_POST['work1'] ."\n" 
.'If so, where?:' .$_POST['work2'] ."\n" 
.'How much were paid?:' .$_POST['salary'] ."\n" 
.'Reason for leaving:' .$_POST['reason'] ."\n" 
.'How much do you expect to get paid at Jonathon Khoi Nail Spa?:' .$_POST['salary2'] ."\n" 
.'When can you start?:' .$_POST['startdate'] ."\n" 
.'Monday:' .$_POST['monday'] ."\n" 
.'Tuesday:' .$_POST['tuesday'] ."\n" 
.'Wednesday:' .$_POST['wednesday'] ."\n" 
.'Thursday:' .$_POST['thursday'] ."\n" 
.'Friday:' .$_POST['friday'] ."\n" 
.'Saturday:' .$_POST['saturday'] ."\n" 
.'Sunday:' .$_POST['sunday'] ."\n" 
.'Please provide your work reference(s)' .$_POST[''] ."\n"
.'Company:' .$_POST['company'] ."\t\t\t" 
.'Position:' .$_POST['position'] ."\t\t\t" 
.'Starts Date:' .$_POST['startdate2'] ."\t\t\t" 
.'End Date:' .$_POST['enddate2'] ."\n" 
.'Please provide your work reference(s):' .$_POST[''] ."\n"
.'Company:' .$_POST['company2'] ."\t\t\t" 
.'Position:' .$_POST['position2'] ."\t\t\t" 
.'Start Date:' .$_POST['startdate3'] ."\t\t\t" 
.'End Date:' .$_POST['enddate3'] ."\n" 
.'Supervisor Name:' .$_POST['supername'] ."\t\t\t" 
.'Telephone#:' .$_POST['supertele'] ."\n" 
.'Supervisor Name:' .$_POST['supername2'] ."\t\t\t" 
.'Telphone#:' .$_POST['supertele2'] ."\n" 
.'Anything else you would like us to know about you?:' .$_POST['anything'];

$email = $_POST['email'];



		mail('info@jknailspa.com', 'Job Application', $msg, 'From:<' .$email. '>');
		header('location: email_success.php');
}

else {
	header('location: email_unsuccess.php');
	exit(0);
}
?>