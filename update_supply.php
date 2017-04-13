<?php 
      require_once("dbtools.inc.php");
      

      //執行SQL更新
      
      //取得要顯示之記錄
     

     $supply_code = $_GET['supply_code'];
    
      //建立資料連接

  $supply_title = $_POST["supply_title"];
  $supply_description = $_POST["supply_description"]; 

  $language =  $_POST["language"];

  $lan_listen = $_POST["lan_listen"];
  $lan_say = $_POST["lan_say"];
  $lan_read = $_POST["lan_read"];
  $lan_write = $_POST["lan_write"];
  $on_line = $_POST["on_line"];
  $record = $_POST["record"];
  $face_to_face = $_POST["face_to_face"];
  $teaching_method = $_POST["teaching_method"];
  $teaching_time = $_POST["teaching_time"];
  $update_time=date("Y-m-d H:i:s");
  $link = create_connection();



     $sql = "UPDATE commodity_supply SET supply_title='$supply_title' , supply_description='$supply_description' , language='$language' ,  lan_listen='$lan_listen' , lan_say='$lan_say' , lan_read='$lan_read' ,lan_write='$lan_write' ,on_line='$on_line' ,record='$record' , face_to_face='$face_to_face', teaching_method='$teaching_method' , teaching_time='$teaching_time' , update_time='$update_time' WHERE supply_code='$supply_code'";

     

      $result = execute_sql($link, "chicken", $sql);



      //顯示原討論主題的內容
     // mysqli_fetch_assoc($result);
      
      //釋放 $result 佔用的記憶體空間
     //mysqli_free_result($result);

      //執行 SQL 命令
     
    mysqli_close($link);
    
    header("Location:show_personal_supply.php?supply_code=" . $supply_code);
   
    exit;


  

?>


