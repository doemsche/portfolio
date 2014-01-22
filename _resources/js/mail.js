 $(document).ready(function(){
 	$("#sendmail").click(function(){	
		var valid = '';
		var isr = ' is required.';
		var name = $("#contact-name").val();
		var mail = $("#contact-mail").val();
		var text = $("#contact-text").val();
		console.log("name is: " +name);
		console.log("mail is: " +mail);
		console.log("text is: " + text);
		if (name.length<1) {
			valid += '<br />Name'+isr;
		}
		if (mail == undefined){
			valid += '<br />An Email'+isr;
		}
		else {
			if (!mail.match(/^([a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,4}$)/i)) {
				valid += '<br />A valid Email'+isr;
			}
		}
		
		if (text.length<1) {
			valid += '<br />Text'+isr;
		}
		if (valid != '') {
			$("#response").fadeIn("slow");
			$("#response").html(valid);
		}
		else {
			var datastr ='name=' + name + '&mail=' + mail + '&text=' + text;
			$("#response").css("display", "block");
			$("#response").html("Sending message ... ");
			$("#response").fadeIn("slow");
			setTimeout("send('"+datastr+"')",2000);
		}
		return false;
	});
});

function send(datastr){
	$.ajax({	
		type: "POST",
		url: "mail.php",
		data: datastr,
		cache: false,
		success: function(html){
			console.log("successhtml back is: "+html);
			$("#response").fadeIn("slow");
			$("#response").html(html);
			setTimeout('$("#response").fadeOut("slow")',2000);
			$("#contact-name").val("");
			$("#contact-mail").val("");
			$("#contact-text").val("");
		}
	});
}
