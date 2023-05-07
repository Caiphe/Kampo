<?php 
$EmailFrom = "Kampo Medical Centre";
$destinataire = "kampomedic@outlook.com";
$Subject = "Appointment Booking";
$name  = Trim( stripslashes( $_POST['name']));
$phone = Trim( stripslashes( $_POST[ 'phone']));
$date = Trim( stripslashes($_POST['date']));
$time = Trim( stripslashes($_POST['time']));
$department = Trim( stripslashes($_POST['department']));
$message = Trim( stripslashes( $_POST['message']));

if(empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['date']) ||empty($_POST['department']) || empty($_POST['date']) || empty($_POST['message']))
{
	?>
        <script>
            Javascript:alert('Please fill up the Required fields !!!');
        </script>
	<?php
}
 else
{

// validation
  $validationOK = true;
  if ( !$validationOK ) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactError.php\">";
  exit;
 }

// prepare email body text
$Body = "";
$Body .= "Name : ";
$Body .= $name;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Date: ";
$Body .= $date;
$Body .= "\n";
$Body .= "Time: ";
$Body .= $time;
$Body .= "\n";
$Body .= "Department: ";
$Body .= $department;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail( $destinataire, $Subject, $Body, "From: <$name>" );

// redirect to success page 
if ( $success ) {
    print "<meta http-equiv=\"refresh\" content=\"0;URL=success.php\">";
   } else {
    print "<meta http-equiv=\"refresh\" content=\"0;URL=error.php\">";
   }
 }
?>



