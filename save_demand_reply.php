<?php
  require_once("dbtools.inc.php");
	
  $account = $_COOKIE["account"];
  $demand_reply = $_POST["demand_reply"]; 
  $reply_time = date("Y-m-d H:i:s");
  $demand_code = $_POST["demand_code"];

  //建立資料連接
  $link = create_connection();
	
  //執行SQL查詢
  $sql = "INSERT INTO discuss_demand (account, demand_reply, reply_time ,demand_code) VALUES ('$account', '$demand_reply', '$reply_time' ,'$demand_code')";
  $result = execute_sql($link, "chicken", $sql);

  //關閉資料連接
  mysqli_close($link);
  
  //將網頁重新導向
  header("location:show_personal_demand.php?demand_code=" . $demand_code);
  exit();

    
?>