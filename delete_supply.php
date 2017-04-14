<?php
  require_once("dbtools.inc.php");
  
  //取得表單資料
  $supplier = $_COOKIE["account"];
  $supply_code = $_GET["supply_code"];
  
  $link = create_connection();
 
	
    //執行 SQL 命令
    $sql = "DELETE FROM commodity_supply WHERE supply_code= $supply_code";

    $result = execute_sql($link, "chicken", $sql);
  //}

    mysqli_close($link);
    header("Location:placement_services_page.php");
    exit;

 ?>
