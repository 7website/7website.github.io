 <?php
// REGISTER USER
if (isset($_POST['reg_user']))
{
  // receive all input values from the form
   $email = $_POST['email'];
    $website = $_POST['website'];
    $what_you_do = $_POST['what_you_do'];

$to = "monthlydues552@gmail.com";
$subject = "new sign up 7website";
$message = "user email: ".$email." website: ".$website." what_you_do: ".$what_you_do;
$headers = "From: email@7website.company";
$sent = mail($to, $subject, $message, $headers) ;

  	header('location: payment.php');
    

  }//end outer if

?>


<?php
/**
 * **************************************************************************************************
 * function to sanitize all input
 */
function test_input($connection,$data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $data = mysqli_real_escape_string($connection,$data);
  return $data;
}//end test_input

?>
