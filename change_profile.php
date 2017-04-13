<?php
//判斷使用者是否已登入
    if (isset($_COOKIE["account"])) { //判斷cookie中是否已建立"account"
        if ($_COOKIE["account"] == null or $_COOKIE["account"] == ""){ //判斷"account"中是否有資料
            header("Location:login.html"); //如果沒有就跳回登入頁面
        }   
    }else{
        header("Location:login.html"); //如果沒有就跳回登入頁面
    }
//判斷是否有更改密碼的權限
    if (isset($_COOKIE["ckpassword"])) { //判斷cookie中是否已建立"ckpassword"
        if ($_COOKIE["ckpassword"] != "1"){ //判斷"ckpassword"是否為1
            header("Location:before_use_member_center.php"); //如果錯誤就跳回密碼確認頁面
        }   
    }else{
        header("Location:before_use_member_center.php"); //如果沒有就跳回密碼確認頁面
    }
    
  require_once("dbtools.inc.php");
  
  //取得表單資料


  $account = $_COOKIE["account"];

 //

  //$new_email = $_POST["email"];
//  $new_phone = $_POST["phone"];

 $link = create_connection();
  //$link = mysqli_connect("localhost",'root',"08162426") or die;
//mysqli_select_db($link,"chicken");

$sql = "SELECT name,email,phone FROM user_information Where account = '$account'";

//mysqli_query($link,'SET CHARACTER utf8');
//mysqli_query($link,"SET collation_connection ='utf8_general_ci'");
$result = execute_sql($link, "chicken", $sql);
$meta = mysqli_fetch_object($result);

$name = $meta->name;
$new_email = $meta->email;
$new_phone = $meta->phone;
//$result = mysqli_query($link,$sql);
//$row = mysqli_fetch_object($result);

//echo $row;



//mysql_query("SET NAMES 'utf8'");
//  $result = mysql_query($sql);


   mysqli_free_result($result);
        
    
    mysqli_close($link);
   
   
   

 ?>



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
            function changeDisabled(value){
                if(value=='1'){
                    document.getElementById('phone').disabled=false;　// 變更欄位為可用
                    document.getElementById('email').disabled=false;　// 變更欄位為可用
                    document.getElementById('personal_information').disabled=false;　// 變更欄位為可用
                }else{
                    document.getElementById('phone').disabled=true;　// 變更欄位為禁用
                    document.getElementById('email').disabled=true;　// 變更欄位為禁用
                    document.getElementById('personal_information').disabled=true;　// 變更欄位為禁用

                }
            }
        //要加check資料的語法
            function check_data()
            {   
                //確認電話號碼
                if (document.user_information.phone.value.length == 0){
                //未填寫時提醒使用者輸入
                    alert("please enter your phone number");
                    return false;                
                }else{
                    if (document.user_information.phone.value.length != 10){
                    //檢查是否為10個字元
                        alert("the length of your phone number is not correct");
                        return false;
                    }
                    else{
                        var val = document.user_information.phone.value;
                        if(!/\b[0-9]+\b/.test(val)){
                        //驗證phone是否全為數字
                            alert("phone can only build up by numbers");
                            return false;
                        }
                    }
                    
                }  
            //確認email
                if (document.user_information.email.value.length == 0){
                //未填寫時提醒使用者輸入
                    alert("please enter your email");
                    return false;
                }
                user_information.submit();
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
                           <h3> <a href="order_has_been_created_page.php"> <span style="font-family:monospace;"><font color="#7600CC">Order has been created</font></span></a> </h3>  
                           <h3> <a href="order_has_been_not_created_page.php"> <span style="font-family:monospace;"><font color="#FFFFFF">Order has been not created</font></span></a> </h3>  
                           <h3> <a href="match.php"> <span style="font-family:monospace;"><font color="#BBBB00">match order</font></span></a> </h3>  
                        </div>


                        <div class="col-sm-7 form-box">                               <!-- 右邊 -->

                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<!-- 用圖檔(Log in) -->
                        			<h3><img src="assets/ico/change profile.png" alt=""></h3>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-pencil"></i>
                        		</div>
                            </div>

                            <div class="form-bottom">
			                    <form role="form" name="user_information" action="save_new_profile.php" method="post" class="registration-form">

                                    <div class="form-group">
                                        
                                        <input type="text" id="account" name="account" disabled="true" value="<?php echo $account ?>" class="form-first-name form-control" >
                                    </div>
			                    	
                                    <div class="form-group">
                                        
                                        <input type="text" id="name" name="name" disabled="true" value="<?php echo $name ?>" class="form-first-name form-control" >
                                    </div>


                                    <div class="form-group">
			                    		<label class="sr-only" for="form-first-name">cellphone</label>
			                        	<input type="text" id="phone" name="phone" disabled="true" value="<?php echo $new_phone ?>" class="form-first-name form-control" >
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-last-name">email</label>
			                        	<input type="text" id="email" name="email" disabled="true" placeholder="<?php echo $new_email ?>" class="form-last-name form-control">
			                        </div>
			                        

                                        
											




			                            <div class="top-big-link">
                                            <input type="button" id="personal_information" value="Personal Information" onClick="check_data()" disabled="true" style="background-color:#0072E3" class="btn">
                                            <input type="button" value="Change profile" onClick="changeDisabled(1)" style="background-color:#0072E3" class="btn">
                                        </div>
			                        <!--按下可修改個人資料-->
                                     

			                    </form>
		                    </div>
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
        
    </body>

</html>