<?php

define('ga_email','server10.labs@gmail.com');
define('ga_password','M22cv416p');
define('ga_profile_id','31468937');

require 'gapi.class.php';
$ga = new gapi(ga_email,ga_password);
$ga->requestReportData(ga_profile_id,array('browser','browserVersion'),array('pageviews','visits'));


echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>Google Analytics Statistics - www.webresourcesdepot.com</title>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {   
						   
	$("#statsPageviews").hide();
	$("#statsVisits").hide();
	$("#statsPageviewsText").hide();
	$("#statsVisitsText").hide();
	rotateMetrics(); 

	function rotateMetrics() {
		$("#statsPageviewsText").slideDown("slow");
		$("#statsPageviews").slideDown("slow", function() {
			setTimeout(function() {
				$("#statsPageviewsText").slideUp("slow");
				$("#statsPageviews").slideUp("slow", function() {
					$("#statsVisitsText").slideDown("slow");
					$("#statsVisits").slideDown("slow", function() {
						setTimeout(function() {
							$("#statsVisitsText").slideUp("slow");
							$("#statsVisits").slideUp("slow", function() {
								rotateMetrics();
							}); 
						}, 3000);
					}); 
				}); 
			}, 3000);
		});
		 
	}
}); 
</script>

<style>                   
#statsWrap {
	font-family: Tahoma, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
#statsDetailsWrap {
	background: #EEEEEE;
	float: left;
	padding: 1px 3px 1px 1px;
}
#statsCount {
	float: left;
	padding: 1px 3px;
	background: #FFFFFF;
	color: #333333;
	width: 40px;
	height: 12px;
}
#statsMetric {
	float: left;
	padding: 0px 3px;
	color: #333333;
	width: 40px;
	height: 12px;
}
#byGoogle {
	clear: both;
	color: #666666;
	padding-top: 1px;	
	font-size: 9px;
	text-align: center;
}
</style>
</head>
<body>';

/*
echo '<div id="statsWrap">
	<div id="statsDetailsWrap">
		<div id="statsCount">
			<span id="statsPageviews">'.$ga->getPageviews().'</span>
			<span id="statsVisits">'.$ga->getVisits().'</span>
		</div>
		<div id="statsMetric">
			<span id="statsPageviewsText">&nbsp;ods&#322;on</span>
			<span id="statsVisitsText">&nbsp;wizyt</span>
		</div>
	</div>
	<div id="byGoogle">by <a href="http://www.google.com/analytics/" target="_blank">Google Analytics</a></div>
</div>';
*/


echo '<table border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td>
			<div id="statsWrap">
				<div id="statsDetailsWrap">
					<div id="statsCount">
						<span id="statsPageviews">'.$ga->getPageviews().'</span>
						<span id="statsVisits">'.$ga->getVisits().'</span>
					</div>
					<div id="statsMetric">
						<span id="statsPageviewsText">&nbsp;ods&#322;on</span>
						<span id="statsVisitsText">&nbsp;wizyt</span>
					</div>
				</div>
				<div id="byGoogle">by <a href="http://www.google.com/analytics/" target="_blank">Google Analytics</a></div>
			</div>				
		</td>
	</tr>	
<table>';


echo '</body>
</html>';


?>