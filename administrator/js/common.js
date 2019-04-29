function showhidevideo(value)
{	
    var sVideo = document.getElementById("showvideo");
	var sYoutube = document.getElementById("showyoutube");
	if(value == "youtube")
	{
	 sYoutube.style.display = "block";
	 sVideo.style.display = "none";
	}
	else if(value == "upload")
	{
	  sYoutube.style.display = "none";
	  sVideo.style.display = "block";
	}
	
}

function confirmSubmit() {
  var msg;
  msg= "Are you sure you want to delete ? ";
  var agree=confirm(msg);
  if (agree)
  return true ;
  else
  return false ;
  }