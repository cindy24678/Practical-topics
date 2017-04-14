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

        <!-- 上方圖檔 -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">


         <script type="text/javascript">
            

          
　　
            

        </script>
</head>
<body>
<!-- Top menu -->
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
          
        </div><!--/.nav-collapse -->
      </div>
    </nav>  

        <!-- Top content -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">


                    <div class="row">                                            <!-- 第一列 -->
                        <div class="col-sm-8 col-sm-offset-2 text">
                        <!-- 用圖檔(CHICKEN) -->
                            <h1><img src="assets/ico/coop.png" alt=""> </h1>                 
                        </div>
                    </div>






                    <div class="row">                                            <!-- 第二列 -->

                      <div class="col-sm-4 book">                                   <!-- 左邊 -->
                        <!-- 小雞圖 -->
                           <h2> <span style="font-family:monospace;"><font color="orange">- profile -</font> </span> </h2>   
                           <h3> <a href="change_password.php" > <span style="font-family:monospace;"><font color="#F50000">Change Password</font></span> </a> </h3>  
                           <h3> <a href="change_profile.php"> <span style="font-family:monospace;"><font color="#F5F500">Change profile</font></span></a> </h3>  
                           <br>
                           <h2> <span style="font-family:monospace;"><font color="orange">- order -</font> </span> </h2>    
                           <h3> <a href="placement_services_page.php"> <span style="font-family:monospace;"><font color="#00CC00">Placement services</font></span></a> </h3>  
                           <h3> <a href="wishing_pool_page.php"> <span style="font-family:monospace;"><font color="#0000FA">Wishing pool</span></font></a> </h3>  
                        
                           <h3> <a href="match.php"> <span style="font-family:monospace;"><font color="#BBBB00">match order</font></span></a> </h3>  
                        </div>


                        <div class="col-sm-7 form-box">                               <!-- 右邊 -->

<?php
//排序評分
    function score_sort($a, $b){
        if($a["score"] == $b["score"]) return 0;

        return ($a["score"] > $b["score"]) ? -1 : 1; //由大排到小

    }


//導入資料庫處理檔案
    require_once("dbtools.inc.php");
//建立資料連接
    $link = create_connection();
//取得使用者帳號
    $account = $_COOKIE["account"];


