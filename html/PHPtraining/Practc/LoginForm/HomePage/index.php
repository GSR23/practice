
<?php
session_start();
include '../usr_db.php';
// print_r ($_SESSION['success']);
        
if (isset($_SESSION['success']) && $_SESSION['success'] == "You Are Now Logged In") {
    $now = time(); // Checking the time now when home page starts.
    if ($now > $_SESSION['expire']) {
        session_destroy();
        echo "<script>
        alert(\"Session Expried! LogIn Again\");
        window.location= \"../user.php\";
        </script>";
    } else {
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">  
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Language" content="en" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
    
		<title>Wizards Ubisoft</title>
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        
        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/blue.css" type="text/css" media="screen" />
        <!--[if IE 6]>
            <link rel="stylesheet" type="text/css" media="screen" href="css/ie-hacks.css" />
            <script type="text/javascript" src="js/DD_belatedPNG.js"></script>
            <script>
                /* EXAMPLE */
                DD_belatedPNG.fix('*');
            </script>
        <![endif]-->
        <!-- ENDS CSS -->
        
        <!-- prettyPhoto -->
        <link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" />
        <!-- ENDS prettyPhoto -->
        
        <!-- JS -->
        <script type="text/javascript" src="js/jquery_1.4.2.js"></script>
        <script type="text/javascript" src="js/jqueryui.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
        <script type="text/javascript" src="js/tooltip/jquery.tools.min.js"></script>
        <script type="text/javascript" src="js/jquery.tabs/jquery.tabs.pack.js"></script>
        <script type="text/javascript" src="js/filterable.pack.js"></script>
        <script type="text/javascript" src="js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="js/chirp.js"></script>
        <script type="text/javascript" src="js/custom.js"></script>
        <script type="text/javascript" src="js/jQuery.equalHeights.js"></script>
        <!-- ENDS JS -->
        
        <!-- superfish -->
        <link rel="stylesheet" type="text/css" media="screen" href="css/superfish-custom.css" /> 
        <script type="text/javascript" src="js/superfish-1.4.8/js/hoverIntent.js"></script> 
        <script type="text/javascript" src="js/superfish-1.4.8/js/superfish.js"></script> 
        <!-- ENDS superfish -->
        
        <!-- tabs -->
        <link rel="stylesheet" href="css/jquery.tabs.css" type="text/css" media="print, projection, screen" />
        <!-- Additional IE/Win specific style sheet (Conditional Comments) -->
        <!--[if lte IE 7]>
        <link rel="stylesheet" href="css/jquery.tabs-ie.css" type="text/css" media="projection, screen">
        <![endif]-->
        <!-- ENDS tabs -->
        
        <!-- Cufon -->
        <script src="js/cufon-yui.js" type="text/javascript"></script>
        <script src="js/bebas_400.font.js" type="text/javascript"></script>
        <!-- /Cufon -->
        
    </head>
    <body>
    
    <!-- WRAPPER -->
    <div id="wrapper">
    
    <!-- TOP -->
    <div id="top">
      <div class="box">
        <div id="latest-tweet"><img src="img/twitter.png" class="twitter-bird" alt="Twitter" /></div>
        <script>Chirp({user:"ansimuz",max:1})</script>
        </div>
        
    </div>
    <!-- ENDS TOP -->
    
    
    <!-- CONTENT -->
    <div id="content">
    
    <!-- top button -->
    <div class="open-top">
        <a href="#" class="open"><img src="img/top-tab.png" class="twitter-bird" alt="Twitter" /></a>
    </div>  
    <!-- ENDS top button -->
        
        <!-- MAIN -->
        <div id="main">
        
            <a href="#"><img src="img/logo.png" alt="Logo" id="logo" /></a>
        
            <br>
            <br>
            <br>
            <br>
            <br>
            <!-- navigation -->     
            <div id="centeredmenu">
               <ul class="sf-menu">
                  <li class="current_page_item"><a href="#">HOME</a></li>
                  <li><a href=#>FEATURES</a>
                     <ul>
                        <li><a href=#>LAYOUT</a></li>
                        <li><a href=#>STYLED</a></li>
                        <li><a href=#>MORE</a></li>
                     </ul>
                  </li>
                  <li><a href="#">GALLERY</a>
                    <ul>
                        <li><a href="#">TWO COLS</a></li>
                        <li><a href="#">THREE COLS</a></li>
                        <li><a href="#">FOUR COLS</a></li>
                     </ul>
                  </li>
                 <li><a href="#">BLOG</a>
                    <ul>
                        <li><a href=#>SIDEBAR</a></li>
                        <li><a href=#>FULL WIDTH</a></li>
                     </ul>
                  </li>
                  <li><a href="#">CONTACT</a></li>
                  <li><a href="#">COLOR SKINS</a>
                    <ul>
                        <li><a href="#">BLUE</a></li>
                        <li><a href="#">RED</a></li>
                        <li><a href=".#">BLACK</a></li>
                     </ul>
                  </li>
                   <li><a href="../logout.php">logout</a></li>
               </ul>
            </div>
            <div class="clear"></div>
            <!-- ENDS navigation -->                
                        
            <!-- slideshow -->
            <div id="slideshow">
                <a href="" id="slideshow-link" ><span></span></a>
                <ul id="slides">
                    <li><a href=""><img src="slides/01.jpg"  alt="Imagen" /></a></li>
                    <li><a href=""><img src="slides/02.jpg"  alt="Imagen" /></a></li>
                    <li><a href=""><img src="slides/03.jpg"  alt="Imagen" /></a></li>
                </ul>
            </div>
            <!-- ENDS slideshow -->
                            
            <!-- headline -->
            <div class="headline">
            UBISOFT IS AN ELEGANT AND MODERN GAMING GAINT
            </div>
            <!-- ENDS headline -->  
                
            <!-- blocks -->
            <ul class="blocks-holder">
                
                <li class="block-1">
                    <p class="block-title custom">For Honor</p>
                    <div class="thumb-holder">
                        <div class="img-holder">
                            <a href="https://www.ubisoft.com/en-us/game/for-honor/" ><img src="img/dummies/front-page-thumb.jpg" alt="Thumb" class="thumb" title="Thumbnail" /> </a>
                        </div>
                        <p class="thumb-text">After a natural catastrophe that pitted the most fearsome warriors in a fight for resources and territory, the bloodthirsty warlord Apollyon believes the people of the Knights, Vikings, and Samurai have grown weak and wants to create an age of all-out war through manipulation of each faction. To this end the perspectives of characters within each faction are shown as events are shaped, battles are waged, and agendas are created as Apollyon works to ensure continuous sparks of conflict between the Legion, the Warborn, and the Chosen.</p>
                    <p><a href="https://www.ubisoft.com/en-us/game/for-honor/" class="more">MORE &gt;</a></p>
                    </div>
                </li>
                <li class="block-2">
                    <p class="block-title custom">Assassin's Creed Origins</p>
                    <div class="thumb-holder">
                        <div class="img-holder">
                            <a href="https://assassinscreed.ubisoft.com/game/en-us/home/index.aspx" ><img src="img/dummies/front-page-thumb-2.jpg" alt="Thumb" class="thumb" title="Thumbnail" /> </a>
                        </div>
                        <p class="thumb-text">The game is set in Ancient Egypt during the Ptolemaic period and recounts the fictional history of real-world events. The player takes on the role of a Medjay named Bayek as he works to protect the people from threats. The story recounts the origins of the struggle between the Assassins, who fight for peace by promoting liberty, and a secret cabal—forerunners to the Templars—who desire peace through the imposition of order.</p>
                    <p><a href="https://assassinscreed.ubisoft.com/game/en-us/home/index.aspx" class="more">MORE &gt;</a></p>
                    </div>
                </li>
                <li class="block-3">
                    <p class="block-title custom">Tom Clacy's Ghost Recon</p>
                    <div class="thumb-holder">
                        <div class="img-holder">
                            <a href="https://ghost-recon.ubisoft.com/wildlands/en-us/home/index.aspx" ><img src="img/dummies/front-page-thumb-3.jpg" alt="Thumb" class="thumb" title="Thumbnail" /> </a>
                        </div>
                        <p class="thumb-text">The game takes place in Bolivia in July 2019. The country has become increasingly unstable as the Santa Blanca, a previously minor Mexican drug cartel, gains more power and influence within the country to the point where Bolivia has become a narco-state and the world's largest producer of cocaine. The rise in power of this drug cartel concerns the United States Government, as Santa Blanca's influence has begun to spread beyond Bolivia. The last straw comes when a bomb targets the U.S. embassy in La Paz and its intended target, DEA agent Ricardo "Ricky" Sandoval, is kidnapped, tortured and then killed by the Santa Blanca.</p>
                    <p><a href="https://ghost-recon.ubisoft.com/wildlands/en-us/home/index.aspx" class="more">MORE &gt;</a></p>
                    </div>
                </li>   
            </ul>
            <!-- ENDS blocks -->
                
                
        </div>
        <!-- ENDS MAIN -->
    
    
    
    </div>
    <!-- ENDS CONTENT -->
    </div>
    <!-- ENDS WRAPPER -->
    
    
    
    <!-- FOOTER -->
    <div id="footer">
        <div id="footer-wrapper">
            
            
        
            <!-- footer-cols -->
            <ul class="footer-cols">
                <li class="col">
                    <h6>LINKS</h6>
                    <ul>
                        <li><a href="http://www.luiszuno.com">Freebies</a></li>
                        <li><a href="http://themeforest.net/user/Ansimuz/portfolio?ref=Ansimuz">Premium Themes</a></li>
                    </ul>
                </li>
                <li class="col">
                    <h6>SEARCH THE SITE</h6>
                    <form  method="get" id="searchform" action="">
                        <div>
                            <input type="text" value="Search..." name="s" id="s" onfocus="defaultInput(this)" onblur="clearInput(this)" />
                            <input type="submit" id="searchsubmit" value=" " />
                        </div>
                    </form>
                </li>
                <li class="col">
                    <h6>FOLLOW US</h6>
                    <ul>
                        <li class="icon twitter"><a href="#">Follow me</a></li>
                        <li class="icon facebook"><a href="#">Be a fan on faceBook</a></li>
                        <!-- <li class="icon delicious"><a href="#">Bookmark us</a></li> -->
                        <!-- <li class="icon digg"><a href="#">Share this</a></li> -->
                        <!-- <li class="icon deviantart"><a href="#">Check my folio on deviant</a></li> -->
                        <!-- <li class="icon youtube"><a href="#">See our screens</a></li> -->
                    </ul>
                </li>               
            </ul>
            <!-- footer-cols -->
            
            
            

        </div>
        
        <div class="footer-bottom">
            <p class="legal">Wizards UBISOFT by <a href="#">WIZARD</a></p>
        </div>
            
    </div>
    <!-- ENDS FOOTER -->
    
    
    <!-- start cufon -->
    <script type="text/javascript"> Cufon.now(); </script>
    <!-- ENDS start cufon -->
    
    
    </body>
</html>
<?php
    }
} else {
    echo    "<script>
	alert(\"You Must Login Via LoginPage!\");
	window.location= \"../user.php\";
    </script>";
}
?>
