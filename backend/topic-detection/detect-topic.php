<?php 
     include '../db-config.php';
     // include '../key-phrases.php';

     //$pathToJarfile = "java -jar C:\Users\user\Documents\NetBeansProjects\Detect_topic_learning_2.0\dist\Detect_topic_learning.jar ".$message_key_phrases;
  
    $pathToJarfile = "java -jar C:\Users\user\Documents\NetBeansProjects\Detect_topic_learning_2.0\dist\Detect_topic_learning.jar ".$messageText;

     exec($pathToJarfile, $topic_found);
     // ----- block
     $topic= implode(" ",$topic_found);
     $currentTopic=$topic;
  
    $totalMsg=0;
    
    $topic_p_array=array();

    $topic001_p=0;
    $topic002_p=0;
    $topic003_p=0;
    $topic004_p=0;
    $topic005_p=0;
    $topic006_p=0;
    $topic007_p=0;

    $count=1;

    $sqlt="SELECT percentage FROM  topic";
    $result = $conn->query($sqlt);
    while($row = $result->fetch_assoc()) {
        ${"topic00".$count."_p"} =$row["percentage"];
      
          $count++;
    }
    echo $topic001_p." ".$topic002_p." ".$topic003_p." ".$topic004_p." ".$topic005_p." ".$topic006_p." ".$topic007_p;


    $sqlt="SELECT count(*) as count FROM  messages";
    $result = $conn->query($sqlt);
   
    while($row = $result->fetch_assoc()) {
      $totalMsg =$row["count"];
    }

    if($topic=='topic001'){
      $topic001_p=calPercentage_found_topic($topic001_p,$totalMsg);

      $topic002_p=calPercentage_rest($topic002_p,$totalMsg);
      $topic003_p=calPercentage_rest($topic003_p,$totalMsg);
      $topic004_p=calPercentage_rest($topic004_p,$totalMsg);
      $topic005_p=calPercentage_rest($topic005_p,$totalMsg);
      $topic006_p=calPercentage_rest($topic006_p,$totalMsg);
      $topic007_p=calPercentage_rest($topic007_p,$totalMsg);
    
    }elseif ($topic=='topic002'){
      $topic002_p=calPercentage_found_topic($topic002_p,$totalMsg);

      $topic001_p=calPercentage_rest($topic001_p,$totalMsg);
      $topic003_p=calPercentage_rest($topic003_p,$totalMsg);
      $topic004_p=calPercentage_rest($topic004_p,$totalMsg);
      $topic005_p=calPercentage_rest($topic005_p,$totalMsg);
      $topic006_p=calPercentage_rest($topic006_p,$totalMsg);
      $topic007_p=calPercentage_rest($topic007_p,$totalMsg);

    }elseif ($topic=='topic003'){
      $topic003_p=calPercentage_found_topic($topic003_p,$totalMsg);

      $topic002_p=calPercentage_rest($topic002_p,$totalMsg);
      $topic001_p=calPercentage_rest($topic001_p,$totalMsg);
      $topic004_p=calPercentage_rest($topic004_p,$totalMsg);
      $topic005_p=calPercentage_rest($topic005_p,$totalMsg);
      $topic006_p=calPercentage_rest($topic006_p,$totalMsg);
      $topic007_p=calPercentage_rest($topic007_p,$totalMsg);

    }elseif ($topic=='topic004'){
      $topic004_p=calPercentage_found_topic($topic004_p,$totalMsg);

      $topic002_p=calPercentage_rest($topic002_p,$totalMsg);
      $topic003_p=calPercentage_rest($topic003_p,$totalMsg);
      $topic001_p=calPercentage_rest($topic001_p,$totalMsg);
      $topic005_p=calPercentage_rest($topic005_p,$totalMsg);
      $topic006_p=calPercentage_rest($topic006_p,$totalMsg);
      $topic007_p=calPercentage_rest($topic007_p,$totalMsg);

    }elseif ($topic=='topic005'){
      $topic005_p=calPercentage_found_topic($topic005_p,$totalMsg);

      $topic002_p=calPercentage_rest($topic002_p,$totalMsg);
      $topic003_p=calPercentage_rest($topic003_p,$totalMsg);
      $topic004_p=calPercentage_rest($topic004_p,$totalMsg);
      $topic001_p=calPercentage_rest($topic001_p,$totalMsg);
      $topic006_p=calPercentage_rest($topic006_p,$totalMsg);
      $topic007_p=calPercentage_rest($topic007_p,$totalMsg);

    }elseif ($topic=='topic006'){
      $topic006_p=calPercentage_found_topic($topic006_p,$totalMsg);

      $topic002_p=calPercentage_rest($topic002_p,$totalMsg);
      $topic003_p=calPercentage_rest($topic003_p,$totalMsg);
      $topic004_p=calPercentage_rest($topic004_p,$totalMsg);
      $topic005_p=calPercentage_rest($topic005_p,$totalMsg);
      $topic001_p=calPercentage_rest($topic001_p,$totalMsg);
      $topic007_p=calPercentage_rest($topic007_p,$totalMsg);

    }elseif ($topic=='topic007'){
      $topic007_p=calPercentage_found_topic($topic007_p,$totalMsg);

      $topic002_p=calPercentage_rest($topic002_p,$totalMsg);
      $topic003_p=calPercentage_rest($topic003_p,$totalMsg);
      $topic004_p=calPercentage_rest($topic004_p,$totalMsg);
      $topic005_p=calPercentage_rest($topic005_p,$totalMsg);
      $topic006_p=calPercentage_rest($topic006_p,$totalMsg);
      $topic001_p=calPercentage_rest($topic001_p,$totalMsg);
    }

