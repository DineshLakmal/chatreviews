<?php 
include '../db-config.php';

    $sql ="SELECT count(*) as count FROM  messages";
    $result = $conn->query($sql);
   
    while($row = $result->fetch_assoc()) {
      $totalMsg =$row["count"];
    }
     	
	echo $totalMsg;
 
 
    $pathToJarfile = "java -jar C:\Users\user\Documents\NetBeansProjects\Detect_topic_learning_DMW\dist\member3.jar";
    exec($pathToJarfile, $evaluateHealty_found);
	$trust=$evaluateHealty_found;
    $trust= implode(" ", $evaluateHealty_found);
    echo $trust;
	
	
	 
    $total = $totalMsg - $trust;
	
    echo $total;
	
	$sql = "INSERT INTO evaluatehealth (msghealthCount, trust, totalLess) VALUES (".$totalMsg.",".$trust.", ".$total.")";
	$conn->query($sql);


 // session review table upadte quary starts----------------------------------------------------------------------
    $sql="SELECT trust, totalLess from evaluatehealth ORDER BY id DESC LIMIT 1";
    $result = $conn->query($sql);
     
     while($row = $result->fetch_assoc()) {
        $trust=$row['trust'];
        $totalless=$row['totalLess'];
     }

    $healthymessages=$trust;
   
    $healthiness_rate=calHealthiness($healthymessages, $totalMsg);      
    $sqlt="UPDATE session_review SET healthiness =  ".$healthiness_rate."  WHERE `session_review`.`cs_id` = 'test_s001';";
    $conn->query($sqlt);
// session review table upadte quary end------------------------------------------------------------------------- 
 

 function calHealthiness($healthymessages, $totalMsg){
         
         $val=($healthymessages*100)/$totalMsg;

        return $val;
 }
	

?>