<?php
  require_once("dbtools.inc.php");
  header("Content-type: text/html; charset=utf-8");
  
  //取得表單資料
  $account = $_COOKIE["account"];   
  $password = $_POST["password"];

  //建立資料連接
  $link = create_connection();
          
  //檢查帳號密碼是否正確
  $sql = "SELECT * FROM user Where account = '$account' AND password = '$password'";
  $result = execute_sql($link, "chicken", $sql);


  //如果帳號密碼錯誤
  if (mysqli_num_rows($result) == 0)
  {
    //釋放 $result 佔用的記憶體
    mysqli_free_result($result);
  
    //關閉資料連接  
    mysqli_close($link);
    
    //顯示訊息要求使用者輸入正確的密碼
    echo "<script type='text/javascript'>";
    echo "alert('password error');";
    echo "history.back();";
    echo "</script>";
  }
  
  //如果密碼正確
  else
  {
    //header("location:index.php");
    setcookie("ckpassword", "1" ,time() + 10 * 60); //取得更改會員資料的權限值為1，時間為10分鐘
    header("Location:change_password.php");
  }
exit;

?>