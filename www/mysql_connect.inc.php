	<?php
	header("Access-Control-Allow-Origin: *");
	//資料庫設定
	//資料庫位置
	$db_server = "localhost";
	//資料庫名稱
	$db_name = "103021065_test";
	//資料庫管理者帳號
	$db_user = "103021065";
	//資料庫管理者密碼
	$db_passwd = "3jbqyx";

	//對資料庫連線
	$con = mysqli_connect("localhost","103021065","3jbqyx","103021065_test") or die ("could not connect database");
	//資料庫連線採UTF8
	mysqli_query($con, "SET NAMES utf8" );
	if ( !@mysql_connect( $db_server, $db_user, $db_passwd ) )
		die( "無法對資料庫連線" );
	//資料庫連線採UTF8
	mysql_query( "SET NAMES utf8" );

	//選擇資料庫
	if ( !@mysql_select_db( $db_name ) )
		die( "無法使用資料庫" );
	
	?>