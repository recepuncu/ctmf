<?php



error_reporting(E_ALL);
ini_set('display_errors', 1);

/*

if (!isset($_SESSION)) {
  session_start();
}

if($_GET["dXVpZA"] <> $_SESSION['dXVpZA']){
	http_response_code(403);
	die();
}
*/

header('Content-Type: text/html; charset=UTF-8');

if($_GET["bWV0aG9k"]=="cHJvZHVjdF9saXN0"){
	
	$c2VhcmNoX3dvcmQ = "LG+G4+32+GB";
	if(isset($_GET["c2VhcmNoX3dvcmQ"]) && !empty($_GET["c2VhcmNoX3dvcmQ"])){
		$c2VhcmNoX3dvcmQ = str_replace(" ", "+", $_GET["c2VhcmNoX3dvcmQ"]);
	}
	
	// ***** CONSTS *****
	$site_url = "http://www.n11.com/".$_GET['c2VhcmNoX2NhdGVnb3J5']."?q={$c2VhcmNoX3dvcmQ}&srt=PRICE_LOW";
	$site = file_get_contents( $site_url );
	$dom = new DOMDocument;
	libxml_use_internal_errors(true);
	//$dom->loadHTML(mb_convert_encoding($site, 'HTML-ENTITIES', 'UTF-8'));		
	$dom->loadHTML($site);
	$xpath = new DOMXPath($dom);
	
	$rows = $xpath->query('//div[@id="view"]//li[contains(@class, "column")]');
	
	$table = array();
	$table_row = array();
	
	foreach($rows as $row){
		$cols = $row->childNodes;
		
		$table_row["sallerName"] = "";
		$sallerName = $xpath->query('.//span[contains(@class, "sallerName")]', $row);	
		if($sallerName->length>0)
			$table_row["sallerName"] = trim($sallerName->item(0)->textContent);	
		
		$table_row["sallerInfo"] = "";
		$sallerInfo = $xpath->query('.//a[contains(@class, "sallerInfo")]/@href', $row);	
		if($sallerInfo->length>0)
			$table_row["sallerInfo"] = trim($sallerInfo->item(0)->textContent);		
		
		$table_row["productName"] = "";
		$productName = $xpath->query('.//h3[contains(@class, "productName")]', $row);	
		if($productName->length>0)
			$table_row["productName"] = trim($productName->item(0)->textContent);
	
		$table_row["price"] = "";
		$price = $xpath->query('.//a[contains(@class, "newPrice")]/ins', $row);	
		if($price->length>0)
			$table_row["price"] = trim($price->item(0)->textContent);
			
		$table_row["url"] = "";
		$url = $xpath->query('.//a[contains(@itemprop, "url")]/@href', $row);	
		if($url->length>0)
			$table_row["url"] = trim($url->item(0)->textContent);	
				
		$table_row["proStatus"] = "";
		$proStatus = $xpath->query('.//div[contains(@class, "proStatus")]/span', $row);	
		if($proStatus->length>0)
			$table_row["proStatus"] = trim($proStatus->item(0)->textContent);	
		
		$table[] = $table_row;
	}
	
	header('Content-Type: application/json; charset=utf-8');
	echo json_encode($table);
	return;
}

