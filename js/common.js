$(document).ready(function () {

	function monitor_field($field, $error) {
		$field.keyup(function () {
			if ($(this).val() != "") {
				$error.hide();
			}
		});
	};
	
	// bind to contact us sidebar form
	$("#contact-sidebar").submit(function () {
		var $error = $("#contact-sidebar-error");
		
		if ($.trim($("#contact-sidebar-name").val()) == "") {
			$error.show().html("*** Please enter your name.");
			monitor_field($("#contact-sidebar-name"), $error);
			return false;
		}
		if ($.trim($("#contact-sidebar-email").val()) == "" && $.trim($("#contact-sidebar-phone").val()) == "") {
			$error.show().html("*** Please enter an email or a phone number");
			monitor_field($("#contact-sidebar-email"), $error);
			monitor_field($("#contact-sidebar-phone"), $error);
			return false;
		}
		if ($.trim($("#contact-sidebar-message").val()) == "") {
			$error.show().html("*** Please type a message.");
			monitor_field($("#contact-sidebar-message"), $error);
			return false;
		}
		return true;
	});
});