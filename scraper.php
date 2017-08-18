<?
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
//
/** looping over list of ids of doctors **/
$site = 'http://202.61.43.40:8080/index.php?r=site%2Fsearchbyvalue&page=';
//This is for Pagination 
for($page = 0; $page < 1; $page++)
    {
        $FinalURL = $site . $page;
        $html = file_get_html($FinalURL);
    }

if($html ==true)
{
//This is for Table Scrapping
foreach($html->find("//*[@id='w0']/table/tbody/tr") as $element) 
	{

		if(is_object($element))
	{
	 	 $info['num'] 		= $element->find("td", 0)->plaintext;
		 $info['courtname']  	= $element->find("td", 1)->plaintext;
		 $info['caseno']  		= $element->find("td", 2)->plaintext;
		 $info['status']  		= $element->find("td", 3)->plaintext;
		 $href 			= $element->find(".//td/button", 0);
			
				 
	

	if(is_object($href))
	{
		 $urlbutton = $href->value;
			
			 $localvar = 'http://202.61.43.40:8080/' . $urlbutton;
			  
			
			
				echo $innerurl = file_get_content($localvar);
				
			
		 
	}
	}
	}}
	else{
		$html = file_get_html($FinalURL);
	}
?>
