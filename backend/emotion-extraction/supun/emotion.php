<?php 
include '../db-config.php';

 
 $pathToJarfile = "java -jar C:\Users\User\Documents\NetBeansProjects\Emotion_extraction\dist\Emotion_extraction.jar When a close friend of mine who was with me in first year could not make it to the second year.";
    exec($pathToJarfile, $emotion_found);
	$emotion=$emotion_found;
    $emotion= implode(" ", $emotion_found);
	echo $emotion;
	
	
 
$sql = "UPDATE emotion SET emotion_count= emotion_count+1  WHERE emotion_id = '" .$emotion."'";
mysql_query($sql);
mysql_close($conn);



?>