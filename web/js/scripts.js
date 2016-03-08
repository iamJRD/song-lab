$(document).ready(function() {
  $("form.createAccountForm").submit(function(event) {
    // $("#modal1").leanModal({
    //   dismissible: false
    // });
    var password1 = $("#password1").val();
    var password2 = $("#password2").val();

    if (password1 == password2)
    {
      $("#modal1").closeModal();
        return true;
    }

    else {
        alert("passwords do not match!");
        $("#modal1").openModal();
        $(this).removeClass('.lean-overlay');
        return false;
    }
    // event.preventDefault();
  })
});
