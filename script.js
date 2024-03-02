function validateForm() {
  var password = document.getElementById("password").value;
  var confirm_password = document.getElementById("confirm-password").value;

  if (password !== confirm_password) {
    alert("Password and confirm password do not match.");
    return false;
  }

  var inputs = document.getElementsByTagName("input");
  for (var i = 0; i < inputs.length; i++) {
    if (inputs[i].hasAttribute("required") && inputs[i].value === "") {
      alert("Please fill in all required fields.");
      return false;
    }
  }
}
