<?php
// for example, http://localhost/chat/index.php?u=Anna
$user = $_GET['u'];
?>
<html>
	<head>
		<meta charset ="utf-8">
		<title>Chat</title>
		<link rel="stylesheet" href="chat.css">
		<script src="http://code.jquery.com/jquery.js"></script>
		<script type="text/javascript" src="chat.js"></script>
		<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>
	</head>
	<body>
		<div class="chatContainer">
			<div id="chatHeader">
				<h3>Welcome to the chat <?php echo ($user); ?></h3>
			</div>
			<div class="chatMessages"></div>
			<div class="chatButton">
			<!-- An action of # indicates that the form stays on the same page, simply suffixing the url with a #. -->
				<form action="#" onsubmit="return false;" id="chatForm">
					<input type="hidden" id="name" value="<?php echo $user; ?>"/>
					<input type="text" id="text" value="" placeholder="type your message here...">
					<input type="submit" value="Send" id="send">
				</form>
			</div>
		</div>
	</body>
</html>