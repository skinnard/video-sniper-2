$("#contact-form").on("submit", function(e) {
    e.preventDefault();

    var name = $("#form_name").val();
    var lastName = $("#form_lastname").val();
    var email = $("#form_email").val();
    var phone = $("#form_phone").val();
    var comments = $("#form_message").val();

    //pretend we don't need validation

    //send to formspree
    $.ajax({
        url: "https://formspree.io/glenrhodges@gmail.com",
        method: "POST",
        data: {
            name: name,
            lastName: lastName,
            phoneNumber: phone,
            _replyto: email,
            email: email,
            comments: comments,
            _subject: "Form submission from glenhodgesweb.ninja"
        },
        dataType: "json",
        success: function() {
            console.log("success");
            $("#contact-form").hide();
            $("#thankyouBlock").show();
        }
    });
});
