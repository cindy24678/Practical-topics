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
        	
        //要加check資料的語法
        	function check_data()
        	{	

                 user.submit();

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
        <p></p>
</div>
 <div class="row">   
        <p></p>
</div>
 <div class="row">       
        <p></p>
</div>






                    <div class="row">                                            <!-- 第二列 -->

                    	<div class="col-sm-6 book">                                   <!-- 左邊 -->
                    	<!-- 小雞圖 -->
                    		<img src="assets/img/chickenman.png" alt=""> 

                    	</div>






                        <div class="col-sm-5 form-box">                               <!-- 右邊 -->

                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<!-- 用圖檔(Log in) -->
                        			<h3><img src="assets/ico/login.png" alt=""> </h3>

                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-pencil"></i>
                        		</div>
                            </div>

                            <div class="form-bottom">
			                    <form role="form" name="sign_in" action="checkpwd.php" method="post" class="registration-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-first-name">Account</label>
			                        	<input type="text" id="account" name="account" placeholder="Account..." class="form-first-name form-control" id="form-first-name">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-last-name">Password</label>
			                        	<input type="text" id="password" name="password" placeholder="Password..." class="form-last-name form-control" id="form-last-name">
			                        </div>
			                        
			                        
			                        <div class="top-big-link">

			                    



                                        <button title="submit"><img src="assets/ico/sign in.png" alt="" width="80" height="90" 
                                                                     onmouseout="this.src='assets/ico/sign in.png'"
                                                                     onmouseover="this.src='assets/ico/sign in_after.png'"
                                                                     onclick="setBanner(); showFlag(); "/>
                                        </button>




                            			<a href="register.html"> <img src="assets/ico/register_b.png" alt="" width="115" height="90" 
                                                                     onmouseout="this.src='assets/ico/register_b.png'"
                                                                     onmouseover="this.src='assets/ico/register_after.png'"
                                                                     onclick="setBanner(); showFlag(); "/> </a>
                                        

                                        <a href=""><img src="assets/ico/facebook.png" alt="" width="115" height="90" 
                                                                     onmouseout="this.src='assets/ico/facebook.png'"
                                                                     onmouseover="this.src='assets/ico/facebook_after.png'"
                                                                     onclick="setBanner(); showFlag(); "/> </a>
                                        
                                        </button> 
                                   
                            			<!-- <BUTTON type="submit" onClick="check_data()" WIDTH="200" style="WIDTH: 197px; HEIGHT: 50px" class="btn btn-link-1" href="#">Sign In</button>
                            			<BUTTON type="submit" WIDTH="200" style="WIDTH: 197px; HEIGHT: 50px" class="btn btn-link-2" onClick="location.href='register.html'">Register</button> -->
                                    </div>
							
			                        
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