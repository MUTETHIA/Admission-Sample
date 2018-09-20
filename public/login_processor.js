
$('document').ready(function()
{
     /* validation */
	 $("#login-form").validate({
      rules:
	  {
			password: {
			required: true,
			},
			email: {
            required: true,
            email: true
            },
	   },
       messages:
	   {
            password:{
                      required: "Please enter your password"
                     },
            email: "Please enter your email address",
       },
	   submitHandler: submitForm
       });
	   /* validation */

	   /* login submit */
	   function submitForm()
	   {

			var data = $("#login-form").serialize();

			$.ajax({
			type : 'POST',
			url  : 'http://localhost/application.mmust.ac.ke/Site/login_process',
			data : data,
			beforeSend: function()
			{
				$("#error").fadeOut();
				$("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Sending ...');
			},
			success :  function(response)
			   {
					if(response=="ok"){
						$("#btn-login").html('<img src="http://localhost/application.mmust.ac.ke/public/btn-ajax-loader.gif" /> &nbsp; Signing In ...');
						setTimeout(' window.location.href = "http://localhost/application.mmust.ac.ke/Admin/dashboard"; ',4000);
					}
                       else	if(response=="ok1"){

						$("#btn-login").html('<img src="http://localhost/application.mmust.ac.ke/public/btn-ajax-loader.gif" /> &nbsp; Signing In ...');
						setTimeout(' window.location.href = "http://localhost/application.mmust.ac.ke/Users/dashboard"; ',4000);
					}
                    else	if(response=="ok2"){

						$("#btn-login").html('<img src="http://localhost/application.mmust.ac.ke/public/btn-ajax-loader.gif" /> &nbsp; Signing In ...');
						setTimeout(' window.location.href = "http://localhost/application.mmust.ac.ke/Department/dashboard"; ',4000);
					}
                     else	if(response=="ok3"){

						$("#btn-login").html('<img src="http://localhost/application.mmust.ac.ke/public/btn-ajax-loader.gif" /> &nbsp; Signing In ...');
						setTimeout(' window.location.href = "http://localhost/application.mmust.ac.ke/Dean/dashboard"; ',4000);
					}
                    else	if(response=="ok4"){

						$("#btn-login").html('<img src="http://localhost/application.mmust.ac.ke/public/btn-ajax-loader.gif" /> &nbsp; Signing In ...');
						setTimeout(' window.location.href = "http://localhost/application.mmust.ac.ke/Director/dashboard"; ',4000);
					}
                  /*   else	if(response=="ok5"){
                     $("#error").fadeIn(1000, function(){
				$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp;Your acount is not activated. Kindly check activation code sent to your email. !</div>');
				$("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
				});
					}*/
					else{

			   $("#error").fadeIn(1000, function(){
				$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
				$("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
				});

					}
			  }
			});
				return false;
		}
	   /* login submit */
});