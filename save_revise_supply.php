<?php
    require_once("dbtools.inc.php");
//判斷使用者是否已登入
    if (isset($_COOKIE["account"])) { //判斷cookie中是否已建立"account"
        if ($_COOKIE["account"] == null or $_COOKIE["account"] == ""){ //判斷"account"中是否有資料
            header("Location:login.html"); //如果沒有就跳回登入頁面
        }   
    }
    else{
        header("Location:login.html"); //如果沒有就跳回登入頁面
    }

      
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

                 commodity_supply.submit();

        	}	
        	

        </script>

    </head>

    <body>

		<!-- Top menu -->
		<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
			<div class="container">
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-left">
						<li>
							
							
							<span class="li-social">
                           
                                <a href="homepage.php"><img src="assets/ico/logo.png" width="100" height="100"></a> 
                               
                                <a href="supply_page.php"><img src="assets/ico/post.png" width="100" height="100"></a> 
                           
                                <a href="demand_page.php"><img src="assets/ico/wishing well.png" width="100" height="100"></a> 
                           
                                <a href="before_use_member_center.php"> <img src="assets/ico/member center.png" alt="" width="100" height="100" 
                                                                     onmouseout="this.src='assets/ico/member center.png'"
                                                                     onmouseover="this.src='assets/ico/member center click.png'"
                                                                     onclick="setBanner(); showFlag(); "/></a>
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

                               
                            </span>
						</li>
					</ul>
				</div>
			</div>
		</nav>

        <!-- Top content -->
        <div class="top-content">	
            <div class="inner-bg">
                <div class="container">
                    
                    
                    <div class="row">
                    	<div class="span10">
                             
		                        <div class="col-sm-5 form-box">
		                        	<div class="form-top">
		                        		<div class="form-top-left">
		                        			<!-- 用圖檔(Register) -->
		                        			<h3><img src="assets/ico/supply.png" alt=""></h3>
		                        		</div>
		                        		<div class="form-top-right">
		                        			<i class="fa fa-pencil"></i>
		                        		</div>
		                            </div>


		                            <!--form area-->
		                            <div class="form-bottom">
					                    <!--
                              <form role="form" id= "commodity_supply" name="commodity_supply" action="save_supply.php" method="post" class="user-form" >
                              -->
                              <?php
                                echo "<form role='form' id='commodity_supply' name='commodity_supply' ";
                                echo "action='update_supply.php?supply_code=";
                                echo $supply_code . "' method='post' class='user-form'>";
                              ?>

					                    	<hr>
					                    	<div class="form-group">
					                    		<label class="sr-only" for="form-first-name">enter new title</label>
					                        	<input type="text" id="supply_title" name="supply_title" value=<?php echo $supply_title ?> placeholder="enter new title..." class="form-first-name form-control"  >
					                        </div>

					                        <div class="form-group">

					                        	<textarea type="textarea" id="supply_description" name="supply_description"  class="form-first-name form-control"   cols="43" rows="5"> <?php echo $supply_description ?> </textarea>
					                        </div>
					                        

					                    	<hr>		                    
		                                <!-- Single button -->								





		        							<select  id='language' name='language' class="span10">
                                                                <option value='null'>  choose a language  </option>
                                                                <option value='Chinese'>  Chinese  </option>
                                                                <option value='Japan'>  Japan  </option>
                                                                <option value='Español'>  Español  </option>
                                                                <option value='Bahasa Melayu'>  Bahasa Melayu  </option>
                                                                <option value='粵語'>  粵語  </option>
                                                                <option value='언문'>  언문  </option>
                                                                <option value='Русский'>  Русский  </option>
                                                                <option value='اردو'>  اردو  </option>
                                                                <option value='മലയാളം'> മലയാളം  </option>
                                                                <option value='Ελληνικά'>  Ελληνικά  </option>
                                                                <option value='Ганґыл'>  Ганґыл  </option>
                                                    </select>
										<!--language ability-->
											<p>
												<label>
                        
													
                          <input type="checkbox" id="lan_listen" name="lan_listen" value="1" <?php echo ($lan_listen==1 ? 'checked' : '');?>>
													
                          Listen</label>
													      

												<label>
													<input type="checkbox" id="lan_say" name="lan_say" value="1" <?php echo ($lan_say==1 ? 'checked' : ''); ?>>


													Speak</label>

												<label>
												    <input type="checkbox" id="lan_read" name="lan_read" value="1" <?php echo ($lan_read==1 ? 'checked' : ''); ?>>

												    Read</label>

											    <label>
												    <input type="checkbox" id="lan_write" name="lan_write" value="1" <?php echo ($lan_write==1 ? 'checked' : ''); ?>>

												    Write</label> 

		                 <hr>	

											</p>

										<!--teaching method-->
											<p><h4>Teaching method</h4></p>
													
											<p>
											    <label>
												    <input type="checkbox" id="on_line" name="on_line" value="1" <?php echo ($on_line==1 ? 'checked' : ''); ?>>
											    	on_line</label>

												<label>
												    <input type="checkbox" id="record" name="record" value="1"  <?php echo ($record==1 ? 'checked' : ''); ?>>
												    record</label>

												<label>
												    <input type="checkbox" id="face_to_face" name="face_to_face" value="1" <?php echo ($face_to_face==1 ? 'checked' : ''); ?>>
												    face to face</label>

												<label>
					                        	    <input type="text" id="teaching_method" name="teaching_method" value=<?php echo $teaching_method ?> placeholder="詳細說明 例如：平台、地點" class="form-first-name form-control" >
					                        	</label>
		                                    

		                                        <hr>

											</p>
										<!--teaching time-->
		                                	<p><h4>Teaching time</h4></p>

											<div class="form-group">
					                        	<textarea type="textarea" id="teaching_time" name="teaching_time"  placeholder="" class="form-first-name form-control"   cols="43" rows="5"> <?php echo $teaching_time ?></textarea>
					                        </div>
		                                   

					                        <div class="top-big-link">
                                    <input type="button" value="return" onClick="location.href='placement_services_page.php'" style="background-color:#0072E3" class="btn">
		                            			
                                    
                                      <input type"'button" value="renew" onClick="check_data()" style="background-color:#0072E3" class="btn">
                                    
		                                    </div>
											<p></p>

					                    </form>
				                    </div><!--/form area-->
		                        </div>
                            </div>

		                    <div class="span2">
		                        			<!-- 用圖檔(Register) -->
		                        <h3><img src="assets/img/刊登.png" alt="" width="550" height="550"></h3>
		                        		
		                        		
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