<?php 
      require_once("dbtools.inc.php");
      
      //取得要顯示之記錄
      $supply_code = $_GET['supply_code'];
    
      //建立資料連接

      $account = $_POST['supplier'];
      $link = create_connection();

      //執行SQL查詢
      $sql = "SELECT  account,phone,email,introduction FROM  user_information ";

     
      $result = execute_sql($link, "chicken", $sql);

      $meta = mysqli_fetch_object($result);

      $supplier = $meta->account;
      $phone = $meta->phone;
      $email = $meta->email;
      $introduction = $meta->introduction;
    
      
    

                    
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
     <h2><font color="#FFAA33">supplier</font></h2>
     <h4><font color="#FFFFFF"><?php echo $supplier ?></font></h4> 
    <table  align="center" width="1000" height="400">

       <tr class="" style="border:hidden">
             <td> <font color="#FFAA33">phone：</font></td> 
             <td> <font color='#FFFFFF'>  <?php echo $phone?> </font><br></td>

       </tr>
       
           
      
  

       <tr class="" style="border:hidden">
             <td> <font color="#FFAA33"> email：</font></td> 
             <td> <font color='#FFFFFF'>  <?php echo $email ?> </font>  </td> 
       </tr>

       <tr class="" style="border:hidden">
             <td > <font color="#FFAA33">introduction：</font></td> 
             <td > <font color='#FFFFFF'>  <?php echo $introduction  ?>  </font> </td>
       </tr>

     
      
     </table>   
     
</table>
						     
        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
      
    </body>

</html>