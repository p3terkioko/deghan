echo <pre>
print_r($_POST;)
</pre>

$userName = $_POST['Name'];
$userNumber = $_POST['Phone Number'];
$userEmail = $_POST['Email'];
$messageSubject = $_POST['Message'];

$to ="";
$body="";

$body .="From: ".$userName."\r\n"
$body .="Email: ".$userEmail."\r\n"
$body .="Message: ".$messageSubject."\r\n"

mail()
