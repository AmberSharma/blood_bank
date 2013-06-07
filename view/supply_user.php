
<html dir="ltr" lang="en-US">

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" type="text/css" media="all"
	href="../css/style.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript">

$(document).ready(function()
{
	$("#datepicker").datepicker();
});


  function home()
  {
     $("#tab1").show();
     $("#tab3").hide();
     $("#tab4").hide();
	$("#status").hide();
  }
  
  
  function available()
  {
	  $.ajax
	  ({
		  url: '../controller/supplyController.php?method=bloodAvailable',
		  success: function(data)
		  {
			  $("#tab1").html($.trim(data));
		  }
	  });
  }
 </script>

</head>



<body class="page page-id-70 page-template page-template-default">

	<div id="wrapper" class="hfeed">
		<div id="header">
			<div id="masthead">
				<div id="branding" role="banner">

					<div id="site-title"></div>

					<div id="site-description"></div>
				</div>
				<!-- #branding -->

				<div id="access" role="navigation">


					<div class="menu-header">
						<ul id="menu-main-menu" class="menu">
							<li id="menu-item-39"
								class="menu-item menu-item-type-custom menu-item-home menu-item-39"><a
								href="#" onclick="home()">Home</a></li>
							<li id="menu-item-38"
								class="menu-item menu-item-type-custom menu-item-38"><a
								href="javascript:void(0)" onclick="available()">Availability</a></li>
							<li id="menu-item-42"
								class="menu-item menu-item-type-post_type menu-item-42"><a
								href="#" onclick="create_event()">Create Event</a></li>
							<li id="menu-item-52"
								class="menu-item menu-item-type-custom menu-item-52"><a href="#">Upload
									Photos</a></li>
						</ul>
					</div>

				</div>

				<div id="main">
					<div id="container">
						<div id="content" role="main">



							<div id="post-70" class="post-70 page type-page hentry">
								<div id="tab1">
									<p>Welcome Admin,</p>
									<p>Here are some of the features provided for you.</p>

									<p>
										You can create user here by clicking on to the <a href="">
											Create User</a> link. You can also manage user and view edit
										and delete the users too.
									</p>

									<p>
										You can also upload your favourite images also by clicking on
										to the <a href="#">Upload Images</a> link.
									</p>

									<p>
										You can also create a event for your blood campaign by
										clicking on to the <a href=""> Create Event</a> link.
									</p>
								</div>

								<div id="tab3"></div>


							</div>


							<div id="comments">


								<p class="nocomments">Comments are closed.</p>



							</div>
							<!-- #comments -->


						</div>
						<!-- #content -->
					</div>


					<div id="secondary" class="widget-area" role="complementary">
						<ul class="xoxo">
							<li id="archives-2" class="widget-container widget_archive"><h3
									class="widget-title">Links Related to blood bank</h3></li>
							<table border="1">
								<tr>
									<td><a
										href="http://timesofindia.indiatimes.com/topic/blood-donation-camps">timesofindia.indiatimes.com</a></td>
								</tr>
								<tr>
									<td><a
										href="http://topics.nytimes.com/topics/reference/timestopics/subjects/b/blood_donation/index.html">topics.nytimes.com</a></td>
								</tr>
								<tr>
									<td><a href="http://www.news-medical.net/?tag=/Blood+Donation">news-medical.net</a></td>
								</tr>
							</table>
							<br />
							<br />
							<li id="text-4" class="widget-container widget_text"><h3
									class="widget-title">
									<a href="#">Work Assigned 
								
								</h3> </a>
								<div></div> <br /> <br />
							
							<li id="text-4" class="widget-container widget_text"><h3
									class="widget-title">
									<a href="#">Blood Avail 
								
								</h3> </a>
								<div></div>
								<div class="textwidget"></div> <!-- #secondary .widget-area -->
					
					</div>
					<!-- #main -->

					<div id="footer" role="contentinfo">
						<div id="colophon">



							<div id="footer-widget-area" role="complementary">

								<div id="first" class="widget-area">
									<ul class="xoxo">
										<li id="text-3" class="widget-container widget_text">
											<div class="textwidget">Copyright � 2013 OSSCube. All rights
												reserved.</div>
										</li>
									</ul>
								</div>
								<!-- #first .widget-area -->




							</div>
							<!-- #footer-widget-area -->

							<div id="site-info">
								<a href="#" title="Red Cross Youth NTU Chapter" rel="home">
									OSSCube Noida </a>
							</div>
							<!-- #site-info -->

							<div id="site-generator">
								<a href="#" title="Semantic Personal Publishing Platform"
									rel="generator">Proudly powered by OSSCube.</a>
							</div>
							<!-- #site-generator -->

						</div>
						<!-- #colophon -->
					</div>
					<!-- #footer -->

				</div>
				<!-- #wrapper -->


				<!-- Clicky -->
				<a title="Web Analytics" href="http://getclicky.com/100535881"><img
					alt="Web Analytics" src="images/badge.gif" border="0"></a>
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
				<noscript>
					<p>
						<img alt="Clicky" width="1" height="1"
							src="//in.getclicky.com/100535881ns.gif" />
					</p>
				</noscript>

</body>
</html>
