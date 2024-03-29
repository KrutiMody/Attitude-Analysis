﻿<?php
include('connect.php');
include('sign-up-process.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Predict Your Attitude</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/bootstrap-social.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
     <!-- FLEXSLIDER CSS -->
<link href="assets/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />   

  <!-- Google	Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
</head>
<body >
   <!--Navbar section started -->
 <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><p class="logo-custom">AttitudePrediction</p></a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="#home">HOME</a></li>
                     <li><a href="#result-sec">RESULT</a></li>
                    <li><a href="#info-sec">HELP</a></li>
                     <li><a href="#contact-sec">CONTACT</a></li>
                </ul>
            </div>
           
        </div>
    </div>
      <!--NAVBAR SECTION END-->

      <!--Home section started -->
       <div class="home-sec" id="home" >
           <div class="overlay">
 <div class="container">
           <div class="row text-center " >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
                <div class="flexslider set-flexi" id="main-section" >
                  <br>
                  <br>
                  <br>
                    <p>Please login with Facebook to submit your Facebook status to our prediction engine and view the output of the API. You are asked to log in so we can collect your status but we will not post to your wall and will not store your Facebook profile information or any results of this predictions.</p>
                    
                    <br>
					<!--fb:login-button show-faces=”true” width=”200” max-rows=”1”></fb:login-button-->
					<div id=”welcome”></div>
					<!--div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="false" data-auto-logout-link="true"></div-->
					<!--div class="btn btn-social btn-facebook" data-show-faces="false" data-auto-logout-link="true"><span class="fa fa-facebook"></span>Login with facebook</div-->
                    <a  href="#" class="btn btn-social btn-facebook" ><span class="fa fa-facebook"></span>
                               Login with facebook
                    </a>
                </div>
                   
     
              
              
            </div>
                
               </div>
                </div>
           </div>
           
       </div>
       <!--HOME SECTION END-->   
    <div  class="tag-line" >
         <div class="container">
           <div class="row  text-center" >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
        <h2 data-scroll-reveal="enter from the bottom after 0.1s" ><i class="fa fa-circle-o-notch"></i> Predict Your Attitude <i class="fa fa-circle-o-notch"></i> </h2>
        <p data-scroll-reveal="enter from the bottom after 0.3s"> This is a prediction of your personality traits based on your Facebook status. It uses a snapshot of your digital footprint to visualise how others perceive you online and therefore may not be an entirely accurate picture of who you really are. You could take more psychometric tests as well and compare the results!</p>

                   </div>
               </div>
             </div>
        
    </div>
    <!--HOME SECTION TAG LINE END-->  
    

    <!-- Result section started-->
         <div id="result-sec" class="container set-pad" >
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">RESULT </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s" >
                      There is no result to show right now. Please login with facebook to see the result.
                         </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->


          
             </div>
   <!-- Result SECTION END-->

   <!--Detail section started -->
   <div id="info-sec" class="container set-pad">
      <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">Big5 Personality Traits.</h1>
                     <p data-scroll-reveal="enter from the bottom after 0.03s">Personality is a fundamental differentiating factor of human behavior. Research in the
psychology literature has led to a well established model for personality recognition and
description, called the Big Five Personality Model.</p>
                 </div>

              <div class="row" >
           
               
                 <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                     <div class="about-div">
                    
                   <h3 >OPENNESS</h3>
                 <hr />
                   <p class="para">
                     It is related to imagination, creativity, curiosity,
tolerance, political liberalism, and appreciation for culture. People scoring high on
Openness like change, appreciate new and unusual ideas, and have a good sense of
aesthetics.  
                       
                   </p>
              
                </div>
                   </div>
                   <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
                     <div class="about-div">
                     
                   <h3 >CONCIENTIOUSNESS</h3>
                 <hr />
                       
                   <p class="para">
                     It measures preference for an organized approach to life in contrast
to a spontaneous one. People scoring high on Conscientiousness are more likely to be well organized, reliable, and consistent. They enjoy planning, seek achievements, and
pursue long-term goals. 
                   </p>
               
                </div>
                   </div>
                 <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                     <div class="about-div">
                         
                       <h3 >EXTROVERSION</h3>
                     <hr />
                          
                       <p class="para">
                          It measures a tendency to seek stimulation in the external world, the
company of others, and to express positive emotions. People scoring high on Extroversion tend to be more outgoing, friendly, and socially active. They are usually
energetic and talkative; they do not mind being at the center of attention, and make
new friends more easily.
                           
                       </p>
               
                </div>
                   </div>
                 </div>

                <div class="row">

                   <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                     <div class="about-div">
                         
                       <h3 >AGREEABLENESS</h3>
                     <hr />
                          
                       <p class="para">
                         It relates to a focus on maintaining positive social relations, being
friendly, compassionate, and cooperative. People scoring high on Agreeableness people tend to trust others and adapt to their needs.  
                           
                       </p>
               
                </div>
                   </div>

                   <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                     <div class="about-div">
                         
                       <h3 >NEUROTICISM</h3>
                     <hr />
                           
                       <p class="para">
                         It measures the tendency
to experience mood swings and emotions such as guilt, anger, anxiety, and depression. People scoring high on Neuroticism are more likely to
experience stress and nervousness, while people scoring low on Neuroticism tend to be calmer and self-confident. 
                           
                       </p>
               
                </div>
                   </div>
                 
                 
               </div>
             </div>

    </div>
  
    <!-- Detail section ended -->


   <!-- Contact section started -->
    <div id="contact-sec"   >
      <div class="overlay">
        <div class="container set-pad">
          <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line" >CONTACT US  </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                      
                         </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->
           <div class="row set-row-pad"  data-scroll-reveal="enter from the bottom after 0.5s" >
           
               
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <form method="post">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control "  required="required" placeholder="Your Name" />
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control " required="required"  placeholder="Your Email" />
                        </div>
						<div class="form-group">
                            <input type="text" name="twitterid" class="form-control " required="required"  placeholder="Your Twitter ID" />
                        </div>
						<div class="form-group">
                            <input type="email" name="fbemail" class="form-control " required="required"  placeholder="Your Facebook Email" />
                        </div>
                        <!--div class="form-group">
                            <textarea name="message" required="required" class="form-control" style="min-height: 150px;" placeholder="Message"></textarea>
                        </div-->
                        <div class="form-group">
                            <button type="submit" class="btn btn-info btn-block btn-lg">SUBMIT REQUEST</button>
                        </div>
						<div class="form-group">
                            <a href="/my-link/"><button type="button" class="btn btn-info btn-block btn-lg">CREATE REPORT</button></a>
                        </div>
                    </form>
					<?php
						if(isset($_POST["submit"]))
						{
							$flag=0;
							$name =@$_POST['name'];	
							$email = @$_POST['email'];
							//$password = @$_POST['password'];
							//$cpassword =@$_POST['cpassword'];	
							$twitterid = @$_POST['twitterid'];
							$fbemail = @$_POST['fbemail'];
							
							if (empty($name) || empty($email) || empty ($twitterid) || empty($fbemail)){
								$flag=1;
							}
							

							if($flag==0)
							{

								require_once 'connect.php';
								$query="INSERT INTO users (`id`,`Name`,`email`,`t_screen_name`,`fbemail`)
									VALUES ('','$name','$email','$twitterid','$fbemail')";

								if (mysqli_query($conn, $query)) {		
									//header('Location: template.html');
								} else {
									echo "Error:  <br>" . mysqli_error($conn);
								}
							}
						}
					?>
                </div>
                   
     
              
              
                
               </div>
              </div>
          </div> 
       </div>	   
     <div class="container">
             
     </div>

     <!-- CONTACT SECTION END-->
    <div id="footer">
          <!--p>Design by : Apoorva and Kruti not Rishal</p-->
    </div>
     <!-- FOOTER SECTION END-->
   
    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts --> 
         <script src="assets/js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts --> 
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts --> 
         <script src="assets/js/custom.js"></script>
</body>
</html>
