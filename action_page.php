
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"content="width=device-width,initial-scale=1.0">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body> 
<?php $name = $_POST['firstname'];
 $email = $_POST['email'];
 $message = $_POST['message'];
 $to = 'lorena.alvarez.543@my.csun.edu';
 $subject = $_POST['subject'];

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
        if (($email != '' && $message != '') && ($name != '')) {        
        if (mail ($to, $subject, $body, $email)) {
                echo "Thank You!" . " -" . 
                "<a href='http://www.csun.edu/~lba30101/361/'>Return to Homepage</a>";
        } else {
             echo '<p>Something went wrong, go back and try again!</p>';
        }
    } else {
        echo "<p id='centered'>Name, email or message cannot be empty <a href='http://www.csun.edu/~lba30101/361/Contact.html'>Return to Contactpage</a></p>";
    }
?>
</body>

