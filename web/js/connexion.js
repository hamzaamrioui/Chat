$(document).ready(function() {
	$('.nouveauMsgForm').hide();
	$('#msgSignIn').click(function() {
		$('#nom').focus();
		return false;
	});
});

$(document).ready(function() {
	$('.erreur').hide();
	$('#signin').click(function() {
		var pseudo = $('#nom').val();
		
		if (pseudo == "" || pseudo == "Votre pseudo" ) 
		{
			$('.erreur').show();
			return false;
		}
		
		var donnee = "req=1&pseudo="+pseudo;
		
		$.ajax({
            type: "POST",
            data: donnee,
            
            success: function(reponse)
            {
				$('.user').html('<span>Welcome <span id="userlogged">'+ pseudo+'</span></span><a id="deconnexion" onclick="window.location.reload()">Deconnexion</a>');
				$('#msgSignIn').hide();
				$('.nouveauMsgForm').show();
			}
			
		});
		return false;
	});
});