<?php

/**
 * 
 * This is a class meant to help in playing with the API code.  If this package is placed in your httdocs, you can call as shown below...
 * http://localhost/apiwrapper/trunk/?apiKey=B191-RR27-Z8GF-CEVF&subdomain=integrationtest&domain=localhost&method=getUsers
 *
 * @author Timothy S Sabat!
 */
require_once('WufooApiExamples.php');


$apiKey = $_GET['apiKey'];
$subdomain = $_GET['subdomain'];
$domain = $_GET['domain'];

$getUsers = new WufooApiExamples($apiKey, $subdomain, $domain);
	//print_r($getUsers->$_GET['method']($_GET['id']));

$userObject = $getUsers->$_GET['method']($_GET['id']);

$userEmail = $userObject['n1ird8yw13nk6g2']->Email;
$userUser = $userObject['n1ird8yw13nk6g2']->User;
$userApiKey = $userObject['n1ird8yw13nk6g2']->ApiKey;
$userForms = $userObject['n1ird8yw13nk6g2']->LinkForms;
$userLinkReports = $userObject['n1ird8yw13nk6g2']->LinkReports;

$data .= "<ul>";
$data .= "<li>" . $userEmail . "</li>";
$data .= "<li>" . $userUser . "</li>";
$data .= "<li>" . $userApiKey . "</li>";
$data .= "<li>" . $userForms . "</li>";
$data .= "<li>" . $userLinkReports . "</li>";
$data .= "</ul>";

echo $data;


echo "<br /><br />";


$getFormEntries  = new WufooApiExamples($apiKey, $subdomain, $domain);
	print_r($getFormEntries->getEntries('sandbox-form', 'forms', ''));

$userEntryObject = $getFormEntries->getEntries('sandbox-form', 'forms', '');

$total = count((array)$userEntryObject);


//echo $total;

echo "<br />";


for ($i=1; $i<=$total; $i++) {

	$entryFirstname = $userEntryObject[$i]->Field1;
	$entryEmail = $userEntryObject[$i]->Field5;

	$formData .= "<ul>";
	$formData .= "<li>" . ;
	$formData .= "</ul>";
	echo $entryFirstname;
}

/*for ($x=1; $x<$total; $x++) {
	//$entryFirstname = $userEntryObject[$i]->Field1;

	echo $x;
}*/

/*function print_a($subject){
	echo str_replace("=>","&#8658;",str_replace("Array","<font color=\"red\"><b>Array</b></font>",nl2br(str_replace(" "," &nbsp; ",print_r($subject,true)))) . '<br />');
}*/

?>