<?php 

// if the 'term' variable is not sent with the request, exit
if ( !isset($_REQUEST['term']) )
	exit;

echo json_encode(["bloop","abpc"]);
flush();