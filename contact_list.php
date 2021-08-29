<?php
  session_start();
  $_SESSION;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/contact_list_style.css">
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/6b20b1c14d.js" crossorigin="anonymous"></script>

	<title>Contact Form</title>
</head>
<header class="header">
	<h2 style="color: #A09CEA; ">Messages</h2>
</header>
<body>

	<div class="container">
		<!--  SEARCH FORM -->

		<!--  CONTACT LIST -->
		<section class="contacts-library">
			<ul class="contacts-list">

				<a href="contact-profile.php">
					<div class="contact-section">
						<li class="list__item">
							<img class="contact-picture" src="images/logo.PNG" alt="Image"></img>
						</li>
						<li class="list__item">
							<p class="contact-name">Jane Doe</p>
						</li>
					</div>
				</a>

				<a href="contact-profile.php">
					<div class="contact-section">
						<li class="list__item">
							<img class="contact-picture" src="images/logo.PNG" alt="Image"></img>
						</li>
						<li class="list__item">
							<p class="contact-name">Alex Blakely</p>
						</li>
					</div>
				</a>

				<a href="contact-profile.php">
					<div class="contact-section">
						<li class="list__item">
							<img class="contact-picture" src="images/logo.PNG" alt="Image"></img>
						</li>
						<li class="list__item">
							<p class="contact-name">Sarah Smith</p>
						</li>
					</div>
				</a>

				<a href="contact-profile.php">
					<div class="contact-section">
						<li class="list__item">
							<img class="contact-picture" src="images/logo.PNG" alt="Image"></img>
						</li>
						<li class="list__item">
							<p class="contact-name">Johann Brooke</p>
						</li>
					</div>
				</a>

				<a href="contact-profile.php">
					<div class="contact-section">
						<li class="list__item">
							<img class="contact-picture" src="images/logo.PNG" alt="Image"></img>
						</li>
						<li class="list__item">
							<p class="contact-name">Sam Peterson</p>
						</li>
					</div>
				</a>

				<a href="contact-profile.php">
					<div class="contact-section">
						<li class="list__item">
							<img class="contact-picture" src="images/logo.PNG" alt="Image"></img>
						</li>
						<li class="list__item">
							<p class="contact-name">Sebastion Agnew</p>
						</li>
					</div>
				</a>
			</ul>
		</section>
	</div>

</body>
</html>