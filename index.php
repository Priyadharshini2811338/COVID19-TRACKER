<?php 
session_start();
include('config.php');
error_reporting(0);

?>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Covid Tracker</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
       <link rel="stylesheet" href="css/owl.carousel.min.css"> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- top -->
                    <!-- header -->
         <header class="header-area">
            <div class="left">
               <a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>
            </div>
            <div class="right">
               <a href="Javascript:void(0)"><i class="fa fa-user" aria-hidden="true"></i></a>
            </div>
            <div class="container">
               <div class="row d_flex">
                  <div class="col-sm-3 logo_sm">
                     <div class="logo">
                        <a href="index.html"></a>
                     </div>
                  </div>
                  <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-9">
                     <div class="navbar-area">
                        <nav class="site-navbar">
                           <ul>
                              <li><a class="active" href="index.html">Home</a></li>
                              <li><a href="about.html">About</a></li>
                              <li><a href="action.html">take action</a></li>
							  
                              <li><a href="index.html" class="logo_midle">covid19</a></li>
                              <li><a href="education.html">Edu-Support</a></li>
                              <li><a href="news.html">news</a></li>
                              
                              <li><a href="contact.html">Contact </a></li>
                           </ul>
                           <button class="nav-toggler">

                           <span></span>
                           </button>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </header>
      <!-- end header -->
            <div class="full_bg">
      <!-- header inner -->
         <div class="section">
            <!-- carousel code -->
            <div id="banner1" class="carousel slide slider_main">
               <ol class="carousel-indicators ">
                  <li data-target="#banner1" data-slide-to="0" class="indicator-li-1">01</li>
                  <li data-target="#banner1" data-slide-to="1" class="">02</li>
                  
               </ol>
               <div class="carousel-inner">
                  <!-- first slide -->
                  <div class="carousel-item active">
                     <div class="carousel-caption cuplle">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8">
                                 <div class="photog">
                                    <h1>Covid Tracker </h1>
								<marquee width="150%" direction="right" height="50px">
<b>**  Corona Control Contact Toll Free No.1077 For Madurai,0452-2546160,  9597176061 **</b> 
</marquee>
                                    <a class="read_more" href="https://www.covidvisualizer.com/" >World</a>
                                    <a class="read_more" href= "https://www.covid19india.org/" >India</a>
									 <a class="read_more" href="https://nhmtn.maps.arcgis.com/apps/opsdashboard/index.html#/095ad0a1c0254b058fa36b32d1ab1977" >Madurai</a>
									
									
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- second slide -->
                  <div class="carousel-item">
                     <div class="carousel-caption cuplle">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8">
                                <div class="photog">
                                    <h1>Care early<br>Coronavirus</h1> <marquee width="150%" direction="right" height="30px">
<b>**World Health Organisation(WHO) Information Service. Whatsapp number: +417798931892 Get Latest Information from WHO **</b> 
</marquee>
									<a class="read_more" href=" https://covid.apollo247.com/?source=promoters" >Corona Risk-Scan</a>
                                    <a class="read_more" href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/events-as-they-happen" >WHO</a>
									<a class="read_more" href="https://play.google.com/store/apps/details?id=nic.goi.aarogyasetu&hl=en_IN" >Download App</a>
			
                  
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- third slide -->
                  
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- controls -->
               <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
               <i class="fa fa-angle-left" aria-hidden="true"></i>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
               <i class="fa fa-angle-right" aria-hidden="true"></i>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
      </div>
      <!-- end banner -->
	  <div class="row d_flex">
               <div class=" col-md-4">
                  <div class="latest text_align_center">
                     <figure><img src="images/cases1.png" alt="#"/></figure>
                      <a class="read_more" href="https://twitter.com/Vijayabaskarofl?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">Get Tweets</a>
                     <div class="nostrud">
                        <h3></h3>
                        <p>  <b>Dr.C.VijayaBaskarr</b><br> Minister  for Health and Family Welfare, <b>Government of TamilNadu</b>.</p>
                     </div>
                  </div>
               </div>
               <div class=" col-md-4">
                  <div class="latest text_align_center">
                     <figure><img src="images/cases2.png" alt="#"/></figure>
                      <a class="read_more" href="https://www.timesnownews.com/live-tv">LockDown 4.0 </a>
                     <div class="nostrud">
                        <h3></h3>
                        <p><b>Watch Times Now LIVE</b><br> Latest News Videos from your favourite <br><b>Start Watching</b></p>
                     </div>
                  </div>
               </div>
               <div class=" col-md-4">
                  <div class="latest text_align_center">
                     <figure><img src="images/cases11.png" alt="#"/></figure>
                      <a class="read_more" href="https://www.pmcares.gov.in/en/">PM Cares</a>
                     <div class="nostrud">
                        <h3></h3>
                        <p><b>Shri Narendra Modi</b><br> Honorable Prime Minister Of India<br> <b>A Public charitable trust</b></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
		 <marquee width="150%" direction="right" height="50px">
