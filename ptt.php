?php
echo"<pre>";
print_r($_POST);
echo"<pre>";

$Email = $_POST["Email"];
$Subject= $_POST["Subject"];
$Content = $_POST["Content"];

echo"The email u entered is = $Email"."\n";
echo"The subject u entered is = $Subject"."\n";
echo"The content u entered is = $Content"."\n";

//sending mail

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = $Email; 
  
  // Send the email
  if (mail($to, $Subject, $Content, $headers)) {
      echo "Email sent successfully!";
  } else {
      echo "Error sending email.";
  }
}

  ?>
