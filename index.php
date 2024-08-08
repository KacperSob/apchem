<?php

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
        <td align="right" valign="top" style="width: 50%">    

        </td>
      </tr>
	  <tr>
        <td colspan="3">
        <img src="images/apchem_baner_pl.jpg" style="margin: 10px 0px 20px 0px" usemap="#linkmap">
		
<map name="linkmap">
	<area shape="rect" coords="561,0,860,95" alt="Apchem Sp.J." href="http://apchem.pl">
	<area shape="rect" coords="632,115,695,170" alt="GMP+" href="index.php?go=certyfikaty_i_nagrody&name=gmp#gmp">
	<area shape="rect" coords="700,115,790,170" alt="HACCP" href="index.php?go=certyfikaty_i_nagrody&name=haccp#haccp">
</map>
				
        </td>      
      </tr>';      

include('include/gazele.php');

    echo '</table>
          
    </td>
  <tr>
    <td style="width: 240px" valign="top">';

       
include('include/menu.php');      
      
echo '</td>
    <td style="width: 40px"></td>
    <td style="width: 580px" valign="top">    
    	  
      <table border="0" cellspacing="0" cellpadding="0" style="margin: 20px 5px 60px 0px" class="ngrey">
        <tr>
          <td valign="bottom" style="width: 175px"><b>APCHEM</b>&nbsp;&mdash;&nbsp;dystrybutor firmy&nbsp;</td>
          <td valign="top" style="width: 120px"><a href="http://www.perstorp.com" target="_blank"><img src="images/perstorp_winning_logo.jpg" border="0"></a></td>          
          <td valign="bottom"> na wybrane surowce chemiczne</td>
        </tr>
		<td valign="top" colspan="3" style="font-size: 11px; padding-top: 4px">(kwas mrówkowy, propionowy, mrówczany i propioniany wapnia i sodu oraz n-butanol, 2-EH, TMP, NPG)</td>		
      </table>	  
	  
      <table border="0" cellspacing="0" cellpadding="0" style="width: 570px; margin-bottom: 10px">
        <tr>
          <td valign="top">';
                
switch(@$_GET['go']) {

  case 'o_firmie':  
  
    include('include/o_firmie.php');  
  
  break;

  case 'karty_charakterystyk_surowcow':  
  
    include('include/karty_charakterystyk_surowcow.php');  
  
  break;
  
  
  case 'oferta_surowcow':  
  
    include('include/oferta_surowcow.php');  
  
  break;  
/*
  case 'przemysl_poligraficzny':  
  
    include('include/przemysl_poligraficzny.php');  
  
  break;
*/

  case 'dostawcy':  
  
    include('include/dostawcy.php');  
  
  break;

/*  
  case 'przemysl_paszowy':  
  
    include('include/przemysl_paszowy.php');  
  
  break;
 
  
  case 'przemysl_farb_i_lakierow':  
  
    include('include/przemysl_farb_i_lakierow.php');  
  
  break;
*/ 

  case 'personel':  
  
    include('include/personel.php');  
  
  break;  
  
  case 'kontakt':  
  
    include('include/kontakt.php');  
  
  break;   
  

  case 'certyfikaty_i_nagrody':  
  
    include('include/certyfikaty.php');  
  
  break;

  
  case 'magazyn':  
  
    include('include/magazyn.php');  
  
  break;
  
  case 'reach':  
  
    include('include/reach.php');  
  
  break;


  case 'sponsoring':  
  
    include('include/sponsoring.php');  
  
  break;  

  
  case 'rodo':  
  
    include('include/rodo.php');  
  
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
          <td style="width: 500px; vertical-align: top"><div class="small" style="margin: 10px 0px 10px 0px; text-align: center">Copyright &copy; Apchem Sp.J. Wszelkie prawa zastrzeżone. &nbsp;&nbsp;&nbsp;&nbsp;Mapa serwisu | <a href="index.php?go=kontakt">Kontakt</a> | <a href="index.php?go=o_firmie">O Firmie</a></div></td>
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