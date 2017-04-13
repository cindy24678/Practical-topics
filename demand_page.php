<!DOCTYPE html>
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


        <script type="text/javascript">
        	
        //要加check資料的語法
        	function check_data()
        	{	

                 user.submit();

        	}	
        	

        </script>

    </head>

    <body>

		<!-- Top menu -->
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


        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">



                
<div class="row">       
        <p></p>
</div>
 <div class="row">   
        <p></p>
</div>
 <div class="row">       
        <p></p>
</div>
                    <div class="row">
                        <div class="col-sm-7 col-sm-offset-2 text">
                        <!-- 用圖檔(CHICKEN) -->
                            <h1><img src="assets/ico/demand.png" alt=""> </h1>                 
                        </div>
                    </div>

                    <div class="row">
                    	<div class="col-sm-3 form-box">
                          
                        </div>


                        <div class="col-sm-5 form-box">
                        	
                            
			                    <form role="form" action="save_userdata.php" method="post" class="user-form" name="user">
			                    


                                <?php
                                          require_once("dbtools.inc.php");
                                                
                                          //指定每頁顯示幾筆記錄
                                          $records_per_page = 4;

                                          //取得要顯示第幾頁的記錄
                                          if (isset($_GET["page"]))
                                            $page = $_GET["page"];
                                          else
                                            $page = 1;

                                          //建立資料連接
                                          $link = create_connection();
                                                
                                          //執行 SQL 命令
                                          $sql = "SELECT * FROM commodity_demand ORDER BY demand_code DESC";    
                                          $result = execute_sql($link, "chicken", $sql);

                                          //取得記錄數
                                          $total_records = mysqli_num_rows($result);

                                          //計算總頁數
                                          $total_pages = ceil($total_records / $records_per_page);

                                          //計算本頁第一筆記錄的序號
                                          $started_record = $records_per_page * ($page - 1);

                                          //將記錄指標移至本頁第一筆記錄的序號
                                          mysqli_data_seek($result, $started_record);


                                          echo "<table width='500' align='center' cellspacing='3'>";

                                          //顯示記錄
                                          $j = 1;
                                          while ($row = mysqli_fetch_assoc($result) and $j <= $records_per_page)
                                          {
                                            echo "<tr bgcolor='" . $bg[$j - 1] . "'>";
                                           
                                            echo "<td>作者：" . $row["demander"] . "<br>";
                                            echo "主題：" . $row["demand_title"] . "<br>";
                                            echo "時間：" . $row["update_time"] ;

                                            echo "<a href='show_personal_demand.php?demand_code=";
                                            echo $row["demand_code"] . "'> <input type='button' value='查看'></a>"; 

                                            echo "<hr>";
                                            //echo $row["supply_description"] . "</td></tr>";
                                            $j++;
                                          }
                                          //echo "</table>" ;

                                          //產生導覽列
                                          echo "<p align='center'>";

                                          if ($page > 1)
                                            echo "<a href='demand_page.php?page=". ($page - 1) . "'>上一頁</a> ";

                                          for ($i = 1; $i <= $total_pages; $i++)
                                          {
                                            if ($i == $page)
                                              echo "$i ";
                                            else
                                              echo "<a href='demand_page.php?page=$i'>$i</a> ";
                                          }

                                          if ($page < $total_pages)
                                            echo "<a href='demand_page.php?page=". ($page + 1) . "'>下一頁</a> ";
                                          echo "</p>";

                                          //釋放記憶體空間
                                          mysqli_free_result($result);
                                          mysqli_close($link);
                                    ?>


			                       <div class="top-big-link">
                                        <input type="button" value='post' onclick = "location.href='demand_published.php'">
                                   </div>
									<p></p>	
			                        

			                    </form>
		                  
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>