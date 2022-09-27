<?php
/*
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $message = $_POST['message'];

  $errorEmpty = false;
  $errorEmail = false;

  if (empty($name) || empty($email) || empty($message)) {
    echo "<span class='form-error'>Fill in all fields!</span>";
    $errorEmpty = true;
  }
  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<span class='form-error'>Write a valid e-mail address!</span>";
    $errorEmail = true;
  }
  else {
    echo "<span class='form-success'>Fill in all fields!</span>";
  }
  else {
    echo "There was an error";
  }
}


$info = json_decode($_POST['info'], true);
//foreach($info as $i) {
//  print_r($i);
//  echo "\n";

//}
[$name, $visitor_email, $subject, $message] = $info;
//$email = $info[1];

//print_r($testing);
print_r($email);
print_r($name);
print_r($subject);
print_r($message);


//print_r($_POST['info']);

//echo "hello world";
*/

//$name = $_POST['name'];
//$visitor_email = $_POST['email'];
//$subject = $_POST['subject'];
//$message = $_POST['msg'];
//echo("in php");
$info = json_decode($_POST['info'], true);
if (count($info) == "4") {
  //echo("4");
  [$name, $visitor_email, $message, $subject] = $info;
}
// if subject is left blank
else {
  //echo("3");
  [$name, $visitor_email, $message] = $info;
  $subject = "";
}
//echo("blah bleh blue");
//echo(gettype($info));
//echo(count($info));
//echo("\n");
//print_r($visitor_email);
//echo("\n");
//print_r($name);
//echo("\n");
//print_r($subject);
//echo("\n");
//print_r($message);
//echo("\n");

$email_from = 'info@thewreathcrafteria.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name\n".   
                "User Email: $visitor_email\n".
                  "subject: $subject\n".
                  "User Message: \n$message\n";

$to = 'support@thewreathcrafteria.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body, $headers);

header("Location: contact.php");

/*


<script>
  $("#mail-name, #mail-email, #mail-message, #mail-gender").removeClass("input-error");
  var errorEmpty = "<?php echo $errorEmpty; ?>";
  var errorEmail = "<?php echo $errorEmail; ?>";

  if (errorEmpty == true) {
    $("#mail-name, #mail-email, #mail-message").addClass("input-error");
  }
  if (errorMail == true) {
    $("#mail-email").addClass("input-error");
  }
  if (errorEmpty == false && errorMail == false) {
    $("#mail-name, #mail-email, #mail-message").val("");
  }
</script>
*/
?>