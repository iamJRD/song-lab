$(document).ready(function() {
    $("form.signInForm").submit(function(event) {

            $("#modal2").openModal();
            $(this).removeClass('.lean-overlay');
    });
});
