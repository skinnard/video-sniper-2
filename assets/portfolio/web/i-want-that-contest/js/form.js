function checkboxesError(){
    $(".checkbox-parent").each(function(){
        if ($($(this).children('input')[0]).hasClass('error')){
            $(this).addClass('error');
        }
    });
}

jQuery(document).ready(function($) {
    $('a#rulesLink').click(function(e){
        e.preventDefault();
        $('#appForm').validate().cancelSubmit = true;
        $('#submit').val('rules');
        $('#btnSubmit').click();
    });
    $('a#privacyLink').click(function(e){
        e.preventDefault();
        $('#appForm').validate().cancelSubmit = true;
        $('#submit').val('privacy');
        $('#btnSubmit').click();
    });
    
    setAutoTab('txtPhone1', 'txtPhone2', 3);
    setAutoTab('txtPhone2', 'txtPhone3', 3);
    setAutoTab('txtPostal1', 'txtPostal2', 3);

    $('#appForm').bind('invalid-form.validate', function() {
		$('#summary').php(ERROR_SUMMARY);
	}).validate({
        ignore: [],
        errorPlacement: function(error, element) {
            if (element.attr('type') == 'checkbox') {
                error.insertAfter(element.parent().next().children('label'));
                checkboxesError();
            }
            else if (element.attr('type') == 'hidden') {
                error.insertAfter(element.prev().children('span'));
            }
            else {
                //error.insertAfter(element);
            }
        }
    });
    
	$.validator.addMethod(
		"regex",
		function(value, element, regexp) {			
			var re = new RegExp(regexp);
			return this.optional(element) || re.test(value);
		},
		"Invalid."
	);
	$("#txtPostal1").rules("add", { regex: /^[ABCEGHJKLMNPRSTVXY]\d[ABCEGHJKLMNPRSTVWXYZ]$/i});
    $("#txtPostal2").rules("add", { regex: /^\d[ABCEGHJKLMNPRSTVWXYZ]\d$/i});
    $("#txtEmailConfirm").rules("add", { equalTo: "#txtEmail" });
});

function setAutoTab(CurrentElementID, NextElementID, FieldLength) {
    var CurrentElement = $('#' + CurrentElementID);
    var NextElement = $('#' + NextElementID);
    CurrentElement.keyup(function(e) {
        var KeyID = (window.event) ? event.keyCode : e.keyCode; //Key pressed
        //If at end then tab to next 
        if (CurrentElement.val().length >= FieldLength
            && ((KeyID >= 48 && KeyID <= 90) ||
            (KeyID >= 96 && KeyID <= 105)))
            NextElement.focus();
    });
}