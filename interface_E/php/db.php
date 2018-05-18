<?php

	//$bookMain = $_GET['bookMain'];

	$db_ip = "127.0.0.1";
	$db_account = "root";
	$db_pwd = "1234";
	$db_link = @mysql_connect($db_ip,$db_account,$db_pwd) or die ("cant connect db");

	mysql_query("SET NAMES utf8");

	$selecDB = mysql_select_db("storybook") or die ("DB connection failed");



	/*SELECT*/
	$sql = 'SELECT * FROM `book`  WHERE `bookID` < 270 && `bookID` > 255 ';

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

	/*
		    <div id="swiper-wrapper" class="swiper-wrapper">
		      <div class="swiper-slide">
		        <img class="sliderSize" src="./imageBook/16.jpg">
		        <div id="bk1" class="bookName">我的狐狸老師</div>
		      </div>
	    	</div>
		    <!-- Add Pagination -->
		    <div class="swiper-pagination"></div>

		    <!--buttons-->
		    <div class="swiper-button-next"></div>
		    <div class="swiper-button-prev"></div>

	*/
	

?>