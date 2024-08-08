// Proszê nie zmieniaæ ¿adnego komentarza w kodzie
// Jest to warunek legalnego wykorzystania
//
// Autor skryptu - Hubert 'Komeniusz' Grabowski
// Wersja 1.0
// http://blog.grabowski.ostrowwlkp.pl
// http://blog.grabowski.ostrowwlkp.pl/webmastering/skrypt-informujacy-o-wykorzystywaniu-cookies-na-stronie
//
// Funkcje pomocnicze pobrane z
// http://www.w3schools.com/js/js_cookies.asp
function setCookie(c_name,value,exdays)
{
var exdate=new Date();
exdate.setDate(exdate.getDate() + exdays);
var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
document.cookie=c_name + "=" + c_value;
}
function getCookie(c_name)
{
var i,x,y,ARRcookies=document.cookie.split(";");
for (i=0;i<ARRcookies.length;i++)
{
  x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
  y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
  x=x.replace(/^\s+|\s+$/g,"");
  if (x==c_name)
    {
    return unescape(y);
    }
  }
}
 
$(document).ready(function() {
	var message = 'We use cookies to help you use our services and for statistical purposes. If you are not blocking these files, you agree to use them and store in memory. Remember that you can manage cookies by changing your browser settings.';
	var message2 = 'I UNDERSTAND THAT DO NOT SHOW MORE THIS WINDOW.';
 
	var div = '<div class="cookie-alert" style="position:relative;top:0;width:100%;text-align:center;background-color:#F1EEE7;color:#3C3C3C;opacity:0.8;font-size:13px;font-weight:bold;font-family:tahoma;padding-top:20px;padding-bottom:20px;"><div style="width:800px;margin:0 auto;">'+message+'<br /><br /><span style="color:red;cursor:pointer;" class="cookie-alert2">'+message2+'</span></div></div>';
 
	var ciastko = getCookie('cookie-alert');
	if(ciastko != 1) {
		$('body').prepend(div);
	}
 
	$('.cookie-alert2').click(function() {
		$('.cookie-alert').slideUp('slow');
		setCookie('cookie-alert', 1, 365);
	});
});

