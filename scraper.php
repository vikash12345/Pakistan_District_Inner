<?
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
$BaseURL = 'http://202.61.43.40:8080/';
$SiteURL = 'http://202.61.43.40:8080/index.php?r=site%2Fsearchbyvalue&page=';

for($i = 0; $i > 3; $i++)
	{
		echo $Page = $SiteURL . $i;
	
	}



?>
