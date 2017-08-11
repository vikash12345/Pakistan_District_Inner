<?
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
//
/** looping over list of ids of doctors **/
for($id = 0; $id <= 0; $id++)
	{
	 $url = ("http://202.61.43.40:8080/index.php?r=site%2Fsearchbyvalue&page=".$id);
	$link2 = file_get_html($url);
  foreach($link2->find("//*[@id='w0']/table/tbody/tr")as $element){
		if(is_object($element))
	{
	 	$info['num'] 		= $element->find("td", 0)->plaintext;
		$info['courtname']  	= $element->find("td", 1)->plaintext;
		$info['caseno']  	= $element->find("td", 2)->plaintext;
		$info['status']  	= $element->find("td", 3)->plaintext;
		$href 			= $element->find(".//td/button", 0);
			
			if(is_object($href))
	{
		 $info['urlbutton'] = $href->value;
				for($url = 0; $url <= sizeof($info['urlbutton']); $url++){
				echo (array_values($info['urlbutton'][$url]));
					
					
	    }
		 
	}
      
      
		}
	  
	  
// scraperwiki::save_sqlite(array('num'), array('num' => $info['num'],'courtname' => $info['courtname'],'caseno' => $info['caseno'],'status' => $info['status'],'urlbutton' => $info['urlbutton'] ));
		
  }
}
// called "data".
// called "data".
?>
