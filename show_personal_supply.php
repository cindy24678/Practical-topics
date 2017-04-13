<?php 
      require_once("dbtools.inc.php");
      
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
  $supply_time=date("Y-m-d H:i:s");
  $update_time=date("Y-m-d H:i:s");
  $link = create_connection();

      //執行SQL查詢
      $sql = "SELECT * FROM  commodity_supply WHERE supply_code = ' $supply_code'";
      

      $result = execute_sql($link, "chicken", $sql);

      $meta = mysqli_fetch_object($result);


      $supply_code =  $meta->supply_code;
      
      $supplier = $meta->supplier;

      $supply_title = $meta->supply_title;
      $supply_description = $meta->supply_description;
      $language = $meta->language;
      $lan_listen = $meta->lan_listen;
      $lan_say = $meta->lan_say;
      $lan_read = $meta->lan_read;
      $lan_write = $meta->lan_write;
      $on_line = $meta->on_line;
      $record = $meta->record;
      $face_to_face = $meta->face_to_face;
      $teaching_method = $meta->teaching_method;
      $teaching_time = $meta->teaching_time;
      $supply_time = $meta->supply_time;
      $update_time = $meta->update_time;

                    
      //顯示原討論主題的內容
      mysqli_fetch_assoc($result);
      
      //釋放 $result 佔用的記憶體空間
      mysqli_free_result($result);

      //執行 SQL 命令
     


      mysqli_close($link);
    ?>
 
<!doctype html>
<html>
  <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CHICKEN</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- 上方圖檔 -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">


         <script type="text/javascript">
            
        //要加check資料的語法
            function check_data()
            {   

                discuss_supply.submit();

            }   



            

        </script>

    </head>





<body>

 <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          

          <a class="navbar-brand" href="#"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="homepage.html"><img src="assets/ico/logo.png" width="50" height="50"   ><font color="#FFAA33" > Homepage</font></a></li>
            <li><a href="supply_page.php"><img src="assets/ico/post.png" width="50" height="50"><font color="#FFAA33" > Supply </font></a></li>
            <li><a href="demand_page.php"><img src="assets/ico/wishing well.png" width="50" height="50"><font color="#FFAA33" > Demand </font></a></li>
            <li><a href="before_use_member_center.php"><img src="assets/ico/member center.png" alt="" width="50" height="50" 
                                                                     onmouseout="this.src='assets/ico/member center.png'"
                                                                     onmouseover="this.src='assets/ico/member center click.png'"
                                                                     onclick="setBanner(); showFlag(); "/><font color="#FFAA33" > Member </font></a></li>
            <li><a href="login.html"><img src="assets/ico/bar_sign in.png" width="50" height="50"><font color="#FFAA33" > Sign in </font></a></li>
        
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </nav>  




 <div class="top-content">
            <div class="inner-bg">
                <div class="container">


                    <div class="row">                                            <!-- 第二列 -->

                      
                    <div class="row">    
                    <p></p>
                    </div>
                     <div class="row">    
                    <p></p>
                    </div>
                    <div class="row">    
                    <p></p>
                    </div>


<table class="table">
   
   <p align="navbar-left"><br>                            <!-- 右邊 -->
     <h2><font color="#FFAA33">title</font></h2>
     <h4><font color="#FFFFFF"><?php echo $supply_title ?></font></h4> 
    <table  align="center" width="1000" height="400">

       <tr class="" style="border:hidden">
             <td> <font color="#FFAA33">supplier：</font></td> 
            <!--<td> <font color='#FFFFFF'>  <?php echo "<a href='show_personal_information.php?supplier=". $supplier ?> </a></font><br></td> -->
             <td> <font color='#FFFFFF'>  <?php echo $supplier ?> </a></font><br></td>

       </tr>
       
    
  

       <tr class="" style="border:hidden">
             <td> <font color="#FFAA33"> description：</font></td> 
             <td> <font color='#FFFFFF'>  <?php echo $supply_description ?> </font>  </td> 
       </tr>

       <tr class="" style="border:hidden">
             <td > <font color="#FFAA33">language：</font></td> 
             <td > <font color='#FFFFFF'>  <?php echo $language ?>  </font> </td>
       </tr>

       <tr class="" style="border:hidden">
            <td > <font color="#FFAA33">request：</td>
            <td ><font color='#FFFFFF'>  
                  <?php
                       if ($lan_listen == '1') 
                       {
                        echo " Listen";
                       }     

                       if ($lan_say  == '1') 
                       {
                        echo " speak"; 

                       }  

                      if ($lan_read == '1') 
                      {
                        echo " Read"; 
                      }

                      if ($lan_write  == '1') 
                      {
                        echo " Write";
                      }
                  ?>
                   </font> 
             </td>
       </tr>


        <tr class="" style="border:hidden">
        <td > <font color="#FFAA33">teaching method：</td>
          <td ><font color='#FFFFFF'>  
         <?php
            if ($on_line == "1") {
              echo "On line";

            } 


           if ($record == "1") {
              echo " Record";

            }
     


            if ($face_to_face == "1") {
              echo " face to face";

            } 
                  ?>
                    </font> 
             </td>
        </tr>

        
        <td > <font color="#FFAA33">teaching ps：</td>
        <td><font color='#FFFFFF'>  <?php echo $teaching_method ?></font> </tr>

        <tr class="" style="border:hidden">
        <td > <font color="#FFAA33">teaching time：</td>
        <td><font color='#FFFFFF'> <?php echo $teaching_time ?> </font> </tr>

      
     </table>   
     
