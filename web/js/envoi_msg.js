$(document).ready(function() {
	$('#nouveauMsgEnvoi').click(function() {
		var pseudo = $('#userlogged').html();
		
		msg = $('#nouveauMsg').val();
		
		if (msg == "" || msg == "Votre message ici") 
		{
			return false;
		}
		
		var donnee="req=2&msg="+msg+"&pseudo="+pseudo;
		$.ajax({
            type: "POST",
            data: donnee,
            
            success: function(reponse){
            	document.nouveauMsgForm.nouveauMsg.value='';
            },
			error: function() {
				alert('erreur');
			}
        });
		return false;
	});
	
});