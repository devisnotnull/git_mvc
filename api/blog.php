<?php
	
$display = array('API Welcome Message' => 'ERROR NO BLOG API CONFIGURED');

header('Content-Type: application/json');
echo json_encode($display); ?>