
<?php

if(!isset($_POST['file_name'])){
	$file = ($_POST['file_name']);
	header('Content-Type: application/docx');  
	header('Content-Disposition: attachment; filename="'.$file.'"');
	readfile('$assets/'.$FatmaGürel); 
		exit;
	}
?>
