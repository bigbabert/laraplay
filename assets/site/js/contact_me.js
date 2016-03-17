obj=$;
obj(function() {
    obj("input,textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function(objform, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function(objform, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var name = obj("input#name").val();
            var email = obj("input#email").val();
            var phone = obj("input#phone").val();
            var message = obj("textarea#message").val();
            var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            obj.ajax({
                url: "app/views/site/mail/contact_me.php",
                type: "POST",
                data: {
                    name: name,
                    phone: phone,
                    email: email,
                    message: message
                },
                cache: false,
                success: function() {
                    // Success message
                    obj('#success').html("<div class='alert alert-success'>");
                    obj('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    obj('#success > .alert-success')
                        .append("<strong>Your message has been sent. </strong>");
                    obj('#success > .alert-success')
                        .append('</div>');

                    //clear all fields
                    obj('#contactForm').trigger("reset");
                },
                error: function() {
                    // Fail message
                    obj('#success').html("<div class='alert alert-danger'>");
                    obj('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    obj('#success > .alert-danger').append("<strong>Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!");
                    obj('#success > .alert-danger').append('</div>');
                    //clear all fields
                    obj('#contactForm').trigger("reset");
                },
            })
        },
        filter: function() {
            return obj(this).is(":visible");
        },
    });

    obj("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        obj(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
obj('#name').focus(function() {
    obj('#success').html('');
});
