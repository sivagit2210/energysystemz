function validate_contactus()
{
	var fname = document.getElementById("txtname").value
	var email = document.getElementById("txtemail").value;
	var contents = document.getElementById("txtenquiry").value;
	//var cpassword = document.getElementById("txtconfpassword").value;
	//var email = document.getElementById("txtemail").value;
 	//var cemail = document.getElementById("txtconfemail").value;
	//var taccept = document.getElementById("agree");
	if(fname=="")
	{
		 alert("Please enter the name");
		 document.getElementById("txtname").focus();
	     return false;
	}
	else if(email=="")
	{
		 alert("Please enter the email");
		 document.getElementById("txtemail").focus();
	     return false;
	}
	else if(emailValidator(document.getElementById('txtemail')) == false){
		alert("Please enter valid Email")
		document.getElementById("txtemail").focus();
	    return false;
	}
	else if(contents=="")
	{
		 alert("Please enter the enquiry");
		 document.getElementById("txtenquiry").focus();
	     return false;
	}
	else
	{
	//alert("TESt");
	return true;
	}
}


function emailValidator(elem){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		return false;
	}
}

function checkAppointmentForm()
{
 var aDate = document.getElementById("txt_date").value
 var aTime = document.getElementById("txt_time").value
 var aName = document.getElementById("txt_name").value
 var aEmail = document.getElementById("txt_email").value
 var aPhone = document.getElementById("txt_phone").value
 var aNotes = document.getElementById("txt_notes").value
 
	if(aDate=="")
	{
		 alert("Please enter the Date");
		 document.getElementById("txt_date").focus();
	     return false;
	}
	else if(aTime=="")
	{
		 alert("Please enter the Time");
		 document.getElementById("txt_time").focus();
	     return false;
	}
	else if(aName=="")
	{
		 alert("Please enter the Name");
		 document.getElementById("txt_name").focus();
	     return false;
	}
	else if(aEmail=="")
	{
		 alert("Please enter the email");
		 document.getElementById("txt_email").focus();
	     return false;
	}
	else if(aPhone=="")
	{
		 alert("Please enter the phone");
		 document.getElementById("txt_phone").focus();
	     return false;
	}
	else if(aNotes=="")
	{
		 alert("Please enter the comments / request");
		 document.getElementById("txt_notes").focus();
	     return false;
	}
	else
	{
	 return true;
	}
 
 
}

function checkAppointmentFormtest()
{
 var aDate = document.getElementById("txt_proname").value
 var aName = document.getElementById("txt_name").value
 var aEmail = document.getElementById("txt_email").value
 var aPhone = document.getElementById("txt_phone").value
 var aNotes = document.getElementById("txt_notes").value
 
	if(aName=="")
	{
		 alert("Please enter the Name");
		 document.getElementById("txt_name").focus();
	     return false;
	}
	else if(aEmail=="")
	{
		 alert("Please enter the email");
		 document.getElementById("txt_email").focus();
	     return false;
	}
	else if(aPhone=="")
	{
		 alert("Please enter the phone");
		 document.getElementById("txt_phone").focus();
	     return false;
	}
	else if(aNotes=="")
	{
		 alert("Please enter the comments / request");
		 document.getElementById("txt_notes").focus();
	     return false;
	}
	else
	{
	 return true;
	}
 
 
}

// JavaScript Document
    $(document).ready(function () {

        //Execute the slideShow
        slideShow();

    });

    function slideShow() {

        //Set the opacity of all images to 0
        $('#gallery a').css({ opacity: 0.0 });

        //Get the first image and display it (set it to full opacity)
        $('#gallery a:first').css({ opacity: 1.0 });

        //Set the caption background to semi-transparent
        //$('#gallery .caption').css({ opacity: 0.7 });

        //Resize the width of the caption according to the image width
       // $('#gallery .caption').css({ width: $('#gallery a').find('img').css('width') });

        //Get the caption of the first image from REL attribute and display it
        $('#gallery .content').html($('#gallery a:first').find('img').attr('rel'))
	.animate({ opacity: 0.7 }, 400);

        //Call the gallery function to run the slideshow, 6000 = change to next image after 6 seconds
        setInterval('gallery()', 6000);

    }

    function gallery() {

        //if no IMGs have the show class, grab the first image
        var current = ($('#gallery a.show') ? $('#gallery a.show') : $('#gallery a:first'));

        //Get next image, if it reached the end of the slideshow, rotate it back to the first image
        var next = ((current.next().length) ? ((current.next().hasClass('caption')) ? $('#gallery a:first') : current.next()) : $('#gallery a:first'));

        //Get next image caption
        var caption = next.find('img').attr('rel');

        //Set the fade in effect for the next image, show class has higher z-index
        next.css({ opacity: 0.0 })
	.addClass('show')
	.animate({ opacity: 1.0 }, 1000);

        //Hide the current image
        current.animate({ opacity: 0.0 }, 1000)
	.removeClass('show');

        //Set the opacity to 0 and height to 1px
        $('#gallery .caption').animate({ opacity: 0.0 }, { queue: false, duration: 0 }).animate({ height: '1px' }, { queue: true, duration: 300 });

        //Animate the caption, opacity to 0.7 and heigth to 100px, a slide up effect
        $('#gallery .caption').animate({ opacity: 0.7 }, 100).animate({ height: '30px' }, 500);

        //Display the content
        $('#gallery .content').html(caption);


    }