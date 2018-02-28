<?php 
	 if($_GET["function"] == "getTopicPercentage")
	 {
	   echo getTopicPercentage();
	 }
	  if($_GET["function"] == "getTopicCount")
	 {
	  echo getTopicCount();
	 }
     

      function getTopicPercentage(){
	 	include '../db-config.php';
	             $results = $conn->query("SELECT name,percentage from topic");
	             $dataSet= [];
			foreach ($results as $key => $value) {
				array_push($dataSet, [$value['name'],$value['percentage']]);
			}
	            return json_encode ($dataSet);
     }

     function getTopicCount(){
  	 	include '../db-config.php';
        
        $results = $conn->query("SELECT count(*) as count FROM  messages where topic_id='topic001'");
        $dataSet= [];
		foreach ($results as $key => $value) {
			array_push($dataSet, ['Food',$value['count']]);
		}
        $results = $conn->query("SELECT count(*) as count FROM  messages where topic_id='topic002'");
		foreach ($results as $key => $value) {
			array_push($dataSet, ['Politics',$value['count']]);
		}
		$results = $conn->query("SELECT count(*) as count FROM  messages where topic_id='topic003'");
		foreach ($results as $key => $value) {
			array_push($dataSet, ['Sport',$value['count']]);
		}
		$results = $conn->query("SELECT count(*) as count FROM  messages where topic_id='topic004'");
		foreach ($results as $key => $value) {
			array_push($dataSet, ['Money',$value['count']]);
		}
		$results = $conn->query("SELECT count(*) as count FROM  messages where topic_id='topic005'");
		foreach ($results as $key => $value) {
			array_push($dataSet, ['Education',$value['count']]);
		}
		$results = $conn->query("SELECT count(*) as count FROM  messages where topic_id='topic006'");
		foreach ($results as $key => $value) {
			array_push($dataSet, ['Others',$value['count']]);
		}
		$results = $conn->query("SELECT count(*) as count FROM  messages where topic_id='topic007'");
		foreach ($results as $key => $value) {
			array_push($dataSet, ['Null',$value['count']]);
		}

        return json_encode ($dataSet);
     }

?>