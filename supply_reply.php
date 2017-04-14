<?php
  require_once("dbtools.inc.php");
	
  $account = $_COOKIE["account"];
  $supply_reply = $_POST["supply_reply"]; 
  $reply_time = date("Y-m-d H:i:s");
 

  //建立資料連接
  $link = create_connection();
	
  //執行SQL查詢
  $sql = "INSERT INTO discuss_supply (account, supply_reply, reply_time) VALUES ('$account', '$supply_reply', '$reply_time')";
  $result = execute_sql($link, "chicken", $sql);

  //關閉資料連接
  mysqli_close($link);
  
  //將網頁重新導向
  header("location:show_personal_supply.php");
  exit();

    
?>