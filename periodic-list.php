<?php 

// if the 'term' variable is not sent with the request, exit
if ( !isset($_REQUEST['term']) )
	exit;

$dblink = mysql_connect('localhost','testuser','testpwd','sam1') or die( 'Could not connect: '. mysql_error() );

mysql_select_db('sam1');

$rs = mysql_query('
SELECT id,name,symbol 
FROM PeriodicTable
WHERE name like "%'. mysql_real_escape_string($_REQUEST['term']) .'%" 
OR id = "'. mysql_real_escape_string($_REQUEST['term']) .'"
order by name
LIMIT 0,10
');

$data = array();

if ( $rs && mysql_num_rows($rs) )
{
	while ( $row = mysql_fetch_array($rs, MYSQL_ASSOC) )
	{
		$data[] = array(
				// Hg - Mercury
				'label' => $row['symbol'] .' - '. $row['name'] . ' (#' . $row['id'] .')',
				'value' => $row['name']
			);
	}
}

echo json_encode($data);
flush();