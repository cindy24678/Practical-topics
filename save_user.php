<?php
  require_once("dbtools.inc.php");
  
  //取得表單資料
  $account = $_POST["account"];
  $password = $_POST["password"];
  $identity_number = $_POST["identity_number"];
  //將account寫入COOKIE
  setcookie("account", $account, time() + 60 * 60);

  $link = create_connection();
  $sql = "SELECT * FROM user Where account = '$account'";
  $result = execute_sql($link, "chicken", $sql);

  //  if (mysqli_num_rows($result) != 0)
  // {
  //   //釋放 $result 佔用的記憶體
  //   mysqli_free_result($result);
		
  //   //顯示訊息要求使用者更換帳號名稱
  //   echo "<script type='text/javascript'>";
  //   echo "alert('您所指定的帳號已經有人使用，請使用其它帳號');";
  //   echo "history.back();";
  //   echo "</script>";
  // }
  // else
  // {
    //釋放 $result 佔用的記憶體	
    mysqli_free_result($result);
		
    //執行 SQL 命令，新增此帳號
    $sql = "INSERT INTO user (account, password) VALUES ('$account', '$password')";

    $result = execute_sql($link, "chicken", $sql);
  //}

    mysqli_close($link);


    header("Location:user_information.html");
    exit;

 ?>

 