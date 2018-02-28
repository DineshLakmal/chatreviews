<?php

          if($_GET["function"] == "get_session_review")
	 {
	   echo get_session_review();
	 }

	  function get_session_review(){
  	 	include '../db-config.php';
                     $results = $conn->query("SELECT * from session_review where cs_id='test_s001' ");
                     $dataSet= [];
		foreach ($results as $key => $value) {
			array_push($dataSet, [$value['positive_topics'], $value['positive_emotions'], $value['personal_info'], $value['healthiness']] );
		}
                    return json_encode ($dataSet);
            }
?>