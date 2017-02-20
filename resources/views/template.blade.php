<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>@yield('title') | Blog cá nhân</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/search.css">


</head>
<body>
<!-- header -->
	<div class="banner">
  	    <div class="container">
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" class="img-responsive" alt="" /></a>
			</div>
		</div> 
			<div class="header-bottom">
				<div class="container">
					<div class="head-nav">
						<span class="menu"> </span>
							@yield('indexMenu')
							@yield('aboutMenu')
							@yield('tagMenu')
				</div>
				
					<div class="search-box" style="width:300px">
				        <form>
				            <input type="text" name="s" class="textbox" style="text-indent:10px; font-size:15px" value="search something" onfocus="this.value = '';" onblur="if
				                  	(this.value == '') {this.value = 'search something';}">
				            <input type="submit" value>
				        </form>
		            </div>
						<div class="clearfix"> </div>
				</div>
			</div>
	</div>
<!-- header -->
<!-- content -->
	<div class="container">
		<div class="content">

			@yield('aboutTemplate')
			@yield('indexTemplate')
			@yield('tagTemplate')

			  <img class="b-lazy"
				 src="images/01.png"
				 data-src="images/book.jpg"
				 data-src-small="images/01.png"
				 alt="Image description" />

				 
		</div>	
	</div>
<!-- content -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<p>Template by <a href="http://w3layouts.com" target="_blank"> w3layouts</a></p>
			<div class="social">
				<ul>
					<li><a href="#"><i class="fb"> </i></li></a>
					<li><a href="#"><i class="twt"> </i></li></a>
						<div class="clearfix"></div>
				</ul>
			</div>
		</div>
	</div>
<!-- footer -->

<!-- Scripting -->
<script src="js/jquery.min.js"></script>
<!-- script-for-nav -->
	<script>
		$( "span.menu" ).click(function() {
		  $( ".head-nav ul" ).slideToggle(300, function() {
			// Animation complete.
		  });
		});
	</script>
<!-- script-for-nav -->		
<script type="application/x-javascript"> 
	addEventListener("load", function() { 
		setTimeout(hideURLbar, 0); 
	}, false); 
	function hideURLbar(){ 
		window.scrollTo(0,1); 
	} 



</script>


</body>
</html>