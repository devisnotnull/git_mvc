<?php
	
$display = array('API Welcome Message' => 'ERROR NO USER API CONFIGURED');

header('Content-Type: application/json');
echo json_encode($display); ?>