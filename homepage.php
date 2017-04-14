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
        <p></p>
</div>
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
        <p></p>
</div>
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
        <p></p>
</div>






        <!-- Top content -->
        <div class="hero-unit">




        <a href="gather.html"><img src="assets/img/japan.png" alt="" width="150" height="150" 
                                                                     onmouseout="this.src='assets/img/japan.png'"
                                                                     onmouseover="this.src='assets/img/japan_after.png'"
                                                                     onclick="setBanner(); showFlag(); "/></a>
        <a href="gather.html"><img src="assets/img/french.png" alt="" width="150" height="150" 
                                                                     onmouseout="this.src='assets/img/french.png'"
                                                                     onmouseover="this.src='assets/img/french_after.png'"
                                                                     onclick="setBanner(); showFlag(); "/></a>

       
        <a href="gather.html"><img src="chickenman.png" width="150" height="150" onMouseOver="this.width=this.width*1.2;this.height=this.height*1.2" onMouseOut="this.width=this.width/1.2;this.height=this.height/1.2" ></a>

        <a href="gather.html"><img src="chickenman.png" width="150" height="150" onMouseOver="this.width=this.width*1.2;this.height=this.height*1.2" onMouseOut="this.width=this.width/1.2;this.height=this.height/1.2" ></a>

              <h1><span style="font-family:fantasy;"> <font color="#FFAA33" >What do you want to learn?</font></span></h1>
              
      </div>
      <!-- Main hero unit for a primary marketing message or call to action -->
      <br>
      <div class="hero-unit">


        <a href="gather.html"><img src="chickenman.png" width="150" height="150" onMouseOver="this.width=this.width*1.2;this.height=this.height*1.2" onMouseOut="this.width=this.width/1.2;this.height=this.height/1.2" ></a>

        <a href="gather.html"><img src="chickenman.png" width="150" height="150" onMouseOver="this.width=this.width*1.2;this.height=this.height*1.2" onMouseOut="this.width=this.width/1.2;this.height=this.height/1.2" ></a>

        <a href="gather.html"><img src="chickenman.png" width="150" height="150" onMouseOver="this.width=this.width*1.2;this.height=this.height*1.2" onMouseOut="this.width=this.width/1.2;this.height=this.height/1.2" ></a>

        <a href="gather.html"><img src="chickenman.png" width="150" height="150" onMouseOver="this.width=this.width*1.2;this.height=this.height*1.2" onMouseOut="this.width=this.width/1.2;this.height=this.height/1.2" ></a>



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