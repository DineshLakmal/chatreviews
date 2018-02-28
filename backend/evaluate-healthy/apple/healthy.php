<?php 
include '../db-config.php';

    $sql ="SELECT count(*) as count FROM  messages";
    $result = $conn->query($sql);
   
    while($row = $result->fetch_assoc()) {
      $totalMsg =$row["count"];
    }
     	
	echo $totalMsg;
 
 
    $pathToJarfile = "java -jar C:\Users\HP\Documents\opennlp-examples-master\dist\member3.jar";
    exec($pathToJarfile, $evaluateHealty_found);
	$trust=$evaluateHealty_found;
    $trust= implode(" ", $evaluateHealty_found);
echo $trust;
	
	
	 
	$total = $totalMsg - $trust;
	
 echo $total;
	
	$sql = "INSERT INTO evaluatehealth (msghealthCount, trust, totalLess) VALUES (".$totalMsg.",".$trust.", ".$total.")";
	 $conn->query($sql);
	
	
	

	
	
	
	
	



?>