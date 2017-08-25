<?
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
	$BaseLink	=	'http://202.61.43.40:8080/';
	$SiteURL	=	'http://202.61.43.40:8082/cases/search-result?CasesSearch%5BCASENAMECODE%5D=&CasesSearch%5BCASENO%5D=&CasesSearch%5BCASEYEAR%5D=&CasesSearch%5BCIRCUITCODE%5D=&CasesSearch%5BMATTERCODE%5D=&CasesSearch%5BPARTY%5D=&CasesSearch%5BGOVT_AGENCY_CODE%5D=&CasesSearch%5BFIRNO%5D=&CasesSearch%5BFIRYEAR%5D=&CasesSearch%5BPOLICESTATIONCODE%5D=&CasesSearch%5BADVOCATECODE%5D=&CasesSearch%5BisPending%5D=3&page=';
	
	//	Page pagination
	for($PageLoop = 0; $PageLoop < 2; $PageLoop++){

		$FinalURL	=	$SiteURL . $PageLoop . '&per-page=15';
		$Html		=	file_get_html($FinalURL);
		echo $html;
		}

?>
