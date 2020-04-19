function alter() {

	var username = document.getElementById("username").value;
	var oldpassword = document.getElementById("oldpassword").value;
	var newpassword = document.getElementById("newpassword").value;
	var assertpassword = document.getElementById("assertpassword").value;
	var regex = /^[/s]+$/;
	if (regex.test(username) || username.length == 0) {
		alert("user name format is wrong");
		return false;
	}
	if (regex.test(oldpassword) || oldpassword.length == 0) {
		alert("password format is wrong");
		return false;
	}
	if (regex.test(newpassword) || newpassword.length == 0) {
		alert("new password format is wrong");
		return false;
	}
	if (assertpassword != newpassword || assertpassword == 0) {
		alert("two password are not same");
		return false;
	}
	return true;

}