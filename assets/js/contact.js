$(function () {
  "use strict";

    $('#contact-form').validator();

    $('#contact-form').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {

            var url = "//formspree.io/glenrhodges@gmail.com";
            // get the name field value
            var name = $("#form_name").val();
            //get the name field value
            var email = $("#orm_email").val();
            //get the comments
            var comments = $("#form_message").val();

            $.ajax({
                method: "POST",
                url: url,
                data: {
                    name: name,
                    _replyto: email,
                    email: email,
                    comments: comments,
                    _subject: "My Form Submission"
                },
                dataType: "json",
                success: function () {
                    console.log("success");
                    $("#formBlock").hide();
                    $("#thankyouBlock").show();
                    $('#contact-form')[0].reset();
                }
            });
            return false;
        }
    })
});



// // $('#contact-form').validator();

// $('#contact-form').on('submit', function (e) {
//     if (!e.isDefaultPrevented()) {

//         //get the name field value
//         var name = $("#form_name").val();
//         //get the name field value
//         var email = $("#orm_email").val();
//         //get the comments
//         var comments = $("#form_message").val();

//         $.ajax({
//             url: "//formspree.io/glenrhodges@gmail.com",
//             method: "POST",
//             data: {
//                 name: name,
//                 _replyto: email,
//                 email: email,
//                 comments: comments,
//                 _subject: "My Form Submission"
//             },
//             dataType: "json",
//             success: function () {
//                 console.log("success");
//                 $("#formBlock").hide();
//                 $("#thankyouBlock").show();
//             }
//         });

//     }
// })


    // success: function (data)
    // {
    //     var messageAlert = 'alert-' + data.type;
    //     var messageText = data.message;

    //     var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
    //     if (messageAlert && messageText) {
    //         $('#contact-form').find('.messages').html(alertBox);
    //         $('#contact-form')[0].reset();
    //     }
    // }