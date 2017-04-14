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
        	
        //確認表單資料
        	function check_data(){
        	//確認帳號字數
				if (document.user.account.value.length == 0){
					//未填寫時提醒使用者輸入
	 	    		alert("please enter your account");
			    	return false;
				}
		    	else{
		    		if (document.user.account.value.length < 6 || document.user.account.value.length > 12){
		     			alert("please make your account in 6 ~ 12");
		     			return false;
					}
				}
			//確認密碼
				if (document.user.password.value.length == 0 || document.user.ckpassword.value.length == 0){ 
					//未填寫時提醒使用者輸入
					alert("please enter your password");
					return false;
				}else{
					if (document.user.password.value.length < 6 || document.user.password.value.length > 12 ||
						document.user.ckpassword.value.length < 6 || document.user.ckpassword.value.length > 12){
		     			alert("please make your account in 6 ~ 12");
		     			return false;
					}else{
						if (document.user.ckpassword.value != document.user.password.value){
		 					alert("password error");
	    					return false;
	    				}else{
	    					user.submit();
	    				}
					}
				}
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
            <li><a href="homepage.php"><img src="assets/ico/logo.png" width="50" height="50"   ><font color="#FFAA33" > Homepage</font></a></li>
            <li><a href="supply_page.php"><img src="assets/ico/post.png" width="50" height="50"><font color="#FFAA33" > Supply </font></a></li>
            <li><a href="demand_page.php"><img src="assets/ico/wishing well.png" width="50" height="50"><font color="#FFAA33" > Demand </font></a></li>
            <li><a href="before_use_member_center.php"><img src="assets/ico/member center.png" alt="" width="50" height="50" 
                                                                     onmouseout="this.src='assets/ico/member center.png'"
                                                                     onmouseover="this.src='assets/ico/member center click.png'"
                                                                     onclick="setBanner(); showFlag(); "/><font color="#FFAA33" > Member </font></a></li>
            <? php 
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

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 col-sm-offset-2 text">
                        <!-- 用圖檔(CHICKEN) -->
                            <h1><img src="assets/ico/coop.png" alt=""> </h1>                 
                        </div>
                    </div>

                    <div class="row">
                    	<div class="col-sm-3 form-box">
                          
                        </div>


                        <div class="col-sm-5 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<!-- 用圖檔(Register) -->
                        			<h3><img src="assets/ico/register.png" alt=""></h3>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-pencil"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" name="user" action="save_user.php" method="post" class="user-form">
			                    <hr>
			                    <!--user form-->
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-first-name">enter new account</label>
			                        	<input type="text" id="account" name="account" placeholder="enter new account..." class="form-first-name form-control">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-last-name">enter new password</label>
			                        	<input type="password" id="password" name="password" placeholder="enter new password..." class="form-last-name form-control">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-last-name">enter new password again</label>
			                        	<input type="password" id="ckpassword" name="ckpassword" placeholder="enter new password again..." class="form-last-name form-control">
			                        </div>
			                        
			                    <hr>
									<!--Summit buttun-->
			                        <div class="top-big-link">
                            			<input type="button" value="Register" onClick="check_data()" style="background-color:#0072E3" class="btn">
                                    </div>
									<p></p>	
			                        
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
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>