// Topic table update quary starts--------------------------------------------------------------------------------
     $sqlt="UPDATE topic SET percentage = ".$topic001_p." WHERE `topic`.`topic_id` = 'topic001';";
          $conn->query($sqlt);

     $sqlt="UPDATE topic SET percentage = ".$topic002_p." WHERE `topic`.`topic_id` = 'topic002';";
          $conn->query($sqlt);

     $sqlt="UPDATE topic SET percentage = ".$topic003_p." WHERE `topic`.`topic_id` = 'topic003';";
          $conn->query($sqlt);

     $sqlt="UPDATE topic SET percentage =  ".$topic004_p." WHERE `topic`.`topic_id` = 'topic004';";
          $conn->query($sqlt);

     $sqlt="UPDATE topic SET percentage =  ".$topic005_p." WHERE `topic`.`topic_id` = 'topic005';";
          $conn->query($sqlt);

     $sqlt="UPDATE topic SET percentage =  ".$topic006_p." WHERE `topic`.`topic_id` = 'topic006';";
          $conn->query($sqlt);

     $sqlt="UPDATE topic SET percentage =  ".$topic007_p." WHERE `topic`.`topic_id` = 'topic007';";
          $conn->query($sqlt);
     
// Topic table update quary ends-----------------------------------------------------------------------------------
// session review table upadte quary starts----------------------------------------------------------------------
    $positive_topics_rate=calPositivePercentage_topic($topic001_p, $topic005_p, $topic006_p);      
    $sqlt="UPDATE session_review SET positive_topics =  ".$positive_topics_rate."  WHERE `session_review`.`cs_id` = 'test_s001';";
    $conn->query($sqlt);
// session review table upadte quary end------------------------------------------------------------------------- 



     function calPercentage_found_topic($topicPercentage,$totalMsg_c){
        $percentage =(((($topicPercentage/100)*$totalMsg_c)+1)/($totalMsg_c+1))*100;
        return $percentage;
     }

     function calPercentage_rest($topicPercentage,$totalMsg_c){
        $percentage =(((($topicPercentage/100)*$totalMsg_c))/($totalMsg_c+1))*100;
        return $percentage;
     }

     function calPositivePercentage_topic($topic001_p, $topic005_p, $topic006_p){
         
         $val=(($topic001_p+$topic003_p+$topic005_p)*(100-$topic006_p))/100;

        return $val;
     }
     // ----------------------
    
   // $conn->close();
?>