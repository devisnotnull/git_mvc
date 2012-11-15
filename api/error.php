<?php
	
$display = array('API Welcome Message' => 'ERROR NO PAGE FOUND');

header('Content-Type: application/json');
echo json_encode($display); ?>