// $(function () {
//   "use strict";

//     $('#contact-form').validator();

//     $('#contact-form').on('submit', function (e) {
//         if (!e.isDefaultPrevented()) {
//             var url = "//formspree.io/glenrhodges@gmail.com";

//             $.ajax({
//                 url: "//formspree.io/glenrhodges@gmail.com",
//                 method: "POST",
//                 data: {
//                     name: name,
//                     _replyto: email,
//                     email: email,
//                     comments: comments,
//                     _subject: "My Form Submission"
//                 },
//                 dataType: "json",
//                 success: function (data)
//                 {
//                     console.log("success");
//                     var messageAlert = 'alert-' + data.type;
//                     var messageText = data.message;

//                     var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
//                     if (messageAlert && messageText) {
//                         $('#contact-form').find('.messages').html(alertBox);
//                         $('#contact-form')[0].reset();
//                     }
//                 }
//             });
//             return false;
//         }
//     })
// });

$(function () {
    "use strict";

    $('#contact-form').validator();

    $("#contact-form").on("submit", function(e) {
        e.preventDefault();

        var url = "//formspree.io/glenrhodges@gmail.com";
    
        var name = $("#form_name").val();
        var lastName = $("#form_lastname").val();
        var email = $("#form_email").val();
        var phone = $("#form_phone").val();
        var message = $("#form_message").val();
    
        //pretend we don't need validation
    
        //send to formspree
        $.ajax({
        url: url,
        method: "POST",
        data: {
            name: name,
            lastName: lastName,
            phone: phone,
            _replyto: email,
            email: email,
            message: message,
            _subject: "My Form Submission"
        },
        dataType: "json",
        success: function() {
            console.log("success");
            $("#formBlock").hide();
            $("#thankyouBlock").show();
        }
        });
    });
}); // END FUNCTION

// $("#contact-form).on("submit", function(e) {
//     e.preventDefault();
  
//     //get the name field value
//     var name = $("#form_name").val();
//     //get the name field value
//     var email = $("#form_email").val();
//     //get the comments
//     var comments = $("#form_message").val();
  
//     //pretend we don't need validation
  
//     //send to formspree
//     $.ajax({
//       url: "//formspree.io/glenrhodges@gmail.com",
//       method: "POST",
//       data: {
//         name: name,
//         _replyto: email,
//         email: email,
//         comments: comments,
//         _subject: "My Form Submission"
//       },
//       dataType: "json",
//       success: function() {
//         console.log("success");
//         $("#formBlock").hide();
//         $("#thankyouBlock").show();
//       }
//     });
//   });