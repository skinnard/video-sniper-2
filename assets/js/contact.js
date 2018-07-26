$(function () {
  "use strict";

    $('#contact-form').validator();

    $('#contact-form').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
            var url = "//formspree.io/glenrhodges@gmail.com";

            $.ajax({
                url: "//formspree.io/glenrhodges@gmail.com",
                method: "POST",
                data: {
                    name: name,
                    _replyto: email,
                    email: email,
                    comments: comments,
                    _subject: "My Form Submission"
                },
                dataType: "json",
                success: function (data)
                {
                    console.log("success");
                    var messageAlert = 'alert-' + data.type;
                    var messageText = data.message;

                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    if (messageAlert && messageText) {
                        $('#contact-form').find('.messages').html(alertBox);
                        $('#contact-form')[0].reset();
                    }
                }
            });
            return false;
        }
    })
});