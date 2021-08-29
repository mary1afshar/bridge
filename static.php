<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Dashboard</title>
  <link rel="shortcut icon" type="image/png" href="images/logo.png"> 

  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="fonts/flaticon-covid/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="style.css" />

 
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.13/angular.min.js"></script>
    <script src="script.js"></script>
  
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div id="overlayer">
  <div class="loader">
    <!-- <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div> -->
  </div>


    
    <!-- CHAT BAR BLOCK -->
    <aside>
		<header>
			<input type="text" placeholder="search">
		</header>
		<ul>
			<li>
				<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="">
				<div>
					<h2>Prénom Nom</h2>
					<h3>
						<span class="status orange"></span>
						offline
					</h3>
				</div>
			</li>
			<li>
				<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_02.jpg" alt="">
				<div>
					<h2>Prénom Nom</h2>
					<h3>
						<span class="status green"></span>
						online
					</h3>
				</div>
			</li>
			<li>
				<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_03.jpg" alt="">
				<div>
					<h2>Prénom Nom</h2>
					<h3>
						<span class="status orange"></span>
						offline
					</h3>
				</div>
			</li>
			<li>
				<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_04.jpg" alt="">
				<div>
					<h2>Prénom Nom</h2>
					<h3>
						<span class="status green"></span>
						online
					</h3>
				</div>
			</li>
</aside>
    <div class="chat-bar-collapsible">
        
        <button id="chat-button" type="button" class="collapsible">
            Bridge the Gap!
            <!-- Chat icon -->
            <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
            
        </button>

        <div class="content">
            <div class="full-chat-block">
                <!-- Message Container -->
                <div class="outer-container">
                    <div class="chat-container">
                        <!-- Messages chatbox -->
                        <div id="chatbox">
                            <!-- Time stamp-->
                            <h5 id="chat-timestamp"></h5>
                            <p id="botStarterMessage" class="botText"><span>Give me a minute ...</span></p>
                        </div>

                        <!-- User input box -->
                        <div class="chat-bar-input-block">
                            <div id="userInput">
                                <input id="textInput" class="input-box" type="text" name="msg" placeholder="Press 'Enter' to send a message">
                                <p></p>
                            </div>

                            <div class="chat-bar-icons">
                                <i id="chat-icon" style="color: crimson;" class="fa fa-fw fa-heart"
                                    onclick="heartButton()"></i>
                                <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send"
                                    onclick="sendButton()"></i>
                            </div>
                        </div>
                        <!--Chat Bar Bottom-->
                        <div id="chat-bar-bottom">
                            <p></p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

</body>
<!--JQuery File -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!--JS Files-->
<script src="responses.js"></script>
<script src="chat.js"></script>

</html>