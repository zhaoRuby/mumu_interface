<?php
    //echo getenv("HOMEDRIVE").getenv("HOMEPATH")."\Desktop";
	//local data

	//接收資料


	$mission_number=$_GET["mission_number"]; //當檔名
	$interface_number=$_GET["interface_number"];
	$click_object=$_GET["click_object"];


    //設定時區
	date_default_timezone_set('Asia/Taipei'); 
	$now = date("Y-m-d H:i:s");

	$file="../data/interface_".$interface_number."_".$mission_number.".txt";
	$content = '"'.$now.'","'.$click_object.'"'.PHP_EOL;

	if($f = file_put_contents($file, $content,FILE_APPEND)){
	}
	else{
		$f = file_put_contents($file, $content,FILE_APPEND);
	}


?>