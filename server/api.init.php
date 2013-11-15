<?php

include 'core/config.php';
include 'core/function.php';

header('Content-Type: application/json');

//echo dirname(__FILE__);
if(isset($_POST['getcontacts'])){
	echo json_encode(getAllContacts());
}elseif(isset($_POST['getmessages'])){
	echo json_encode(getMessages($_POST['getmessages']));
}elseif(isset($_POST['sendmessages'])){
	echo json_encode(sendToNumber($_POST['sendmessages'],$_POST['text']));
}else{
	echo json_encode(array(
		'getcontact' => "Get All Contact", 
		'getmessages' => "Get All Messages by Number", 
		'sendmessages' => "Send Messages to Number"
	));
}
?>