//<!--使用者供給與他人需求媒合-->
   //取得要與demand比對的基礎資料與加分項目
    	$sql = "SELECT supply_title, language, on_line, record, face_to_face, lan_listen, lan_say, lan_read, lan_write FROM commodity_supply WHERE supplier = '$account' ORDER BY update_time DESC";
	    $result_user = execute_sql($link, "chicken", $sql);

	    $user_supplies = mysqli_num_rows($result_user); //使用者刊登了幾筆supply

	 

	  echo "<font color='#FFFFFF'>--------Match to your supplies--------</font><p>";   
	  $i = 1;
	//外迴圈(控制供給(使用者)方)
	  while ($row = mysqli_fetch_assoc($result_user) and $i <= $user_supplies){

	  //尋找語言相同、教學方式至少符合一項的需求資料，並依更新時間降冪排序
	    $sql ="SELECT demand_code, lan_listen, lan_say, lan_read, lan_write FROM commodity_demand WHERE language = '{$row["language"]}' AND ( (on_line = '{$row["on_line"]}' AND on_line = 1) OR (record = '{$row["record"]}' AND record = 1) OR (face_to_face = '{$row["face_to_face"]}' AND face_to_face = 1) ) AND demander != '$account' ORDER BY update_time DESC";

	    $result_others = execute_sql($link, "chicken", $sql);

	    $demands = mysqli_num_rows($result_others);
	    $j = 1;
	    echo "<td><h4><font color='#000000'>【title : " . $row["supply_title"] . "】</font></h4><br>"; //顯示title
	  //內迴圈(控制需求(他人)方)
	    while ($dem = mysqli_fetch_assoc($result_others) and $j <= $demands){
	    	

	    	$filt_dem[$j-1]["demand_code"] = $dem["demand_code"]; //取得demand_code

	       

	    	$filt_dem[$j-1]["score"] = 0; //初始化評分
	      	//每符合一項就加一分
	    		if ($dem["lan_listen"] == $row["lan_listen"] && $dem["lan_listen"] != 0) $filt_dem[$j-1]["score"] += 1;
	    		if ($dem["lan_say"] == $row["lan_say"] && $dem["lan_say"] != 0) $filt_dem[$j-1]["score"] += 1;
	    		if ($dem["lan_read"] == $row["lan_read"] && $dem["lan_read"] != 0) $filt_dem[$j-1]["score"] += 1;
	    		if ($dem["lan_write"] == $row["lan_write"] && $dem["lan_write"] != 0) $filt_dem[$j-1]["score"] += 1;	
		  		
	        	$j++; //比對下一筆需求資料
	    }
	    if (is_null($filt_dem)){ //確認是否有相符資料
	    	echo "找不到相符的資料<br>";
	    }else{
		    usort($filt_dem, 'score_sort'); //依分數排序媒合資料
		    
		    
		    for ($k = 1; $k <= min($demands, 3); $k++){ //最多列印3筆，不足時僅列印符合的筆數
		    	
			//依filt_dem取得的demand_code尋找資料
				$sql ="SELECT demand_title, lan_listen,lan_say,lan_read,lan_write,update_time FROM commodity_demand WHERE demand_code = '{$filt_dem[$k-1]["demand_code"]}'";
		    	
		    	$matched = execute_sql($link, "chicken", $sql);
		    	$matched_row = mysqli_fetch_assoc($matched);

		    	
		    	if ($filt_dem[$k-1]["score"] >= 1){ //評分大於1時輸出資料

		    		echo "<table width='500' align='center' cellspacing='3'>";
		    	    	  echo "<tr>";
		        	    	echo "<td width='120' align='center'><img src='assets/img/刊登.png'></td>";
		            		echo "<td><font color='#FFAA33'>title：</font>" . "<font color='#FFFFFF'>" . $matched_row["demand_title"] . "</font><br>";
		            		
		              		 echo "<font color='#FFAA33'>ability：</font>"  ;

                                                             if ($row["lan_listen"] == '1') 
                                                             {
                                                              echo " <font color='#FFFFFF'>Listen</font>";
                                                             } 

                                                             if ($row["lan_say"]  == '1') 
                                                             {
                                                              echo " <font color='#FFFFFF'>Speak</font>";

                                                             }  

                                                            if ($row["lan_read"]== '1') 
                                                            {
                                                              echo " <font color='#FFFFFF'>Read</font>";
                                                            }

                                                            if ($row["lan_write"]  == '1') 
                                                            {
                                                              echo " <font color='#FFFFFF'>Write</font>";

                                                            }
                            echo "<br>";
		             	 	echo "<font color='#FFAA33'>uptime：</font>" . "<font color='#FFFFFF'>" . $matched_row["update_time"] ."<p>" ;
		     		
		        	    	  echo "<a href='show_personal_demand.php?demand_code=";
		            	  	echo $filt_dem[$k-1]["demand_code"] . "'> <input type='button' value='查看'></a>"; 



		            		  echo "<hr>";
		            		echo "</td>";
		           
		        	  	echo "</tr>";
		        		echo "</table>" ;
		    	}else {  
		    		break;  //否則直接跳出for迴圈
		    	}
		    }
		}
	    $i++; //比對下一筆使用者供給資料

	  }
//</!--使用者供給與他人需求媒合-->