<b>**World Health Organisation(WHO) Information Service. Whatsapp number: +417798931892 Get Latest Information from WHO **</b> 
</marquee>
      </div><br>
      <!-- about -->
      <div class="coronata">
         <div class="container_width">
            <div class="row d_flex grid">
                   <div class="col-md-7">
                  <div class="titlepage text_align_center">
                     <h2>COVID19 BREAKDOWN </h2>
                     <p> <figure><img src="images/cases13.png" alt="#"/></figure>
                      <a class="" href="https://www.bing.com/covid/local/india?form=WSHCOV&timeline=1"></a>
                     </div>
					 </div>
               <div class="col-md-5 oder1">
                  <div class="titlepage text_align_left">
                     <h2>TIMELINE FOR COVID19</h2>
                     <p> 
                     </p>
                     <a class="read_more" href="https://www.bing.com/covid/local/india?form=WSHCOV&timeline=1">About More</a>
                  </div>
               </div>
            </div>
         </div>
                     
      </div>
	   <div class="coronata">
         <div class="container">
            <div class="row d_flex grid">
               <div class="col-md-7">
                  <div class="coronata_img text_align_center">
                     <figure><img src="images/ngo.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-5 oder1">
                  <div class="titlepage text_align_left">
                     <h2>AKSHAYA PATRA'S COVID-19 FOOD RELIEF SERVICE</h2>
                     <p> 
                     </p>
                     <a class="read_more" href="https://www.investindia.gov.in/bip/resources/list-ngos-providing-relief-during-covid-19">About More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
    
   
        <!-- protect -->
      <div class="protect">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                     <h2></h2>
                     <p>
                     </p><br></p>
                  </div>
               </div>
            </div>
         </div>
           <div class="protect_bg">
         <div class="container">
             <div class="row">
               <div class="col-md-12">
                  <!--  Demos -->
                  <div class="owl-carousel owl-theme">
                     <div class="item">
                        <div class="protect_box text_align_center">
                          <div class="desktop">
                             <i><img src="images/pro1.png" alt="#"/></i>
                           <h3> Wear Mask</h3>
                           <span>  Wear masks when you go outside.maintain social distancing with 2 metere</span>
                          </div>
                           <a class="read_more" href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public/when-and-how-to-use-masks">Read More</a>
                        </div>
                     </div>
                     <div class="item">
                          <div class="protect_box text_align_center">
                          <div class="desktop">
                             <i><img src="images/pro2.png" alt="#"/></i>
                           <h3> Wash Your Hands</h3>
                           <span>  Wash your hands frequently with any sanitizer or using soaps</span>
                          </div>
                           <a class="read_more" href="https://familydoctor.org/handwashing-and-covid-19/">Read More</a>
                        </div>
                     </div>
                     <div class="item">
                         <div class="protect_box text_align_center">
                          <div class="desktop">
                             <i><img src="images/pro3.png" alt="#"/></i>
                           <h3> Stay at Home</h3>
                           <span> Stay at the home to avoid the spread of covid19</span>
                          </div>
                           <a class="read_more" href="https://www.hopkinsmedicine.org/health/conditions-and-diseases/coronavirus/coronavirus-practicing-wellness-while-you-stay-at-home">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
          </div>
      </div>
         </div>
      </div>
      
              
      <!-- end coronata -->
    <!-- cases -->
      <div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <
                  </div>
               </div>
            </div>
            
      <!-- end cases -->
         <!-- doctors -->
      <div class="doctors">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                    
                  </div>
               </div>
            </div>
            <div class="row d_flex">
               <div class=" col-md-6">
                  
         </div>
      </div>
      <!-- end cases -->
