$(document).ready(function() {
	$("form").submit(function(eve){
		eve.preventDefault();
		//alert("Et après ???")
		$.ajax({
			method: "POST",
			url : "contact_action.php",
			data : {
				email 		: $("#email").val(),
				sujet 		: $("#sujet").val(),
				message 	: $("#message").val(),
				newsletter 	: (($("#newsletter").prop('checked')) ? 1 : 0)
				}, /* OU data : $('form').serialize() // MAIS ATT : la NL sera true ou false*/
			success : function(data) {
				if(data.retour == 1)
					var msg = "Merci. Votre message intiulé '" + data.sujet + "' a bien été envoyé.";
				else
					var msg = "Erreur lors de l'envoi du message !";
				$("#notif").html(msg).fadeIn(600);
				//$("#notif");
			} 
		});
	});
});