//<!--使用者需求與他人供給媒合-->
	//取得要與supply比對的基礎資料與加分項目
	    $sql = "SELECT demand_title, language, on_line, record, face_to_face, lan_listen, lan_say, lan_read, lan_write FROM commodity_demand WHERE demander = '$account' ORDER BY update_time DESC";
	    $result_user = execute_sql($link, "chicken", $sql);

	    $user_demands = mysqli_num_rows($result_user); //使用者刊登了幾筆demand

     echo "<p>";
      echo "<p>";
       echo "<p>";
     echo "🐔🐔🐔🐔🐔🐔🐔🐔🐔🐔🐔🐔🐔🐔🐔🐔<p>";

	   echo "<font color='#FFFFFF'>--------Match to your demands--------</font><p>";   
	  $i = 1;
	//外迴圈(控制需求(使用者)方)
	  while ($row = mysqli_fetch_assoc($result_user) and $i <= $user_demands){

	  //尋找語言相同、教學方式至少符合一項的需求資料，並依更新時間降冪排序
	    $sql ="SELECT supply_code, lan_listen, lan_say, lan_read, lan_write FROM commodity_supply WHERE language = '{$row["language"]}' AND ( (on_line = '{$row["on_line"]}' AND on_line = 1) OR (record = '{$row["record"]}' AND record = 1) OR (face_to_face = '{$row["face_to_face"]}' AND face_to_face = 1) ) AND supplier != '$account' ORDER BY update_time DESC";

	    $result_others = execute_sql($link, "chicken", $sql);

	    $supplies = mysqli_num_rows($result_others);
	    $j = 1;
	    echo "<td><h4><font color='#000000'>【title : " . $row["demand_title"] . "】</font></h4><br>"; //顯示title
	  //內迴圈(控制供給(他人)方)
	    while ($sup = mysqli_fetch_assoc($result_others) and $j <= $supplies){
	    	

	    	$filt_sup[$j-1]["supply_code"] = $sup["supply_code"]; //取得supply_code

	       

	    	$filt_sup[$j-1]["score"] = 0; //初始化評分
	      	//每符合一項就加一分
	    		if ($sup["lan_listen"] == $row["lan_listen"] && $sup["lan_listen"] != 0) $filt_sup[$j-1]["score"] += 1;
	    		if ($sup["lan_say"] == $row["lan_say"] && $sup["lan_say"] != 0) $filt_sup[$j-1]["score"] += 1;
	    		if ($sup["lan_read"] == $row["lan_read"] && $sup["lan_read"] != 0) $filt_sup[$j-1]["score"] += 1;
	    		if ($sup["lan_write"] == $row["lan_write"] && $sup["lan_write"] != 0) $filt_sup[$j-1]["score"] += 1;	
		  		
	        	$j++; //比對下一筆供給資料
	    }

	   	if (is_null($filt_sup)){ //確認是否有相符資料
	   		echo "找不到相符的資料 <br>";
	   	}else{
	   		usort($filt_sup, 'score_sort'); //依分數排序媒合資料
	    
	    
		    for ($k = 1; $k <= min($supplies, 3); $k++){ //最多列印3筆，不足時僅列印符合的筆數
		    	
			//依filt_sup取得的supply_code尋找資料
				$sql ="SELECT supplier, supply_title, update_time FROM commodity_supply WHERE supply_code = '{$filt_sup[$k-1]["supply_code"]}'";
		    	
		    	$matched = execute_sql($link, "chicken", $sql);
		    	$matched_row = mysqli_fetch_assoc($matched);

		    	
		    	if ($filt_sup[$k-1]["score"] >= 1){ //評分大於1時輸出資料
		    	
		    		echo "<table width='500' align='center' cellspacing='3'>";
		    	    	  echo "<tr>";
		        	    	echo "<td width='120' align='center'><img src='assets/img/刊登.png'></td>";
		            		echo "<td><font color='#FFAA33'>title：</font>" . "<font color='#FFFFFF'>" . $matched_row["supply_title"] . "</font><br>";
		            		
		              		 echo "<font color='#FFAA33'>ability：</font>"  ;

                                                             if ($row["lan_listen"] == '1') 
                                                             {
                                                              echo " <font color='#FFFFFF'>Listen</font>";
                                                             } 

                                                             if ($row["lan_say"]  == '1') 
                                                             {
                                                              echo " <font color='#FFFFFF'>Speak</font>";

                                                             }  

                                                            if ($row["lan_read"]== '1') 
                                                            {
                                                              echo " <font color='#FFFFFF'>Read</font>";
                                                            }

                                                            if ($row["lan_write"]  == '1') 
                                                            {
                                                              echo " <font color='#FFFFFF'>Write</font>";

                                                            }
                            echo "<br>";
		             	 	echo "<font color='#FFAA33'>uptime：</font>" . "<font color='#FFFFFF'>" . $matched_row["update_time"] ."<p>" ;
		        	    	  echo "<a href='show_personal_supply.php?supply_code=";
		            	  	echo $filt_sup[$k-1]["supply_code"] . "'> <input type='button' value='查看'></a>"; 



		            		  echo "<hr>";
		            		echo "</td>";
		           
		        	  	echo "</tr>";
		        		echo "</table>" ;
		    	}else {  
		    		break;  //否則直接跳出for迴圈
		    	} 	
		   	}
	    
	    }
	    $i++; //比對下一筆使用者需求資料

	  }
//</!--使用者需求與他人供給媒合-->
          
//釋放記憶體空間
	mysqli_free_result($result_user);
    mysqli_free_result($result_others);

    mysqli_close($link);
?>    






        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
    </body>

</html>