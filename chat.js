$(function showMessages(){
	$(document).on('submit', '#chatForm', function(){
		//Get username and message
		var text = $("#text").val();
		var name = $("#name").val();
		if(text != "" && name != ""){
			$.post('postMessages.php', {text: text, name: name}, function(data){
				//add the new data
				$(".chatMessages").append(data);
				//empty message field after sending the message
				$('#text').val('');
			});
		}else{
			alert("Missing the data")
		}
	});
	// Update the data after each 500ms
	setInterval(function(){
		getMessages();
	},500);
});
	// Get the data from the db, scroll down
	function getMessages(){
		$.get('getMessages.php',function(data){
			$(".chatMessages").html(data);
			$(".chatMessages").scrollTop(100000000);
		});
	}