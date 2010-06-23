<?php

require_once('includes/config.php');
require_once('includes/connection.class.php');
require_once('includes/session.php');
require_once('device.php');

session_init();

if($_POST) {
	$action = $_POST['action'];
	$data = $_POST['data'];
	
	session_db_open();
	
	switch($action) {
		case 'getdevice':
			echo json_encode(device_get($data));
			break;
		
		case 'getdevicelist':
			echo json_encode(device_get_all());
			break;
	}
	
	session_db_close();
}

?>