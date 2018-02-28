<?php 
     
	 if($_GET["function"] == "getEmotionStatistics")
	 {
	   echo getEmotionStatistics();
	 }
  
  	 function getEmotionStatistics(){
  	 	include '../db-config.php';
        $results = $conn->query("SELECT emotion_text, emotion_count from emotion");
        $dataSet= [];
		foreach ($results as $key => $value) {
			array_push($dataSet, ['test',23]);
		}
        return json_encode ($dataSet);
     }
	 
?>