<?php

if (!isset($_SESSION)) {
  session_start();
}

header('Content-Type: text/html; charset=UTF-8');

if($_GET["dXVpZA"] <> $_SESSION['dXVpZA']){
	http_response_code(403);
	die();
}

if($_GET["bWV0aG9k"]=="cHJvZHVjdF9saXN0"){
	
	$c2VhcmNoX3dvcmQ = "samsung+note+4";
	if(isset($_GET["c2VhcmNoX3dvcmQ"]) && !empty($_GET["c2VhcmNoX3dvcmQ"])){
		$c2VhcmNoX3dvcmQ = str_replace(" ", "+", $_GET["c2VhcmNoX3dvcmQ"]);
	}
	
	// ***** CONSTS *****
	$site_url = "http://www.n11.com/telefon-ve-aksesuarlari/cep-telefonu?q={$c2VhcmNoX3dvcmQ}&srt=PRICE_LOW";
	$site = file_get_contents( $site_url );
	$dom = new DOMDocument;
	libxml_use_internal_errors(true);
	$dom->loadHTML(mb_convert_encoding($site, 'HTML-ENTITIES', 'UTF-8'));
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
		
		$table_row["productName"] = "";
		$productName = $xpath->query('.//h3[contains(@class, "productName")]', $row);	
		if($productName->length>0)
			$table_row["productName"] = trim($productName->item(0)->textContent);
	
		$table_row["price"] = "";
		$price = $xpath->query('.//ins[contains(@itemprop, "price")]', $row);	
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

