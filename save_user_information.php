<?php
  require_once("dbtools.inc.php");
  
  $account = $_COOKIE["account"];
  //取得表單資料
  $name = $_POST["name"];
  $identity_number = $_POST["identity_number"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
 


  $link = create_connection();
  $sql = "SELECT * FROM user_information";
  $result = execute_sql($link, "chicken", $sql);

  //  if (mysqli_num_rows($result) != 0)
  // {
  //   //釋放 $result 佔用的記憶體
  mysqli_free_result($result);
		
  //   //顯示訊息要求使用者更換帳號名稱
  //   echo "<script type='text/javascript'>";
  //   echo "alert('您所指定的帳號已經有人使用，請使用其它帳號');";
  //   echo "history.back();";
  //   echo "</script>";
  // }
  // else
  // {
  //釋放 $result 佔用的記憶體	
  //mysqli_free_result($result);
		
    //執行 SQL 命令，新增會員資料
    $sql = "INSERT INTO user_information (account, name ,identity_number, phone, email) VALUES ('$account', '$name', '$identity_number', '$phone', '$email')";
    
    $result = execute_sql($link, "chicken", $sql);
  //}

    mysqli_close($link);

   // header("Location:num1.html");
    //exit;
    header("Location:homepage.html");
    exit;

 ?>