<!-- update -->
<div class="update">
   <div class="cevery_white">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Get Every Update.... </h2>
               </div>
            </div>
         </div>
      </div>
   </div>
   <?php
if(isset($_POST['emailsubscibe']))
{
$subscriberemail=$_POST['subscriberemail'];
$sql ="SELECT SubscriberEmail FROM tblsubscribers WHERE SubscriberEmail=:subscriberemail";
$query= $dbh -> prepare($sql);
$query-> bindParam(':subscriberemail', $subscriberemail, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query -> rowCount() > 0)
{
echo "<script>alert('Already Subscribed.');</script>";
}
else{
$sql="INSERT INTO  tblsubscribers(SubscriberEmail) VALUES(:subscriberemail)";
$query = $dbh->prepare($sql);
$query->bindParam(':subscriberemail',$subscriberemail,PDO::PARAM_STR);
$query->execute();


echo "<script>alert('Subscribed successfully.');</script>";


}
}
?>
  <center> <div class="col-md-3 col-sm-6" ></center>
   
 <div class="cevery_bg">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <form method="post">
			   <div class="form-group">
                 <center> <input type="email" name="subscriberemail" class="form-control newsletter-input" required placeholder="Enter Email Address" /></center>
              </div>
              <button type="submit" name="emailsubscibe" class="btn btn-block">Subscribe <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </form>
               </form>
			   

            </div>
         </div>
      </div>
   </div>
</div>
<!-- update -->

      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                        <div class="col-lg-2 col-md-6 col-sm-6">
                           <div class="hedingh3 text_align_left">
                              <h3>Resources</h3>
                              <ul class="menu_footer">
                                 <li><a href="index.html">Home</a><li>
                                 <li><a href="javascript:void(0)">What we do</a><li>
                                 <li> <a href="javascript:void(0)">Media</a><li>
                                 <li> <a href="javascript:void(0)">Travel Advice</a><li>
                                 <li><a href="javascript:void(0)">Protection</a><li>
                                 <li><a href="javascript:void(0)">Care</a><li>
                              </ul>
                             
           
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="hedingh3 text_align_left">
                             <h3>About</h3>
                              <p>This website is created to view the updates of covid 19 specifically for Madurai district</p>
                           </div>
                        </div>
                     
                
                       
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="hedingh3  text_align_left">
                              <h3>Contact  Us</h3>
                                <ul class="top_infomation">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                           Ms.Sowmiya,Ms.Priyadharshini,Ms.Karpagalakshmi<br>
							Thiagarajar College Of Engineering,Madurai.
                        </li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>
                           Call : +88380366110
                        </li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i>
                           <a href="Javascript:void(0)">Email : sowmi010201@gmail.com</a>
                        </li>
                     </ul>
                            
                           
                     </div>
                  </div>
                     <div class="col-lg-4 col-md-6 col-sm-6">
                           <div class="hedingh3 text_align_left">
                              <h3></h3>
                              <div class="map">
                               
                              </div>
                           </div>
                        </div>
                    
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-8 offset-md-2">
                        <p>© 2020 All Rights Reserved.  <a href="https://html.design/"> </a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>
