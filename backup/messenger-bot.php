<?php 
include 'db-config.php';
//parameter
$hubVerifyToken="TOKEN123";
$accessToken="EAAbU8Us6RZCEBAMTxZAaGklrFC5lNa95XZAZCMAfxm7lXQwPyknw1yHXytARCQvsuwksyk57BIcSVjIPfNpkV302ZBrHMYESr5PCjIdcPgh1zvnZCe5P4lX91FtGFiH79COT3apgeFOsYZCIdKBP00aOpt7FdTZAPZCIz5kZBEPfbF6mTvdOmwUdJZC";
//$accessToken="EAAbU8Us6RZCEBAPbc7hIyVl8A0SFgal7hSjvnEvcs9833xpvR3xtHLQvqrqZCyQe0S21iACMaIVvjs4fFPZB9o1zW8bQAATpE9rG40394NIUvUPIPqrCWgzMvFSXleCtGx0ixDDIhUuEOysRSfygL0xSTccEBpOsNOtd0tLTXbjNkCeEBbZA";
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


// topic detection 
 include 'topic-detection/detect-topic.php';

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
$emotion_id='emotion_01';

//$sql = "INSERT INTO user (user_id, name, address, age, email, password) VALUES ('" . $user_id . "', '" .$name. "','" .$address. "', '" .$age. "', '" . $email . "', '" . $password. "')";
$sql = "INSERT INTO messages (msg_id, msg, cs_id, topic_id, personal_info_id, healthy_id, emotion_id) VALUES (NULL,'" .$msg. "', '" .$cs_id. "', '" . $topic_id. "', '" .$personal_info_id. "', '" . $healthy_id. "', '" . $emotion_id. "')";
//$sql="INSERT INTO messages (msg_id, msg, cs_id, topic_id, personal_info_id, healthy_id, emotion_id) VALUES (NULL, '".$msg."', 'test_s001', 'topic001', '".$personal_info_id."', '".$healthy_id."', '".$emotion_id."');";

$conn->query($sql);
$conn->close();
?>


