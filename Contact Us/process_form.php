<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// Retrieve form data
		$name = $_POST["name"];
		$email = $_POST["email"];
		$message = $_POST["message"];

		// Set up email parameters
		$to = climatecoders2015@gmail.com; // Replace with your email address
		$subject = "New form submission";
		$body = "Name: $name\n";
		$body .= "Email: $email\n";
		$body .= "Message:\n$message";

        // Send email
		if (mail($to, $subject, $body)) {
			echo "<p>Thank you, $name, for submitting the form! Your message has been sent.</p>";
		} else {
				echo "<p>Sorry, there was a problem sending your message. Please try again later.</p>";
				}
	}
?>