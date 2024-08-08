<?

echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link rel="icon" href="http://www.apchem.pl/images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://www.apchem.pl/images/favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="file/jquery.min.js"></script>   
<script type="text/javascript" src="file/cookies.js"></script>

<link rel="stylesheet" href="images/style.css" />
<title>APCHEM Sp.J. Patrycja Bartosz-Kędzior, Adam Kędzior</title>

<meta name="keywords" content="dystrybutor surowców chemicznych, dystrybutor chemikaliów, surowce chemiczne, sprzedaż chemikaliów, kwas mrówkowy, kwas mrówkowy 85%, ług sodowy, kwas fosforowy, wodorotlenek sodu, wodorotlenek potasu, mrówczan wapnia, mrówczan sodu, octan butylu, octan etylu, alkohol n-butylowy, n-butanol, kwas propionowy, podchloryn sodu, glikol etylenowy, glikol propylenowy, izobutanol, chemikalia">
<meta name="description" content="APCHEM Sp.J. Patrycja Bartosz-Kędzior, Adam Kędzior - Sprzedaż i dystrybucja surowców chemicznych" />

</head>
<body>';



echo '<table border="0" cellspacing="0" cellpadding="0" style="width: 100%">
  <tr>
    <td align="center" valign="top">
    
<table border="0" cellspacing="0" cellpadding="0" style="width: 860px; background-color: #ffffff">
  <tr>
    <td colspan="3" style="background-image: url(images/back.jpg); background-position: left top; background-repeat : repeat-x">    
    
    <table border="0" cellspacing="0" cellpadding="0" style="width: 100%; margin-top: 20px">
      <tr> 
        <td align="left" valign="top" style="width: 50%">
		
	<table border="0" cellspacing="0" cellpadding="0" style="margin-top: 8px; margin-bottom: 10px; margin-left: 8px">
      <tr>
        <td><a href="http://apchem.pl/index.php"><img src="images/npl.gif" border="0"></a></td>
        <td><a href="http://apchem.pl/index.php"><img src="images/pl.gif" border="0"></a></td>
        <td style="width: 10px"></td>
        <td><a href="http://apchem.pl/en/index.php"><img src="images/ngb.gif" border="0"></a></td>
        <td><a href="http://apchem.pl/en/index.php"><img src="images/gb.gif" border="0"></a></td>
        <td style="width: 10px"></td>
      </tr>
    </table>
	
	</td>
        <td align="right" valign="top" style="width: 50%"></td>
      </tr>

	  <tr>
        <td colspan="3">
        <img src="images/apchem_baner_en.jpg" style="margin: 10px 0px 20px 0px" usemap="#linkmap">
		
		
<map name="linkmap">
	<area shape="rect" coords="561,0,860,95" alt="Apchem Sp.J." href="http://apchem.pl/en/">
	<area shape="rect" coords="632,115,695,170" alt="GMP+" href="index.php?go=certificates_and_awards&name=gmp#gmp">
	<area shape="rect" coords="700,115,790,170" alt="HACCP" href="index.php?go=certificates_and_awards&name=haccp#haccp">
</map>				
				
				
        </td>      
      </tr>';      

include('include/gazelle.php');

    echo '</table>
          
    </td>
  <tr>
    <td style="width: 240px" valign="top">';
       
include('include/menu.php');      
      
echo '</td>
    <td style="width: 40px"></td>
    <td style="width: 580px" valign="top" align="center">';
   

echo '
      <table border="0" cellspacing="0" cellpadding="0" style="margin: 20px 5px 60px 0px" class="ngrey">
        <tr>
          <td valign="bottom" style="width: 70px"><b>APCHEM</b>&nbsp;&mdash;&nbsp;</td>
          <td valign="top" style="width: 120px"><a href="http://www.perstorp.com" target="_blank"><img src="images/perstorp_winning_logo.jpg" border="0"></a></td>          
          <td valign="bottom"> distributor of selected chemical raw materials.</td>
        </tr>
		<td valign="top" colspan="3" style="font-size: 11px; padding-top: 4px">(formic acid, propionic acid, sodium and calcium formates and propionates,  n-butanol, 2-EH, TMP, NPG)</td>		
      </table>   
';   
   
/*   
      <table border="0" cellspacing="0" cellpadding="0" style="margin: 20px 5px 60px 0px" class="ngrey">
        <tr>
          <td valign="middle">We&nbsp;are&nbsp;a&nbsp;</td>
          <td valign="top">&nbsp;&nbsp;<a href="http://www.perstorp.com" target="_blank"><img src="images/perstorp_winning_logo.jpg" border="0"></a>&nbsp;&nbsp;</td>          
          <td valign="middle"> distributor of <a href="kch/kch - kwas mrowkowy.pdf" target="_blank"><b>formic</b></a> and <a href="kch/kch - kwas propionowy.pdf" target="_blank"><b>propionic</b></a> acid with in Poland.<br>
          We also distribute <b>sodium formate</b> and <b>calcium formate</b> both technical and feed grade</td>
        </tr>
      </table>
*/
   
   
echo '<table border="0" cellspacing="0" cellpadding="0" style="width: 570px; margin-bottom: 10px">
        <tr>
          <td valign="top">';
                
switch(@$_GET['go']) {
 
case 'contact':  
	include('include/contact.php');  
break;   

case 'product':  
	include('include/product.php');  
break;    

case 'personnel':  
	include('include/personnel.php');  
break;    

case 'about_us':  
	include('include/about_us.php');  
break;  

case 'suppliers':  
	include('include/suppliers.php');  
break;        

case 'warehouse':  
	include('include/warehouse.php');  
break;        

case 'reach':  
	include('include/reach.php');  
break;        

case 'data_sheets':  
	include('include/data_sheets.php');  
break;        

case 'sponsoring':  
	include('include/sponsoring.php');  
break;        

case 'certificates_and_awards':  
	include('include/certificates_and_awards.php');
break;        

default:
	include('include/home.php'); 

}                     
            
    echo '</td>
        </tr>
      </table>      

      </div>
    
    </td>    
  </tr>
  <tr>
    <td colspan="3">
    <div style="margin-top: 40px"><img src="images/px.gif" style="width: 100%; height: 1px"></div>
    
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td style="width: 180px; vertical-align: top"></td>
          <td style="width: 500px; vertical-align: top"><div class="small" style="margin: 10px 0px 10px 0px; text-align: center">Copyright &copy; Apchem Sp.J. All rights reserved. &nbsp;&nbsp;&nbsp;&nbsp;Site Map | <a href="index.php?go=contact">Contact</a> | <a href="index.php?go=about_us">About Us</a></div></td>
          <td style="width: 180px; vertical-align: top" align="right">';
		  
	echo "<div id=\"counter\" style=\"margin: 10px 10px 10px 0px\"></div>
	<script>
	$('#counter').load('file/counter.php');
	</script>";		  
		  
	echo '</td>		            
		</tr>
	  </table>    
      
    </td>
  </tr>
</table>


    </td>
  </tr>                                    
</table>';


echo '<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src=\'" + gaJsHost + "google-analytics.com/ga.js\' type=\'text/javascript\'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try{ 
var pageTracker = _gat._getTracker("UA-15786034-1");
pageTracker._trackPageview();
} catch(err) {} 
</script>';

  echo '</body>
</html>';

?>