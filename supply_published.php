<?php
//判斷使用者是否已登入
    if (isset($_COOKIE["account"])) { //判斷cookie中是否已建立"account"
        if ($_COOKIE["account"] == null or $_COOKIE["account"] == ""){ //判斷"account"中是否有資料
            header("Location:login.html"); //如果沒有就跳回登入頁面
        }   
    }
    else{
        header("Location:login.html"); //如果沒有就跳回登入頁面
    }
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

        

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>



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
                    <div>
                    	


  

<p></p>
<p></p>

<p></p>
<p></p>
<p></p>



                    </div>

                    
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
					                    <form role="form" id= "commodity_supply" name="commodity_supply" action="save_supply.php" method="post" class="user-form" >
					                    	<hr>
					                    	<div class="form-group">
					                    		<label class="sr-only" for="form-first-name">enter new title</label>
					                        	<input type="text" id="supply_title" name="supply_title" placeholder="enter new title..." class="form-first-name form-control"  >
					                        </div>

					                        <div class="form-group">

					                        	<textarea type="textarea" id="supply_description" name="supply_description" placeholder="enter new description..." class="form-first-name form-control"   cols="43" rows="5"></textarea>
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
													<input type="checkbox" id="lan_listen" name="lan_listen" value="1" />
													Listen</label>
													      

												<label>
													<input type="checkbox" id="lan_say" name="lan_say" value="1"  />
													Speak</label>

												<label>
												    <input type="checkbox" id="lan_read" name="lan_read" value="1"  />
												    Read</label>

											    <label>
												    <input type="checkbox" id="lan_write" name="lan_write" value="1"  />
												    Write</label> 

		                                		<hr>	

											</p>

										<!--teaching method-->
											<p><h4>Teaching method</h4></p>
													
											<p>
											    <label>
												    <input type="checkbox" id="on_line" name="on_line" value="1" />
											    	on_line</label>

												<label>
												    <input type="checkbox" id="record" name="record" value="1"  />
												    record</label>

												<label>
												    <input type="checkbox" id="face_to_face" name="face_to_face" value="1" />
												    face to face</label>

												<label>
					                        	    <input type="text" id="teaching_method" name="teaching_method" placeholder="詳細說明 例如：平台、地點" class="form-first-name form-control" >
					                        	</label>
		                                    

		                                        <hr>

											</p>
										<!--teaching time-->
		                                	<p><h4>Teaching time</h4></p>

											<div class="form-group">
					                        	<textarea type="textarea" id="teaching_time" name="teaching_time" placeholder="" class="form-first-name form-control"   cols="43" rows="5"></textarea>
					                        </div>
	
		                                     <button title="submit"  value="up" onClick="check_data()" ><img src="assets/ico/post_before.png" alt="" width="85" height="50" 
                                                                     onmouseout="this.src='assets/ico/post_before.png'"
                                                                     onmouseover="this.src='assets/ico/post_after.png'"
                                                                     onclick="setBanner(); showFlag(); "/>
                                             </button> 

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