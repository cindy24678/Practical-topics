<?php
  require_once("dbtools.inc.php");
  
  //取得表單資料
  $demander = $_COOKIE["account"];
  $demand_code = $_GET["demand_code"];
  
  $link = create_connection();
 
	
    //執行 SQL 命令
    $sql = "DELETE FROM commodity_demand WHERE demand_code= $demand_code";

    $result = execute_sql($link, "chicken", $sql);
  //}

    mysqli_close($link);
    header("Location:wishing_pool_page.php");
    exit;

 ?>
