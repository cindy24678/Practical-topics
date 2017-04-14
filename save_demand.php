<?php
  require_once("dbtools.inc.php");
  
  //取得表單資料
  $demander = $_COOKIE["account"];
  $demand_title = $_POST["demand_title"];
  $demand_description = $_POST["demand_description"];

  $language =  $_POST["language"];

  $lan_listen = $_POST["lan_listen"];
  $lan_say = $_POST["lan_say"];
  $lan_read = $_POST["lan_read"];
  $lan_write = $_POST["lan_write"];
  $country = $_POST["country"];
  $on_line = $_POST["on_line"];
  $record = $_POST["record"];
  $face_to_face = $_POST["face_to_face"];
  $teaching_method = $_POST["teaching_method"];
  $teaching_time = $_POST["teaching_time"];
  $demand_time=date("Y-m-d H:i:s");
  $update_time=date("Y-m-d H:i:s");

  $link = create_connection();

		
    //執行 SQL 命令，新增此帳號
 $sql = "INSERT INTO commodity_demand (demander, demand_title, demand_description, language, lan_listen, lan_say, lan_read, lan_write, country, on_line, record, face_to_face, teaching_method, teaching_time, demand_time, update_time) VALUES ('$demander', '$demand_title', '$demand_description', '$language', '$lan_listen', '$lan_say', '$lan_read', '$lan_write', '$country' , '$on_line', '$record', '$face_to_face', '$teaching_method', '$teaching_time','$demand_time', '$update_time' )";


    $result = execute_sql($link, "chicken", $sql);
  //}

    mysqli_close($link);

 ?>

 
 <!doctype html>
<html lang="en">
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

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- 上方圖檔 -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

  <body bgcolor="#FFFFFF">

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
            <li><a href="homepage.php"><img src="assets/ico/logo.png" width="50" height="50"   ><font color="#FFAA33" > Homepage</font></a></li>
            <li><a href="supply_page.php"><img src="assets/ico/post.png" width="50" height="50"><font color="#FFAA33" > Supply </font></a></li>
            <li><a href="demand_page.php"><img src="assets/ico/wishing well.png" width="50" height="50"><font color="#FFAA33" > Demand </font></a></li>
            <li><a href="before_use_member_center.php"><img src="assets/ico/member center.png" alt="" width="50" height="50" 
                                                                     onmouseout="this.src='assets/ico/member center.png'"
                                                                     onmouseover="this.src='assets/ico/member center click.png'"
                                                                     onclick="setBanner(); showFlag(); "/><font color="#FFAA33" > Member </font></a></li>
             <?php 
                if (isset($_COOKIE["account"])){   //判斷cookie中是否已建立"account"
                    
                    if ($_COOKIE["account"] == null or $_COOKIE["account"] == ""){ //判斷"account"中是否有資料
                        echo "<li><a href='login.html'><img src='assets/ico/bar_sign in.png' width='50' height='50'><font color='#FFAA33' > Sign in </font></a></li>";
                       
                    }else{
                      
                       echo" <li><a href='signout.php'><img src='assets/ico/bar_sign in.png' width='50' height='50'><font color='#FFAA33'> Sign out </font></a></li>";
                       
                    }
                }else{
                  echo "<li><a href='login.html'><img src='assets/ico/bar_sign in.png' width='50' height='50'><font color='#FFAA33' > Sign in </font></a></li>";
                }

             ?>               
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </nav>  


    <p align="center"><img src="assets/ico/successful.png" alt="">    

    <table class="table">
     <p align="navbar-left">
      <h2><font color="#FFAA33">title</font></h2>
      <h4><font color="#FFFFFF"><?php echo $demand_title ?></font></h4>
        
        <table  align="center" width="1000" height="400">
        
          <tr class="" style="border:hidden">
            <td><font color="#FFAA33">description：</td>
            <td><font color="#FFFFFF"><?php echo $demand_description ?></font><br></td>

          </tr>

          <tr  class="" style="border:hidden">
            <td><font color="#FFAA33">Languge： </td>
            <td><font color="#FFFFFF"><?php echo $language ?></font><br> </td>
            
          </tr>
          
          <tr  class="" style="border:hidden">
            <td><font color="#FFAA33">Request：</td>
            <td><font color="#FFFFFF">

            <?php if ($_POST["lan_listen"] == '1') {
              echo "Listen";
            }?>     

            <?php if ($_POST["lan_say"]  == '1') {
              echo "speak"; 

            }?>   

            <?php if ($_POST["lan_read"]  == '1') {
              echo "Read"; 

            }?> 

            <?php if ($_POST["lan_write"]  == '1') {
              echo "Write";

            }?> 
              
            </font><br> </td>
            
          </tr>

          <tr  class="" style="border:hidden">
            <td><font color="#FFAA33">country： </td>
            <td><font color="#FFFFFF"><?php echo $country ?></font><br> </td>
            
          </tr>
          
          
          <tr  class="" style="border:hidden">
              <td><font color="#FFAA33">teaching method：</td>
            <td><font color="#FFFFFF">

             <?php if ($_POST["on_line"] == "1") {
              echo "On line";

            }?>   


            <?php if ($_POST["record"] == "1") {
              echo "Record";

            }?>   
     


            <?php if ($_POST["face_to_face"] == "1") {
              echo "face to face";

            }?>   


            </td>
          </tr>
          <tr class="" style="border:hidden">
            <td><font color="#FFAA33">teaching ps：</td>
            <td><font color="#FFFFFF"><?php echo $teaching_method ?></font><br></td>
            
          </tr>
        
            
          </tr>

              <tr class="" style="border:hidden">
            <td><font color="#FFAA33">teaching time：</td>
            <td><font color="#FFFFFF"><?php echo $teaching_time ?></font><br></td>
            
          </tr>

          <tr  class="" style="border:hidden">
            <td><font color="#FFAA33">demand time：</td>
            <td><font color="#FFFFFF"><?php echo $demand_time ?></font><br></td>
            
          </tr>
          <tr  class="" style="border:hidden">
            <td><font color="#FFAA33">update time：</td>
            <td><font color="#FFFFFF"><?php echo $update_time ?></font><br>  </td>
            
          </tr>


        </table>
        
      
    </table>

      <div class="top-big-link">
          <input type="button" value="go back supply page" style="background-color:#0072E3" class="btn" onclick="location.href='demand_page.php'"">
          
      </div>
    </p>

        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>



  </body>

</html>