</table>
						      <div class="top-big-link">

						     
						             <?php 
                               echo "<a href='supply_page.php";
                               echo "'> <input type='button' value='return'></a>" ;

						            
						                   echo "<a href='save_revise_supply.php?supply_code=";
						                   echo $supply_code . "'> <input type='button' value='revise'></a>" ;
						      
                                
						                   echo "<a href='save_match_request.php?supply_code=";
						                   echo $supply_code . "'> <input type='button' value='match'></a>"; ?> 
						       
						             
						      </div>
						      <div>
     	<p></p>
     	
     </div>

                       </div>

     <div>
     	<p></p>
     	
     </div>

                    </div>
           
    
<div>
     	<p></p>
    
     </div>

  <?php 
  
      require_once("dbtools.inc.php");
        
      //建立資料連接
      $link = create_connection();

      $account = $_COOKIE["account"];
      $supply_reply = $_POST["supply_reply"];
      $reply_time = date("Y-m-d H:i:s");

      //執行 SQL 命令
      $sql = "SELECT * FROM discuss_supply WHERE supply_code = ' $supply_code'";
      $result = execute_sql($link, "chicken", $sql);
      
     //$total_records = mysqli_num_rows($result);

       if (mysqli_num_rows($result) <> 0)
      {
        
        echo "<table width='800' align='center' cellpadding='3'>";
        echo "<tr height='40'><td colspan='3' align='center'
              bgcolor='#FFAA33'><font color='#000000'>
              <b>回覆主題</b></font></td></tr>";
               

        echo "<tr>";
        echo "<td bgcolor='#DDDDDD'>Respondent</td>";
        echo "<td bgcolor='#DDDDDD'>Content</td>";
        echo "<td bgcolor='#DDDDDD'>reply_time</td></tr>";   

        //顯示回覆主題的內容
        while ($row = mysqli_fetch_assoc($result))
        {
          echo "<tr>";
          echo "<td bgcolor='#DDDDDD'>" . $row["account"] . "</td>";
          echo "<td bgcolor='#DDDDDD'>" . $row["supply_reply"] .  "</td>";
          echo "<td bgcolor='#DDDDDD'>" . $row["reply_time"] . "</td></tr>";       
        }
        
        echo "</table>";      
      }
           
  
      //釋放記憶體空間
     // mysqli_free_result($result);
      mysqli_close($link);
    ?>
    
   


    <form name="discuss_supply" method="post" action="save_supply_reply.php">
       <input type="hidden" name="supply_code" value="<?php echo $supply_code ?>">
      <table  width="800" align="center" cellspacing="0">
     
        <tr bgcolor="#FFAA33">
          <td width="15%"><font color='#000000'>回覆</font></td>
          <td width="85%"><input name="supply_reply" type="text" size="80"></td>
        </tr>
  
        <tr>
         
        </tr>
      </table>   
       
   
    <p></p>
         <td colspan="2" height="40" align="center">
             <input type="button" value="回覆討論" onClick="check_data()">   
            <input type="reset" value="重新輸入">
          </td>  
        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
         </form> 
    </body>

</html>