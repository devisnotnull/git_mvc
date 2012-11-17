<?php 

foreach($loop as $blog_item):
	
	echo '<div><h1>'.$blog_item['name'].'</h1></div>';
	echo '<div>'.$blog_item['message'].'</div>';
	echo '<div>'.$blog_item['date'].'</div>';

endforeach;