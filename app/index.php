<?php 
error_reporting(E_ALL ^ E_NOTICE);
// Include Facebook Class
include_once "lib/class.soy.detectfan.php";
// Create an Instance of Class
$detect_fan = new CurrentFacebookFans();
//method to get User is fan?
$liked = $detect_fan->isfan();
//Method to get User information
$data = $detect_fan->info();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Christmas Advent calendar</title>
	<meta name="description" content="Christmas Advent calendar Facebook app built by Roc Studio" />
	<meta name="keywords" content="facebook, Christmas Advent calendar, rocstudio, roc, studio" />
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.1/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/custom.css" />
	<!-- Google Font -->				
	<script type="text/javascript">	
		// 1. Add Google Font name here
		WebFontConfig = { google: { families: [ 'Lato',  'Bangers'] } };
		(function() {
		var wf = document.createElement('script');
		wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
		'://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
		wf.type = 'text/javascript';
		wf.async = 'true';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(wf, s);
		})();	
	</script>
	<style type="text/css">
		/* 2. Add Google Font name here */
		.wf-active {font-family: 'Lato',serif; font-size: 14px;}		
	</style>
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<style type="text/css">
		header .boxed a:hover {color:#b37c2a}
		.boxer {margin-top:0} 	
	</style>
	<![endif]-->
	<!--[if gte IE 9]>
	<style type="text/css">.gradient {filter: none;}</style>
	<![endif]-->
</head>

<body class="wf-active">
	<div id='fb-root'></div>
		<div class="container">
			<!-- Welcome message -->			
			<a class="fancy launch" href="#teaser"></a>
			<div style="display:none">
				<div id="teaser">
				
					<div class="tcenter">
						<p class="lead themefont themecolor tcenter"><img src="img/merry-Christmas.png"></p>					
						<p>Merry Chritstmas, and thank you for visiting our Advent calendar, before you proceed, it would be great if you could click the <strong class="themecolor">Like!</strong> button on our page</p>
						<p>But you can skip this by clicking <a href="#" onclick="$.fancybox.close()" class="themecolor">here</a>.</p>
					</div>
					
				</div>
			</div>
    <section>
    	<article class="panel" id="first">
    		<div class="row-fluid">				
                <div id="container" class="calendar-container">
                <!-- Start Calendar -->
                        <div id="calendar">
                            <ul class="component-calendar">
                                <li class="color1">
                                    <a href="#day01">
                                        <span class="day"><strong>01</strong><span>&nbsp;</span></span>
                                        <span class="content">
                                            <small>01</small>
                                            <img src="img/126x91.gif" width="126" height="91" alt=""/>
                                            <strong>Day 1</strong>
                                        </span>
                                    </a>
                                </li>               
                                <li class="color2">
                                    <a href="#day02">
                                        <span class="day"><strong>02</strong><span>&nbsp;</span></span>
                                        <span class="content">
                                            <small>02</small>
                                            <img src="img/126x91.gif" width="126" height="91" alt=""/>
                                            <strong>Day 2</strong>
                                        </span>
                                    </a>
                                </li>             
                                <li class="color3">
                                    <a href="#day03">
                                        <span class="day"><strong>03</strong><span>&nbsp;</span></span>
                                        <span class="content">
                                            <small>03</small>
                                            <img src="img/126x91.gif" width="126" height="91" alt=""/>
                                            <strong>Day 3</strong>
                                        </span>
                                    </a>
                                </li>               
                                <li class="color4">
                                    <a href="#day04">
                                        <span class="day"><strong>04</strong><span>&nbsp;</span></span>
                                        <span class="content">
                                            <small>04</small>
                                            <img src="img/126x91.gif" width="126" height="91" alt=""/>
                                            <strong>Day 4</strong>
                                        </span>
                                    </a>
                                </li>               
                                <li class="color1">
                                    <a href="#day05">
                                        <span class="day"><strong>05</strong><span>&nbsp;</span></span>
                                        <span class="content">
                                            <small>05</small>
                                            <img src="img/126x91.gif" width="126" height="91" alt=""/>
                                            <strong>Day 5</strong>
                                        </span>
                                    </a>
                                </li>               
                                <li class="color2">
                                    <a href="#day06">
                                        <span class="day"><strong>06</strong><span>&nbsp;</span></span>
                                        <span class="content">
                                            <small>06</small>
                                            <img src="img/126x91.gif" width="126" height="91" alt=""/>
                                            <strong>Day 6</strong>
                                        </span>
                                    </a>
                                </li>               
                                <li class="color3">
                                    <a href="#day07">
                                        <span class="day"><strong>07</strong><span>&nbsp;</span></span>
                                        <span class="content">
                                            <small>07</small>
                                            <img src="img/126x91.gif" width="126" height="91" alt=""/>
                                            <strong>Day 7</strong>
                                        </span>
                                    </a>
                                </li>                
                                <li class="color4">
                                    <a href="#day08">
                                        <span class="day"><strong>08</strong><span>&nbsp;</span></span>
                                        <span class="content">
                                            <small>08</small>
                                            <img src="img/126x91.gif" width="126" height="91" alt=""/>
                                            <strong>Day 8</strong>
                                        </span>
                                    </a>
                                </li>              
                                <li class="color1">
                                    <a href="#day09">
                                        <span class="day"><strong>09</strong><span>&nbsp;</span></span>
                                        <span class="content">
                                            <small>09</small>
                                            <img src="img/126x91.gif" width="126" height="91" alt=""/>
                                            <strong>Day 9</strong>
                                        </span>
                                    </a>
                                </li>               
                                <li class="color2">
                                    <a href="#day10">
                                        <span class="day"><strong>10</strong><span>&nbsp;</span></span>
                                        <span class="content">
                                            <small>10</small>
                                            <img src="img/126x91.gif" width="126" height="91" alt=""/>
                                            <strong>Day 10</strong>
                                        </span>
                                    </a>
                                </li>                
                                <li class="color3">
                                    <a href="#day11">
                                        <span class="day"><strong>11</strong><span>&nbsp;</span></span>
                                        <span class="content">
                                            <small>11</small>
                                            <img src="img/126x91.gif" width="126" height="91" alt=""/>
                                            <strong>Day 11</strong>
                                        </span>
                                    </a>
                                </li>                
                                <li class="color4">
                                    <a href="#day12">
                                        <span class="day"><strong>12</strong><span>&nbsp;</span></span>
                                        <span class="content">
                                            <small>12</small>
                                            <img src="img/126x91.gif" width="126" height="91" alt=""/>
                                            <strong>Day 12</strong>
                                        </span>
                                    </a>
                                </li>                
                                <li class="color1">
                                    <a href="#day13">
                                        <span class="day"><strong>13</strong><span>&nbsp;</span></span>
                                        <span class="content">
                                            <small>13</small>
                                            <img src="img/126x91.gif" width="126" height="91" alt=""/>
                                            <strong>Day 13</strong>
                                        </span>
                                    </a>
                                </li>               
                                <li class="color2">
                                    <a href="#day14">
                                        <span class="day"><strong>14</strong><span>&nbsp;</span></span>
                                        <span class="content">
                                            <small>14</small>
                                            <img src="img/126x91.gif" width="126" height="91" alt=""/>
                                            <strong>Day 14</strong>
                                        </span>
                                    </a>
                                </li>               
                                <li class="color3">
                                    <a href="#day15">
                                        <span class="day"><strong>15</strong><span>&nbsp;</span></span>
                                        <span class="content">
                                            <small>15</small>
                                            <img src="img/126x91.gif" width="126" height="91" alt=""/>
                                            <strong>Day 15</strong>
                                        </span>
                                    </a>
                                </li>               
                                <li class="color4">
                                    <a href="#day16">
                                        <span class="day"><strong>16</strong><span>&nbsp;</span></span>
                                        <span class="content">
                                            <small>16</small>
                                            <img src="img/126x91.gif" width="126" height="91" alt=""/>
                                            <strong>Day 16</strong>
                                        </span>
                                    </a>
                                </li>               
                                <li class="color1">
                                    <a href="#day17">
                                        <span class="day"><strong>17</strong><span>&nbsp;</span></span>
                                        <span class="content">
                                            <small>17</small>
                                            <img src="img/126x91.gif" width="126" height="91" alt=""/>
                                            <strong>Day 17</strong>
                                        </span>
                                    </a>
                                </li>              
                                <li class="color2">
                                    <a href="#day18">
                                        <span class="day"><strong>18</strong><span>&nbsp;</span></span>
                                        <span class="content">
                                            <small>18</small>
                                            <img src="img/126x91.gif" width="126" height="91" alt=""/>
                                            <strong>Day 18</strong>
                                        </span>
                                    </a>
                                </li>            
                                <li class="color3">
                                    <a href="#day19">
                                        <span class="day"><strong>19</strong><span>&nbsp;</span></span>
                                        <span class="content">
                                            <small>19</small>
                                            <img src="img/126x91.gif" width="126" height="91" alt=""/>
                                            <strong>Day 19</strong>
                                        </span>
                                    </a>
                                </li>               
                                <li class="color4">
                                    <a href="#day20">
                                        <span class="day"><strong>20</strong><span>&nbsp;</span></span>
                                        <span class="content">
                                            <small>20</small>
                                            <img src="img/126x91.gif" width="126" height="91" alt=""/>
                                            <strong>Day 20</strong>
                                        </span>
                                    </a>
                                </li>               
                                 <li class="color1">
                                    <a href="#day21">
                                        <span class="day"><strong>21</strong><span>&nbsp;</span></span>
                                        <span class="content">
                                            <small>21</small>
                                            <img src="img/126x91.gif" width="126" height="91" alt=""/>
                                            <strong>Day 21</strong>
                                        </span>
                                    </a>
                                </li>           
                                 <li class="color2">
                                    <a href="#day22">
                                        <span class="day"><strong>22</strong><span>&nbsp;</span></span>
                                        <span class="content">
                                            <small>22</small>
                                            <img src="img/126x91.gif" width="126" height="91" alt=""/>
                                            <strong>Day 22</strong>
                                        </span>
                                    </a>
                                </li>              
                                <li class="color3">
                                    <a href="#day23">
                                        <span class="day"><strong>23</strong><span>&nbsp;</span></span>
                                        <span class="content">
                                            <small>23</small>
                                            <img src="img/126x91.gif" width="126" height="91" alt=""/>
                                            <strong>Day 23</strong>
                                        </span>
                                    </a>
                                </li>            
                               <li class="color4">
                                    <a href="#day24">
                                        <span class="day"><strong>24</strong><span>&nbsp;</span></span>
                                        <span class="content">
                                            <small>24</small>
                                            <img src="img/126x91.gif" width="126" height="91" alt=""/>
                                            <strong>Day 24</strong>
                                        </span>
                                    </a>
                                </li>
                                <li class="color1">
                                    <a href="#day25">
                                        <span class="day"><strong>25</strong><span>&nbsp;</span></span>
                                        <span class="content">
                                            <small>25</small>
                                            <img src="img/126x91.gif" width="126" height="91" alt=""/>
                                            <strong>Day 25</strong>
                                        </span>
                                    </a>
                                </li>
                              
                            </ul>
                        </div>
    <!-- End Calendar -->

    <!-- Day details modals -->
                        <article role="main">
                            <div id="daydetail">
                                <ul id="daydetail-list">
                                    <li>
                                        <section>
                                            <h1>Day 1</h1>
                                            <div id="day01" class="daydetail-content">     
                                                <h2>December 1st</h2>
                                                <h3>Merry Christmas from <a href="https://www.facebook.com/rocstudio" class="fb-page" target="_blank">Roc Studio</a></h3>
                                            <img src="img/440x300.gif"/>            
                                            </div>
                                        </section>
                                    </li>
                                    <li>
                                        <section>
                                            <h1>Day 2</h1>
                                            <div id="day02" class="daydetail-content">     
                                                <h2>December 2nd</h2>
                                               <h3>Merry Christmas from <a href="https://www.facebook.com/rocstudio" class="fb-page" target="_blank">Roc Studio</a></h3>
                                            <img src="img/440x300.gif"/>    
                                            </div>
                                        </section>
                                    </li>
                                    <li>
                                        <section>
                                            <h1>Day 3</h1>
                                            <div id="day03" class="daydetail-content">     
                                                <h2>December 3rd</h2>
                                               <h3>Merry Christmas from <a href="https://www.facebook.com/rocstudio" class="fb-page" target="_blank">Roc Studio</a></h3>
                                            <img src="img/440x300.gif"/>  
                                            </div>
                                        </section>
                                    </li>
                                    <li>
                                        <section>
                                            <h1>Day 4</h1>
                                            <div id="day04" class="daydetail-content">     
                                                <h2>December 4th</h2>
                                               <h3>Merry Christmas from <a href="https://www.facebook.com/rocstudio" class="fb-page" target="_blank">Roc Studio</a></h3>
                                            <img src="img/440x300.gif"/>
                                            </div>
                                        </section>
                                    </li>
                                    <li>
                                        <section>
                                            <h1>Day 5</h1>
                                            <div id="day05" class="daydetail-content">     
                                                <h2>December 5th</h2>
                                               <h3>Merry Christmas from <a href="https://www.facebook.com/rocstudio" class="fb-page" target="_blank">Roc Studio</a></h3>
                                            <img src="img/440x300.gif"/>
                                            </div>
                                        </section>
                                    </li>
                                    <li>
                                        <section>
                                            <h1>Day 6</h1>
                                            <div id="day06" class="daydetail-content">     
                                                <h2>December 6th</h2>
                                               <h3>Merry Christmas from <a href="https://www.facebook.com/rocstudio" class="fb-page" target="_blank">Roc Studio</a></h3>
                                            <img src="img/440x300.gif"/>
                                            </div>
                                        </section>
                                    </li>
                                    <li>
                                        <section>
                                            <h1>Day 7</h1>
                                            <div id="day07" class="daydetail-content">     
                                                <h2>December 7th</h2>
                                               <h3>Merry Christmas from <a href="https://www.facebook.com/rocstudio" class="fb-page" target="_blank">Roc Studio</a></h3>
                                            <img src="img/440x300.gif"/>
                                            </div>
                                        </section>
                                    </li>
                                    <li>
                                        <section>
                                            <h1>Day 8</h1>
                                            <div id="day08" class="daydetail-content">     
                                                <h2>December 8th</h2>
                                               <h3>Merry Christmas from <a href="https://www.facebook.com/rocstudio" class="fb-page" target="_blank">Roc Studio</a></h3>
                                            <img src="img/440x300.gif"/>
                                            </div>
                                        </section>
                                    </li>
                                    <li>
                                        <section>
                                            <h1>Day 9</h1>
                                            <div id="day09" class="daydetail-content">     
                                                <h2>December 9th</h2>
                                               <h3>Merry Christmas from <a href="https://www.facebook.com/rocstudio" class="fb-page" target="_blank">Roc Studio</a></h3>
                                            <img src="img/440x300.gif"/>
                                            </div>
                                        </section>
                                    </li>
                                    <li>
                                        <section>
                                            <h1>Day 10</h1>
                                            <div id="day10" class="daydetail-content">     
                                                <h2>December 10th</h2>
                                               <h3>Merry Christmas from <a href="https://www.facebook.com/rocstudio" class="fb-page" target="_blank">Roc Studio</a></h3>
                                            <img src="img/440x300.gif"/>
                                            </div>
                                        </section>
                                    </li>
                                    <li>
                                        <section>
                                            <h1>Day 11</h1>
                                            <div id="day11" class="daydetail-content">     
                                                <h2>December 11th</h2>
                                               <h3>Merry Christmas from <a href="https://www.facebook.com/rocstudio" class="fb-page" target="_blank">Roc Studio</a></h3>
                                            <img src="img/440x300.gif"/>
                                            </div>
                                        </section>
                                    </li>
                                    <li>
                                        <section>
                                            <h1>Day 12</h1>
                                            <div id="day12" class="daydetail-content">     
                                                <h2>December 12th</h2>
                                               <h3>Merry Christmas from <a href="https://www.facebook.com/rocstudio" class="fb-page" target="_blank">Roc Studio</a></h3>
                                            <img src="img/440x300.gif"/>
                                            </div>
                                        </section>
                                    </li>
                                    <li>
                                        <section>
                                            <h1>Day 13</h1>
                                            <div id="day13" class="daydetail-content">     
                                                <h2>December 13th</h2>
                                               <h3>Merry Christmas from <a href="https://www.facebook.com/rocstudio" class="fb-page" target="_blank">Roc Studio</a></h3>
                                            <img src="img/440x300.gif"/>
                                            </div>
                                        </section>
                                    </li>
                                    <li>
                                        <section>
                                            <h1>Day 14</h1>
                                            <div id="day14" class="daydetail-content">     
                                                <h2>December 14th</h2>
                                               <h3>Merry Christmas from <a href="https://www.facebook.com/rocstudio" class="fb-page" target="_blank">Roc Studio</a></h3>
                                            <img src="img/440x300.gif"/>
                                            </div>
                                        </section>
                                    </li>
                                    <li>
                                        <section>
                                            <h1>Day 15</h1>
                                            <div id="day15" class="daydetail-content">     
                                                <h2>December 15th</h2>
                                               <h3>Merry Christmas from <a href="https://www.facebook.com/rocstudio" class="fb-page" target="_blank">Roc Studio</a></h3>
                                            <img src="img/440x300.gif"/>
                                            </div>
                                        </section>
                                    </li>
                                    <li>
                                        <section>
                                            <h1>Day 16</h1>
                                            <div id="day16" class="daydetail-content">     
                                                <h2>December 16th</h2>
                                               <h3>Merry Christmas from <a href="https://www.facebook.com/rocstudio" class="fb-page" target="_blank">Roc Studio</a></h3>
                                            <img src="img/440x300.gif"/>
                                            </div>
                                        </section>
                                    </li>
                                    <li>
                                        <section>
                                            <h1>Day 17</h1>
                                            <div id="day17" class="daydetail-content">     
                                                <h2>December 17th</h2>
                                               <h3>Merry Christmas from <a href="https://www.facebook.com/rocstudio" class="fb-page" target="_blank">Roc Studio</a></h3>
                                            <img src="img/440x300.gif"/>
                                            </div>
                                        </section>
                                    </li>
                                    <li>
                                        <section>
                                            <h1>Day 18</h1>
                                            <div id="day18" class="daydetail-content">     
                                                <h2>December 18th</h2>
                                               <h3>Merry Christmas from <a href="https://www.facebook.com/rocstudio" class="fb-page" target="_blank">Roc Studio</a></h3>
                                            <img src="img/440x300.gif"/>
                                            </div>
                                        </section>
                                    </li>
                                    <li>
                                        <section>
                                            <h1>Day 19</h1>
                                            <div id="day19" class="daydetail-content">     
                                                <h2>December 19th</h2>
                                               <h3>Merry Christmas from <a href="https://www.facebook.com/rocstudio" class="fb-page" target="_blank">Roc Studio</a></h3>
                                            <img src="img/440x300.gif"/>
                                            </div>
                                        </section>
                                    </li>
                                    <li>
                                        <section>
                                            <h1>Day 20</h1>
                                            <div id="day20" class="daydetail-content">     
                                                <h2>December 20th</h2>
                                               <h3>Merry Christmas from <a href="https://www.facebook.com/rocstudio" class="fb-page" target="_blank">Roc Studio</a></h3>
                                            <img src="img/440x300.gif"/>
                                            </div>
                                        </section>
                                    </li>
                                    <li>
                                        <section>
                                            <h1>Day 21</h1>
                                            <div id="day21" class="daydetail-content">     
                                                <h2>December 21st</h2>
                                               <h3>Merry Christmas from <a href="https://www.facebook.com/rocstudio" class="fb-page" target="_blank">Roc Studio</a></h3>
                                            <img src="img/440x300.gif"/>
                                            </div>
                                        </section>
                                    </li>
                                    <li>
                                        <section>
                                            <h1>Day 22</h1>
                                            <div id="day22" class="daydetail-content">     
                                                <h2>December 22nd</h2>
                                               <h3>Merry Christmas from <a href="https://www.facebook.com/rocstudio" class="fb-page" target="_blank">Roc Studio</a></h3>
                                            <img src="img/440x300.gif"/>
                                            </div>
                                        </section>
                                    </li>
                                    <li>
                                        <section>
                                            <h1>Day 23</h1>
                                            <div id="day23" class="daydetail-content">     
                                                <h2>December 23rd</h2>
                                               <h3>Merry Christmas from <a href="https://www.facebook.com/rocstudio" class="fb-page" target="_blank">Roc Studio</a></h3>
                                            <img src="img/440x300.gif"/>
                                            </div>
                                        </section>
                                    </li>
                                    <li>
                                        <section>
                                            <h1>Day 24</h1>
                                            <div id="day24" class="daydetail-content">     
                                                <h2>December 24th</h2>
                                               <h3>Merry Christmas from <a href="https://www.facebook.com/rocstudio" class="fb-page" target="_blank">Roc Studio</a></h3>
                                            <img src="img/440x300.gif"/>
                                            </div>
                                        </section>
                                    </li>
                                    <li>
                                        <section>
                                            <h1>Day 25</h1>
                                            <div id="day25" class="daydetail-content">     
                                                <h2>December 25th</h2>
                                               <h3>Merry Christmas from <a href="https://www.facebook.com/rocstudio" class="fb-page" target="_blank">Roc Studio</a></h3>
                                            <img src="img/440x300.gif"/>
                                            </div>
                                        </section>
                                    </li>     
                                </ul>
                            </div>
                        </article>
                    </div>			
                </div>
        </article>
    </section>

    <footer class="tcenter">
    	<p>&copy; 2014 <a href="http://rocstud.io" target="_blank" class="roc"> Roc Studio</a></p>
    	<p><a href="http://twitter.com/roc_studio" target="_blank">Twitter</a><a href="http://fb.me/rocstudio" target="_blank">Facebook</a></p>
    </footer>
</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.2.1/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/face.js"></script>
	<script type="text/javascript" src="js/script.js?v=1.0"></script>
	<script type="text/javascript" src="js/jquery.cookie.js"></script>
	<script type="text/javascript" src="js/calendar.js"></script>

	<?php if ($liked == false){ ?>
     <script type="text/javascript">
     	$(function(){
     		var pathArray = location.pathname.substring(location.pathname.lastIndexOf('/')+1);
     		if (pathArray == ''){
	     		$('.fancy.launch').trigger('click');	
     		}   		
     	})
     </script>
     <?php } else  {?>
     <script type="text/javascript">
     	$(function(){
     		$('.beforelike').hide();
            $('header li.like a').css({padding : 0, height : 90});
			$('.afterlike').show();
     	})
     </script>
     <?php } ?>
	</body>
</html>
