<?php include("config.php"); ?>
<?php include("compiler.php"); ?>

<h1><?php echo $config->title; ?></h1>
<h3>Front End Development platform</h3>

<h4>Files:</h4>
<?php

$files = scandir('./');

$hidden_files = array("compiler.php",
					  "config.php",
					  "index.php");

?>
<ul>
<?php
foreach($files as $file): ?>
		
	<?php
		$path_parts = pathinfo($file);
		if(!isset($path_parts['extension'])) continue;
		if($path_parts['extension'] == "html" || $path_parts['extension'] == "php" && !in_array($path_parts["basename"], $hidden_files)) :
	?>
		
	<li style="margin-top: 5px;"><a href="<?php echo $file; ?>"><?php echo $file; ?></a></li>
	
	<?php endif; ?>
	
<?php endforeach; ?>

</ul>


<h4>Examples:</h4>
<?php

$examples_folder = "bootstrap-examples";
$files = scandir($examples_folder);

?>
<ul>
<?php
foreach($files as $file): ?>
		
	<?php
		$path_parts = pathinfo($file);
		if(!isset($path_parts['extension'])) continue;
		if($path_parts['extension'] == "html" || $path_parts['extension'] == "php" && !in_array($path_parts["basename"], $hidden_files)) :
	?>
		
	<li style="margin-top: 5px;"><a href="<?php echo $examples_folder; ?>/<?php echo $file; ?>"><?php echo $file; ?></a></li>
	
	<?php endif; ?>
	
<?php endforeach; ?>

</ul>

<?php

if($rc == 0) {
	echo "<h4 style='color:green;'>LESS compiled successfully</h4>";	
}
else {
	echo "<h4 style='color:red;'>ERROR compiling <u><i>".$config->less_compiler->less_file."</i></u> in <u><i>".$config->less_compiler->css_file."</i></u></h4>";
	print_r( $output);
	echo 'rc = '.$rc."\n";
}
?>

