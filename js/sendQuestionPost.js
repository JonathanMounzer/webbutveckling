$(document).ready(function() {
	$("#submit").click(function() {
		var question = $("#questInput").val();

		if (question == '') {
				alert("Vänlig skriv din fråga");
			} else {
				$.post("../php/sendQuestion.php", {
					question1: name
					}, function(data) {
							alert(data);
							$('#qform')[0].reset();
						});
				}
	});
});
