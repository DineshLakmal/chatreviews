<?php 
include '../db-config.php';

 
 $pathToJarfile = "java -jar C:\Users\user\Documents\NetBeansProjects\Detect_topic_learning_DMW\dist\Emotion_extraction.jar ". $messageText;
    exec($pathToJarfile, $emotion_found);
	$emotion=$emotion_found;
    $emotion= implode(" ", $emotion_found);
	echo $emotion;
	
	
 
$sql = "UPDATE emotion SET emotion_count= emotion_count+1  WHERE emotion_id = '" .$emotion."'";

$conn->query($sql);



//session review table upadte quary starts----------------------------------------------------------------------

    $emotion001_c=0;
    $emotion002_c=0;
    $emotion003_c=0;
    $emotion004_c=0;
    $emotion005_c=0;
    $emotion006_c=0;
    $emotion007_c=0;

    $count=1;

    $sqlt="SELECT emotion_count FROM  emotion";
    $result = $conn->query($sqlt);
    while($row = $result->fetch_assoc()) {
        ${"emotion00".$count."_c"} =$row["emotion_count"];
      
          $count++;
    }
    
    $toatal_emotion_count= $emotion001_c+ $emotion002_c+ $emotion003_c+ $emotion004_c+ $emotion005_c+ $emotion006_c+ $emotion007_c;
   

    $positive_emotions_rate=calPositivePercentage_emotions($emotion004_c, $emotion005_c, $emotion007_c, $toatal_emotion_count);  


    $sqlt="UPDATE session_review SET positive_emotions =  ".$positive_emotions_rate."  WHERE `session_review`.`cs_id` = 'test_s001';";
    $conn->query($sqlt);
//session review table upadte quary end------------------------------------------------------------------------- 
   

  function calPositivePercentage_emotions($emotion004_c, $emotion005_c, $emotion007_c, $toatal_emotion_count){
         
         $val= (($emotion004_c+ $emotion005_c+ $emotion007_c)*100)/$toatal_emotion_count;

        return $val;
   }


?>