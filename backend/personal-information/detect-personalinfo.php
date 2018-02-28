<?php 
    include '../db-config.php';
    include '../include.php';
    // $pathToJarfile = "java -jar C:\Users\user\Documents\NetBeansProjects\Detect_Topic\dist\Detect_Topic.jar ".$message_key_phrases;
     $pathToJarfile = "java -jar C:\Users\user\Documents\NetBeansProjects\personalinfo\dist\personalinfo.jar";
     exec($pathToJarfile);
     // ----- block
     //$topic= implode(" ",$topic_found);
    // $currentTopic=$topic;
    // var_dump($currentTopic);
   //echo  $topic_found;
   // echo $topic;
   // print_r($topic);
    // $totalMsg=0;
    

   // ------update message count with correct message count
     $sqlt="UPDATE personal_info SET  msgcount =  ".$totalMsg." ;";
    $conn->query($sqlt);


    //session review table upadte quary starts----------------------------------------------------------------------

    $pinfo_001=0;
    

    $count=1;

    $sqlt="SELECT   infocount  FROM  personal_info";
    $result = $conn->query($sqlt);
    while($row = $result->fetch_assoc()) {
        $pinfo_001 =$row[" infocount"];
      
          $count++;
    }
    
 

    $personalInfo_rate=calPersonalInfo($pinfo_001, $totalMsg);  


    $sqlt="UPDATE session_review SET  personal_info =  ".$personalInfo_rate."  WHERE `session_review`.`cs_id` = 'test_s001';";
    $conn->query($sqlt);
    //session review table upadte quary end------------------------------------------------------------------------- 
   

  function calPersonalInfo($pinfo_001, $totalMsg){
         
         $val= ($pinfo_001*100)/$totalMsg;
         
          return $val;
   }


?>