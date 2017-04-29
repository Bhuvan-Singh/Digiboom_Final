(function (){
	if(window.innerWidth>768){
		function scrollFunction(){
			var cover = document.getElementById("header-graphics");
			var coverback = document.getElementById("header-graphics-back");
			var airplane = document.getElementById("header-airplane");
			cover.style.top = -(window.pageYOffset/3.5)+"px";
			coverback.style.top = -(window.pageYOffset/7)+"px";
			// airplane.style.top = -(window.pageYOffset/5)+"px";
		}
	}
    // document.getElementById("menu-button").onclick = "hiddenmenu()";

	window.addEventListener("scroll",scrollFunction);
	
})();

document.getElementById("menu-button").onclick =  function showmenu(){
	
	document.getElementById("floating-menu").style.right = "0px";
	document.getElementById("floating-menu").style.animation = "mobile-menu-animation 1.2s forwards linear ";
}
document.getElementById("hide-menu-button").onclick = function(){
	document.getElementById("floating-menu").style.right = "-500px";
	document.getElementById("floating-menu").style.animation = "mobile-menu-animation 1.2s forwards linear ";
	}

function _(id){ return document.getElementById(id); }


function submitForm(){
	// alert('working');
	_("submitEnquiryMail").disabled = true;
	_("status").innerHTML = 'please wait ...';
	// _("status").classList.remove("mailFail");
	// _("status").classList.remove("mailSuccess");
	if((_("yourName").value).length == 0){
		_("name").style.border = "2px solid #F25F5C";
		_("yourName").style.borderLeft = "2px solid #F25F5C";
		// alert("working");
	}
	else if((_("yourName").value).length > 0){
		_("name").style.border = "2px solid #999";
		_("yourName").style.borderLeft = "2px solid #999";
		// alert("working");
	} 


	if((_("yourEmail").value).length == 0){
		_("email").style.border = "2px solid #F25F5C";
		_("yourEmail").style.borderLeft = "2px solid #F25F5C";
		// alert("working");
	}
	else if((_("yourEmail").value).length > 0){
		_("email").style.border = "2px solid #999";
		_("yourEmail").style.borderLeft = "2px solid #999";
		// alert("working");
	}


	if((_("yourSubject").value).length == 0){
		_("subject").style.border = "2px solid #F25F5C";
		_("yourSubject").style.borderLeft = "2px solid #F25F5C";
		// alert("working");
	}
	if((_("yourSubject").value).length > 0){
		_("subject").style.border = "2px solid #999";
		_("yourSubject").style.borderLeft = "2px solid #999";
		// alert("working");
	}


	if((_("yourMessage").value).length == 0){
		_("message").style.border = "2px solid #F25F5C";
		_("yourMessage").style.borderLeft = "2px solid #F25F5C";
		// alert("working");
	}
	if((_("yourMessage").value).length >0){
		_("message").style.border = "2px solid #999";
		_("yourMessage").style.borderLeft = "2px solid #999";
		// alert("working");
	}



	var form = _('enquireaboutservices');
	var formdata = new FormData();
	formdata.append( "name", _("yourName").value );
	formdata.append( "email", _("yourEmail").value );
	formdata.append( "subject", _("yourSubject").value );
	formdata.append( "message", _("yourMessage").value );
	var ajax = new XMLHttpRequest();
	ajax.open( "POST", "enquiremail.php" );
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			if(ajax.responseText == "success"){
				_("status").innerHTML = 'Thankyou '+_("yourName").value+', we have recieved your mail. Our team will get in touch with you shortly.';
				form.reset();
				_("status").classList.add("mailSuccess");
				_("status").classList.remove("mailFail");
			} 
			else {
				_("status").innerHTML = ajax.responseText;
				_("submitEnquiryMail").disabled = false;
				_("status").classList.add("mailFail");
				_("status").classList.remove("mailSuccess");

			}
		}
	}
	ajax.send( formdata );
}




function submitNumber(){
	// alert('working');
	_("submit-button").disabled = true;
	_("status").innerHTML = 'please wait ...';
	// _("status").classList.remove("mailFail");
	// _("status").classList.remove("mailSuccess");
	var form = _('mobile-form');
	var formdata = new FormData();
	formdata.append( "userNumber", _("mobileNumber").value );
	var ajax = new XMLHttpRequest();
	ajax.open( "POST", "mobile.php" );
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			if(ajax.responseText == "success"){
				_("status").innerHTML = 'Thankyou , we have recieved your Number. Our team will get in touch with you shortly.';
				form.reset();
				_("status").classList.add("mailSuccess");
				_("status").classList.remove("mailFail");
			} 
			else {
				_("status").innerHTML = ajax.responseText;
				_("submit-button").disabled = false;
				_("status").classList.add("mailFail");
				_("status").classList.remove("mailSuccess");

			}
		}
	}
	ajax.send( formdata );
}


function scrollFunction(){
	
		if(window.pageYOffset> _("what-we-do").offsetTop-250){
			var whatwedo = document.getElementsByClassName("subheading-container");
			whatwedo[0].style.animation = "fade-in-animation 1.5s linear forwards";
			whatwedo[1].style.animation = "fade-in-animation 1.5s linear forwards";
			console.log(_("what-we-do-heading").offsetTop);
		}


		if(window.pageYOffset> _("we-can-help-container").offsetTop + _("what-we-do").offsetTop-250){
			var wecanhelp = document.getElementsByClassName("service-tile");
			var i =0;
			while(i < wecanhelp.length){
				wecanhelp[i].style.animation = "service-tiles-animation 1s linear forwards";
				i++;
			}
		}

		if(window.pageYOffset> _("monetize").offsetTop-250){
			var mon = document.getElementsByClassName("monetize-block-class");
			var m = 0;
			while(m< mon.length){
				mon[m].style.animation = "monetize-tiles-animation .9s linear forwards";
				m++;
				document.getElementsByClassName("monetize-block-content-two").animationDelay = "0.5s";
			}
		}

		if(window.pageYOffset > _("get-mobile-container").offsetTop-250){
			_("getMobileHeading").style.animation ="fade-in-animation 1.4s linear forwards" ;
			_("getMobileSubHeading").style.animation ="fade-in-animation 1.4s linear forwards" ;
			_("get-mobile").style.animation ="fade-in-animation 1.4s linear forwards" ;

		}

		if(window.pageYOffset> _("our-team").offsetTop-250){
			var team = document.getElementsByClassName("team-member");
			var t = 0;
			while(t< team.length){
				team[t].style.animation = "team-animation 0.5s linear forwards ";
				t++;
				
			}
		}


	}

window.addEventListener("scroll",scrollFunction);