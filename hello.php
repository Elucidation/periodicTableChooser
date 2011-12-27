<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?> 
 <p>Blah</p>
 <?php 
 	$data = array();
 	$data[] = "Yo";
 	$data[] = "Boop";
 	echo json_encode($data);
 ?>
 <p>And Info:</p>
 <?php phpinfo(); ?>

 </body>
</html>