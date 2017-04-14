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
        
       window.history.forward(1);


        //確認表單資料
            function check_data(){
            //確認名字
                 if (document.user_information.name.value.length == 0){
                     //未填寫時提醒使用者輸入
                     alert("please enter your real name");
                     return false;
                 }
            //確認身分證字號或護照號碼
                if (document.user_information.identity_number.value.length == 0){
                //未填寫時提醒使用者輸入
                    alert("please enter your identity number");
                    return false;
                }
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









        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 col-sm-offset-2 text">
                        <!-- 用圖檔(CHICKEN) -->
                            <h1><img src="assets/ico/chicken.png" alt=""> </h1>                 
                        </div>
                    </div>

                    <div class="row">
                    	<div class="col-sm-3 form-box">
                          
                        </div>


                        <div class="col-sm-5 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<!-- 用圖檔(Personal Information) -->
                        			<h3>Personal Information</h3>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-pencil"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" name="user_information" action="save_user_information.php" method="post" class="user-form">
			                    <hr>			                    
			                    <!--user_information form-->
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-last-name">enter your real name</label>
			                        	<input type="text" id="name" name="name" placeholder="enter your real name..." class="form-last-name form-control">
			                        </div>








			                        <div class="form-group">
			                        	<label class="sr-only" for="form-last-name">enter your identity number</label>
			                        	<input type="text" id="identity_number" name="identity_number" placeholder="enter your identity card..." class="form-last-name form-control">
			                        </div>		

	                        
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-last-name">enter your phone number</label>
			                        	<input type="text" id="phone" name="phone" placeholder="enter your phone number..." class="form-last-name form-control">
			                        </div>			                        
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-last-name">enter your email</label>
			                        	<input type="text" id="email" name="email" placeholder="enter your email..." class="form-last-name form-control">
			                        </div>
                              
                                      <select  id='country' name='country' class="span10">
                                                                    <option value='null'>  choose a country  </option>
                                                                    <option value='Taiwan'>  Taiwan  </option>
                                                                    <option value='Japan'>  Japan  </option>
                                                                    <option value='Korean'>  Korean  </option>
                                                                    <option value='China'>  China  </option>
                                                                    <option value='Germany'>  Germany  </option>
                                                                    <option value='Spain'>  Spain  </option>
                                                                    <option value='France'>  France  </option>
                                                                    <option value='Singapore'> Singapore </option>
                                                        </select>
									
									<!--Summit buttun-->
			                        <div class="top-big-link">
                            			<input type="button" value="Personal Information" onClick="check_data()" style="background-color:#0072E3" class="btn">
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