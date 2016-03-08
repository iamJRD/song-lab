$(document).ready(function() {
  $("form.createAccountForm").submit(function(event) {
    var password1 = $("#password1").val();
    var password2 = $("#password2").val();

    if (password1 == password2)
    {
        return true;
    }

    else {
        alert("passwords do not match!");
      // ("form.createAccountForm").password1.focus();
        return false;
    }
    event.preventDefault();
  })
});
