<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClimateCoders</title>
	<link href="https://climatecoders2015.github.io/hackathon-win.github.io/Stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">
    	<div class="Links">
	    	<table>
	            <tr>
	                <td style="width: 25%">
	                    <a href="https://climatecoders2015.github.io/hackathon-win.github.io/">
	                    <img src="https://climatecoders2015.github.io/hackathon-win.github.io/Team Logo.png" alt="Team Logo" height="25%" width="25%"></a>
	                </td>
	                <td style="width: 25%">
	                    <a href="https://climatecoders2015.github.io/hackathon-win.github.io/Team%20Page/index.html" class="link">Meet Our Team</a>
	                </td>
	                <td style="width: 25%">
	                    <a href="https://climatecoders2015.github.io/hackathon-win.github.io/Solution/index.html" class="link">Our Solution</a>
	                </td>
	                <td style="width: 25%">
	                    <a href="https://climatecoders2015.github.io/hackathon-win.github.io/Contact%20Us/index.html" class="link">Contact Us</a>
	                </td>
	
	            </tr>
	        </table>
		</div>
	</div>
    <div class="section">
        <div class="container">
            <h3>Contact Us</h3>
        </div>
    </div>
	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Retrieve form data
			$name = $_POST["name"];
			$email = $_POST["email"];
			$message = $_POST["message"];

			// Set up email parameters
			$to = "climatecoders2015@gmail.com"; // Replace with your email address
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
</body>

</html>
