<html>
<head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-70420351-1', 'auto');
  ga('send', 'pageview');

</script>
<?php wp_head(); ?>
<!-- jQuery library (fra Google) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- Der bliver zoomet ind på mobile devices! -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- Reset CSS. Bruges til at nulstille browserens css -->
<link rel="stylesheet" href="http://www.jakobsenwebsolutions.dk/old/blog/wp-content/themes/jws/css/reset.css">
<link rel="stylesheet" href="http://www.jakobsenwebsolutions.dk/old/blog/wp-content/themes/jws/css/style.css">
<!-- animate stylesheet -->
<link rel="stylesheet" href="http://www.jakobsenwebsolutions.dk/old/blog/wp-content/themes/jws/css/animate.css">
<!-- Her linkes til Google font -->
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
<header>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-2') ) : ?>
        <?php endif; ?>
<!-- JavaScript startes, som får menu til at poppe ud ved klik -->
	<script type="text/javascript">
	jQuery(function($){
    	     $( '.menu-btn' ).click(function(){
    	     $('.responsive-menu').toggleClass('expand')
    	     })
        })
	</script>
	<!-- JavaScript sluttes, som får menu til at poppe ud ved klik -->

	<!-- Mobil og tablet nav startes -->
	<div class="mobile-nav">
		<div class="menu-btn" id="menu-btn">
			<span></span>
			<span></span>
			<span></span>
	     </div>
 	
	     <div class="responsive-menu">
	        <ul>
	            <li><a href="/">FORSIDE</a></li>
				<li><a href="kontakt">KONTAKT</a></li>
				<li><a href="/om">OM</a></li>		
	        </ul>
	     </div>
		

	<!-- Mobil og tablet nav sluttes -->
	</div>
</header>
