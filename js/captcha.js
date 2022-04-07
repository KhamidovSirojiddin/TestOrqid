$(document).ready(function () {

 $('#orqid-form').on("submit", function(){
   
    $("#msg-response-success, #msg-response-error").hide();

    var formData = {
      'name': $('input[name="name"]').val(),
      'email': $('input[name="email"]').val(),
      'phone' : $('input[name="phone"]').val(),
      'subject' : $('input[name="subject"]').val(),
      'message' : $('textarea[name="message"]').val(),
      'captcha' : grecaptcha.getResponse()
    };

    $.ajax({
      type: "POST",
      url: "contact.php",
      data: formData,
      success: function(data) {
        console.log(data);
        if (data == "success") {    
            $('input, textarea').val('');
            $("#msg-response-success").html('Your message has been sent! We will reply to you within the next 24 hours.').fadeIn('1000');
        } else {
          $("#msg-response-error").html(data).fadeIn('1000');
        }
      }
      
    });

    return false;
  });
});