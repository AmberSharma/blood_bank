<?php 
if($_REQUEST['msg']){
	echo '<script type="text/javascript">alert("Wrong Password or user name"); </script>';

    unset($_REQUEST['msg']);
}

?>
<html dir="ltr" lang="en-US">

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" type="text/css" media="all" href="css/style.css">
</head>



<body class="page page-id-70 page-template page-template-default">
   
<div id="wrapper" class="hfeed">
	<div id="header">
		<div id="masthead">
			 <div id="branding" role="banner">
				
                                <div id="site-title">
					<span>
						<a href="#" title="Red Cross Youth NTU Chapter" rel="home">Red Cross Youth NTU Chapter</a>
					</span>
				</div>
				
                            <div id="site-description"></div>
                         </div><!-- #branding -->

		<div id="access" role="navigation">
	   
                    
           <div class="menu-header">
            <ul id="menu-main-menu" class="menu">
             <li id="menu-item-39" class="menu-item menu-item-type-custom menu-item-home menu-item-39"><a href="#">Home</a></li>
             <li id="menu-item-38" class="menu-item menu-item-type-custom menu-item-38"><a>About Us</a></li>
             <li id="menu-item-42" class="menu-item menu-item-type-post_type menu-item-42"><a href="">Events</a></li>
             <li id="menu-item-52" class="menu-item menu-item-type-custom menu-item-52"><a href="">Gallery</a></li>
             <li id="menu-item-75" class="menu-item menu-item-type-custom current-menu-ancestor current-menu-parent menu-item-75"><a>Contact Us</a></li>
            </ul>
           </div>			
                </div><!-- #access -->
			<img id="header-image" src="images/giveblood_logo.jpg" alt="" height="305" width="940"> <!-- header image -->
		</div><!-- #masthead -->
	</div><!-- #header -->

	<div id="main">
		<div id="container">
			<div id="content" role="main">
                             
			

				<div id="post-70" class="post-70 page type-page hentry">
<!--                                   ////////////////////////////////////////////////////////-->
				</div><!-- #post-## -->

				
			<div id="comments">


	<p class="nocomments">Comments are closed.</p>


								
</div><!-- #comments -->


			</div><!-- #content -->
                </div>

               
		<div id="secondary" class="widget-area" role="complementary">
			<ul class="xoxo">
			<li id="archives-2" class="widget-container widget_archive"><h3 class="widget-title">Login</h3></li>
                        
                        <form action="http://localhost/blood_bank/trunk/controller/adminController.php?method=login" method="POST">
                           <table>
                               <tr>
                                   <td>
                                    User:   
                                   </td>
                                   <td>
                                    <input type="text" name="user_name">   
                                   </td>
                               </tr>
                               <tr>
                                   <td>
                                    Password:   
                                   </td>
                                   <td>
                                    <input type="passwd" name="pwd">   
                                   </td>
                               </tr>
                               <tr>
                                   <td>
                                   </td>
                                   <td>
                                    <input type="submit" value="LogIn">   
                                   </td>
                               </tr>
                           </table> 
                        </form>
    <br/>
    <br/>
    
    <li id="text-4" class="widget-container widget_text"><h3 class="widget-title">Social</h3>			
    <div class="textwidget"><a href="#" style="display: block; margin-top: 5px;"><img src="images/facebook16.png" style="vertical-align: bottom;" height="16" width="16"> Find us on Facebook</a></div>
		</li>			</ul>
		</div><!-- #secondary .widget-area -->

	</div><!-- #main -->
      
	<div id="footer" role="contentinfo">
		<div id="colophon">



			<div id="footer-widget-area" role="complementary">

				<div id="first" class="widget-area">
					<ul class="xoxo">
						<li id="text-3" class="widget-container widget_text">			<div class="textwidget">Copyright � 2013 OSSCube. All rights reserved.</div>
		</li>					</ul>
				</div><!-- #first .widget-area -->




			</div><!-- #footer-widget-area -->

			<div id="site-info">
				<a href="#" title="Red Cross Youth NTU Chapter" rel="home">
					OSSCube Noida				</a>
			</div><!-- #site-info -->

			<div id="site-generator">
								<a href="#" title="Semantic Personal Publishing Platform" rel="generator">Proudly powered by OSSCube.</a>
			</div><!-- #site-generator -->

		</div><!-- #colophon -->
	</div><!-- #footer -->

</div><!-- #wrapper -->

  
<!-- Clicky -->
<a title="Web Analytics" href="http://getclicky.com/100535881"><img alt="Web Analytics" src="images/badge.gif" border="0"></a>
<script type="text/javascript">
var clicky_site_ids = clicky_site_ids || [];
clicky_site_ids.push(100535881);
(function() {
  var s = document.createElement('script');
  s.type = 'text/javascript';
  s.async = true;
  s.src = '//static.getclicky.com/js';
  ( document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0] ).appendChild( s );
})();
</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100535881ns.gif" /></p></noscript>



</body></html>