<?php


	$subtopic = $_GET['subtopic'];

	$db_ip = "sql112.byethost.com";
	$db_account = "b7_22100355";
	$db_pwd = "v9610779";
	$db_link = @mysql_connect($db_ip,$db_account,$db_pwd) or die ("cant connect db");

	mysql_query("SET NAMES utf8");

	$selecDB = mysql_select_db("b7_22100355_bookstory") or die ("DB connection failed");



	/*SELECT*/
	$sql = 'SELECT * FROM `book`  WHERE `'.$subtopic.'` = 1';

	$result = mysql_query($sql);
	//$row_result = mysql_fetch_assoc($result);
	//echo $row_result["bookName"].'getValue'.$bookMain;

	// 顯示某主題書籍
	while($row_result = mysql_fetch_assoc($result)){

		echo '<div class="swiper-slide">'
			.'<img class="sliderSize" src="./imageBook/'.$row_result["bookID"].'.jpg">'
			.'<div class="bookName">'.$row_result["bookName"].'</div>'
			.'</div>';
		

	}
	

?>