<?php 
 if($_GET["function"] == "getHealthCalculation")
	 {
	   echo getHealthCalculation();
	   
	 }
   
	
  	 function getHealthCalculation(){
  	 	include '../db-config.php';
		
		
		
        $results = $conn->query("SELECT trust,totalLess from evaluatehealth ORDER BY id DESC LIMIT 1");
       
	
	   
   echo $results;
	   $dataSet= [];
		foreach ($results as $key => $value) {
			array_push($dataSet, [$value['trust'],$value['totalLess']]);
		}
        return json_encode ($dataSet);
     
	    
	  }
?>