
$(setInterval(function() {
	//$('#messages').load("{{ path('chat_actuliserMsg')}}");
	var donnee = "req=3";
	$.ajax({
		type: "POST",
		url: "{{ path('chat_actualiserMsg') }}",
		data: donnee,
		success: function(reponse) {
			alert(reponse);
			$('#messages').html(reponse);
		},
		error: function() {
			alert('erreur');
		}
	});
}, 5000));