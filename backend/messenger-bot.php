<?php 
include 'db-config.php';
//include 'session.php';

//parameter
//$hubVerifyToken=$session_hubVerifyToken;
//$accessToken=$session_accessToken;

$hubVerifyToken="TOKEN123";
$accessToken="EAAbU8Us6RZCEBAP23cHhQbcnpn7hRJICZBddbPHGoWecjq7VVlGUX6uXNwJcZCTLHZBZB67txnJGIEBMzSe76tgunn8FSP6HyXJr9Uw5urvbMbNx7gG6AQZAbVP51TM48a0n9FAeQGYVPZBvm255hgiZBB1eycFNykLwiHvcVbrjyiFbaAZBRz37z";
//check token at setup
if($_REQUEST['hub_verify_token']===$hubVerifyToken){
	echo $_REQUEST['hub_challenge'];
	exit;
}

//handle bot's answer
$input=json_decode(file_get_contents("php://input"),true);
$senderId=$input['entry'][0]['messaging'][0]['sender']['id'];
$messageText=$input['entry'][0]['messaging']['0']['message']['text'];

include 'spell-check.php';


//topic detection 
// include 'key-phrases.php';
include 'topic-detection/detect-topic.php';

//emotion detection
include 'emotion-extraction/emotion.php';


//------------insert data to user-----------------------------------
//------------------------------------------------------------------
$user_id = $senderId;
$name = 'Dinesh Lakmal';
$address = 'Test 37/16';
$age = 24;
$email = 'dineshed25@gmail.com';
$password = '123456';

$msg=$messageText;
$cs_id='test_s001';
$topic_id=implode(" ",$topic_found);
//$topic_id='topic001';
$personal_info_id='pinfo_001';
$healthy_id='healthy_01';
$emotion_id=implode(" ", $emotion_found);
//$emotion_id="emotion001";
//$sql = "INSERT INTO user (user_id, name, address, age, email, password) VALUES ('" . $user_id . "', '" .$name. "','" .$address. "', '" .$age. "', '" . $email . "', '" . $password. "')";
$sql = "INSERT INTO messages (msg_id, msg, cs_id, topic_id, personal_info_id, healthy_id, emotion_id) VALUES (NULL,'" .$msg. "', '" .$cs_id. "', '" . $topic_id. "', '" .$personal_info_id. "', '" . $healthy_id. "', '" . $emotion_id. "')";
//$sql="INSERT INTO messages (msg_id, msg, cs_id, topic_id, personal_info_id, healthy_id, emotion_id) VALUES (NULL, '".$msg."', 'test_s001', 'topic001', '".$personal_info_id."', '".$healthy_id."', '".$emotion_id."');";
$conn->query($sql);


// update message count again for bootom modules-----------------------------------------------------------------

 $sqlt="SELECT count(*) as count FROM  messages";
 $result = $conn->query($sqlt);
   
    while($row = $result->fetch_assoc()) {
      $totalMsg =$row["count"];
    }
//personal infomation
include 'personal-information/detect-personalinfo.php';


// evaluate healthy
include 'evaluate-healthy/healthy.php';



$conn->close();
?>


