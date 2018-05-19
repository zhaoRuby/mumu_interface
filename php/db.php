<?php


	$subtopic = $_GET['subtopic'];

	$db_ip = "127.0.0.1";
	$db_account = "root";
	$db_pwd = "1234";
	$db_link = @mysql_connect($db_ip,$db_account,$db_pwd) or die ("cant connect db");

	mysql_query("SET NAMES utf8");

	$selecDB = mysql_select_db("storybook") or die ("DB connection failed");



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