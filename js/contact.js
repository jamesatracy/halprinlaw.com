$(document).ready(function () {

	function monitor_field($field, $error) {
		$field.keyup(function () {
			if ($(this).val() != "") {
				$error.hide();
			}
		});
	};
	
	// bind to contact us form
	$("#contact-form").submit(function () {
		var $error = $("#contact-form-error");
		
		if ($.trim($("#contact-form-name").val()) == "") {
			$error.show().html("<strong>Error submitting form:</strong> Please enter your name.");
			monitor_field($("#contact-form-name"), $error);
			return false;
		}
		if ($.trim($("#contact-form-email").val()) == "" && $.trim($("#contact-form-phone").val()) == "") {
			$error.show().html("<strong>Error submitting form:</strong> Please enter an email address");
			monitor_field($("#contact-form-email"), $error);
			return false;
		}
		if ($.trim($("#contact-form-message").val()) == "") {
			$error.show().html("<strong>Error submitting form:</strong> Please enter a description of your legal issue.");
			monitor_field($("#contact-form-message"), $error);
			return false;
		}
		return true;
	});
});