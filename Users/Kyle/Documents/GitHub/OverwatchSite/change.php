<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<div id="background">
<div id="pageContainer">
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Grand Rapids, MI Web Design</title>
	<meta name="author" content="Alvaro Trigo Lopez" />
	<meta name="description" content="fullPage plugin by Alvaro Trigo. Create fullscreen pages fast and simple. One page scroll like iPhone website." />
	<meta name="keywords"  content="fullpage,jquery,alvaro,trigo,plugin,fullscren,screen,full,iphone5,apple" />
	<meta name="Resource-type" content="Document" />
<link rel="stylesheet" type="text/css" href="http://www.kyledraving.com//fancyapps-fancyBox-18d1712/source/jquery.fancybox.css?v=2.1.5" media="screen" />
<link rel="stylesheet" type="text/css" href="http://www.kyledraving.com/wp-content/themes/twentyfourteen-child-01/style.css" />
<link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 480px)" href="http://www.kyledraving.com/wp-content/themes/twentyfourteen-child-01/small-device.css" />
<link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 800px)" href="http://www.kyledraving.com/wp-content/themes/twentyfourteen-child-01/medium-device.css" />
	

	<style>

		/* Sections
		 * --------------------------------------- */
		#section0 img,
			margin: 0 0 0 0;
		#section1 img{
			margin: 20px 0 0 0;
		}
		#section2 img{
			margin: 20px 0 0 52px;
		}
		#section3 img{
		}
		.intro p{
		}
		.twitter-share-button{
			position: absolute;
			z-index: 99;
			right: 149px;
			top: 9px;
		}

	</style>
	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
	<script type="text/javascript" src="http://www.kyledraving.com//fancyapps-fancyBox-18d1712/source/jquery.fancybox.js?v=2.1.5"></script>
	<script src="http://www.kyledraving.com/typed.js-master/js/typed.js" type="text/javascript"></script>
	<script type="text/javascript" src="http://www.kyledraving.com/wp-content/plugins/fullPage.js-master/jquery.fullPage.js"></script>
	<script type="text/javascript" src="http://www.kyledraving.com/wp-content/plugins/fullPage.js-master/examples/examples.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				sectionsColor: ['', '', '', '', '', ''],
				anchors: ['firstPage', 'About', 'WhatIDo', 'WhatIveDone', 'Contact', 'lastPage'],
				menu: '#menu',
				scrollingSpeed: 1000
			});

		});
	</script>

</head>
<body>
<div id="headerWrap">
<div class="hamburger">
</div>
<div id="header">
<a href="http://www.kyledraving.com/#firstPage">
<div class ="Logo"></div>
</a>
<div id="frontNav">
<ul>
	<li data-menuanchor="About"><a href="#About">ABOUT</a></li>
	<li data-menuanchor="WhatIDo"><a href="#WhatIDo">WHAT I DO</a></li>
	<li data-menuanchor="WhatIveDone"><a href="#WhatIveDone">WHAT IVE DONE</a></li>
	<li data-menuanchor="Contact"><a href="#Contact">CONTACT</a></li>
	
</ul>
</div>
</div>
</div>
<div id="sectionWrap">
<div id="fullpage">
<div class="section " id="section0">
		<div id="frontText">
		<h1>I <font color="#5bc0af">D</font>ESIGN, <font color="#5bc0af">D</font>EVELOP and <font color="#5bc0af">D</font>ELIVER!</h1>
		<p>Hello, my name is Kyle Draving. I'm a Web Designer/Developer based in Grand Rapids, Michigan. If you need help with a website or web application 		 	project, I'd love to <a href="#">get in touch</a>.</p>
		</div>
	<div class="frontImageWrapper">
		<div class="frontImage">
<img src="http://www.kyledraving.com/wp-content/uploads/2015/01/laptopdudevector4.png" align="middle">
		</div>
	</div>
</div>
<div class="section" id="section1">
	<div class="intro">
	<h2>ABOUT</h2>
		<div id="aboutTextWrapper">
<p>When I was younger I always knew no matter what job I had, I wanted the work <br>I did to be on a computer. In 2013 I graduated with a bachelors of Information Systems at Calvin College. During my time there, 
I got to experience first-hand all potential fields and areas of work my discipline could put me in. This is when I 
found my passion for designing and developing websites. After college I worked as a freelance web-designer teaching myself 
WordPress and the many languages, libraries and website standards used in the industry. Today I work for a computer consulting company
creating and maintaining our clients web-sites.</p></div>
			<div id="stuffILike">Stuff I Like<br> Wordpress, Android, Google Crome, Riot Games, Blizzard,</div>	
	</div>
</div>
<div class="section" id="section2">
<h2>WHAT I DO</h2>
<div id="skillsWrapper">
<div class="wordpressTitle">
<h3>WordPress</h3>
 <div class="wordpress">
 </div>
</div>
<div class="adobeTitle">
<h3>Adobe</h3>
 <div class="adobe">
  <div class="adobePs">
  </div>
  <div class="adobeDw">
  </div>
  <div class="adobeFl">
  </div>
  <div class="adobeAi">
  </div>
 </div>
</div>
<div class="pluginsTitle">
<h3>Plugin Dev</h3>
 <div class="plugins">
 </div>
</div>
<div id="responsiveTitle">
<h3>Responsive Design</h3>
<div id="responsive">
</div>
</div>
<div id="seoTitle">
<h3>SEO</h3>
 <div id="seo">
</div>
</div>
</div>
<div id="whatIDoWrapper">
<div id="whatIDoHTMLWrapper">
<h3>HTML5</h3>
<div id="whatIDoHTML">
<script>
$(document).ready(function() {
$("#whatIDoHTML").hover(function(){
        $("#animationHTML").typed({
            strings: ["&ltdiv class=&quotsection&quot id=&quotwhatIDo&quot&gt<br>&lth3&gtHTML&lt/h3&gt<br>&ltdiv id=&quotwhatIDoHTML&quot&gt<br>&ltp&gtthis is some HTML&lt/p&gt<br>&lt/div&gt<br>&lt/div&gt"],
            typeSpeed: -50,
            backDelay: 5,
            loop: false,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
            callback: function(){ foo(); },
            resetCallback: function() { newTyped(); }
        });
});
        $(".reset").click(function(){
            $("#typed").typed('reset');
        });

    });

    function newTyped(){ /* A new typed object */ }

    function foo(){ console.log("Callback"); }

    </script>
    <div class="wrap">
        <div class="type-wrap">
            <span id="animationHTML" style="white-space:pre;"></span>
        </div>
        </div>
</div>
</div>
<div id="whatIDoCSSWrapper">
<h3>CSS3</h3>
<div id="whatIDoCSS">
<script>
$(document).ready(function() {
$("#whatIDoCSS").hover(function(){
        $("#animationCSS").typed({
           strings: ["#whatIDoCSS { <br>background-image: url(&quot;comp&quot;);<br>background-repeat: no-repeat;<br>position: absolute;<br>font-size: 13;<br> }"],
            typeSpeed: -50,
            backDelay: 5,
            loop: false,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
            callback: function(){ foo(); },
            resetCallback: function() { newTyped(); }
        });
});
        $(".reset").click(function(){
            $("#typed").typed('reset');
        });

    });

    function newTyped(){ /* A new typed object */ }

    function foo(){ console.log("Callback"); }

    </script>
    <div class="wrap">
        <div class="type-wrap">
            <span id="animationCSS" style="white-space:pre;"></span>
        </div>
        </div>
</div>
</div>
<div id="whatIDoPHPWrapper">
<h3>PHP</h3>
<div id="whatIDoPHP">
<script>
$(document).ready(function() {
$("#whatIDoPHP").hover(function(){
        $("#animationPHP").typed({
           strings: ["&lt?php get_header();<br>$languages= array('CSS', 'PHP');<br>$length = count($languages);<br>for ($i = 0; $i &lt; $length; $i++) {<br>echo $languages[$i];<br>?&gt"],
            typeSpeed: -50,
            backDelay: 5,
            loop: false,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
            callback: function(){ foo(); },
            resetCallback: function() { newTyped(); }
        });
});
        $(".reset").click(function(){
            $("#typed").typed('reset');
        });

    });

    function newTyped(){ /* A new typed object */ }

    function foo(){ console.log("Callback"); }

    </script>
    <div class="wrap">
        <div class="type-wrap">
            <span id="animationPHP" style="white-space:pre;"></span>
        </div>
        </div>
</div>
</div>
<div id="whatIDoJavaJqueryWrapper">
<div id="whatIDoJavaWrapper">
<h3>JavaScript</h3>
<div id="whatIDoJava">
<script>
$(document).ready(function() {
$("#whatIDoJava").hover(function(){
        $("#animationJava").typed({
           strings: ["TypeJava.prototype = {<br>constructor: TypeJava<br>init: function() {<br>self.timeout = setTimeout(function() {<br>self.typewrite(self.strings[self.array]);<br>}, self.startDelay);<br>}"],
            typeSpeed: -50,
            backDelay: 5,
            loop: false,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
            callback: function(){ foo(); },
            resetCallback: function() { newTyped(); }
        });
});
        $(".reset").click(function(){
            $("#typed").typed('reset');
        });

    });

    function newTyped(){ /* A new typed object */ }

    function foo(){ console.log("Callback"); }

    </script>
    <div class="wrap">
        <div class="type-wrap">
            <span id="animationJava" style="white-space:pre;"></span>
        </div>
        </div>
</div>
</div>
<div id="whatIDoJqueryWrapper">
<h3>Jquery</h3>
<div id="whatIDoJquery">
<script>
$(document).ready(function() {
$("#whatIDoJquery").hover(function(){
        $("#animationJquery").typed({
           strings:["&ltscript&gt<br>$(&quot;#whatIDoJava&quot;).hover(function(){<br> $(&quot;#animationJava&quot;).typed({<br>strings: [&quot;This is Jquery&quot;]<br>});<br>});<br>&lt/script&gt"],
            typeSpeed: -50,
            backDelay: 5,
            loop: false,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
            callback: function(){ foo(); },
            resetCallback: function() { newTyped(); }
        });
});
        $(".reset").click(function(){
            $("#typed").typed('reset');
        });

    });

    function newTyped(){ /* A new typed object */ }

    function foo(){ console.log("Callback"); }

    </script>
    <div class="wrap">
        <div class="type-wrap">
            <span id="animationJquery" style="white-space:pre;"></span>
        </div>
        </div>
	</div>
</div>
</div>
</div>
</div>
<div class="section" id="section3">
 <h2>WHAT I'VE DONE</h2>
<div id="whatIveDoneWrapper">
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>
		<script src="http://www.kyledraving.com/CaptionHoverEffects/js/modernizr.custom.js"></script>
			<ul class="grid cs-style-3">
				<li>
					<figure>
<a class="fancybox" rel="gallery1" href="http://www.kyledraving.com/wp-content/uploads/2015/02/slide3.png">
<a class="fancybox" rel="gallery1" href="http://www.kyledraving.com/wp-content/uploads/2015/02/slide2.png">
<a class="fancybox" rel="gallery1" href="http://www.kyledraving.com/wp-content/uploads/2015/02/slide1.png">
<img src="http://www.kyledraving.com/wp-content/uploads/2015/02/DFPweb1-e1423159800738.png" alt="" /></a>
						<figcaption>
							<h3>Dependable Fire Protection</h3>
							<span>Web Design/HTML & CSS WordPress/PHP</span>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
<a class="fancybox" rel="gallery2" href="http://www.kyledraving.com/wp-content/uploads/2015/02/dafSlide2.jpg">
<a class="fancybox" rel="gallery2" href="http://www.kyledraving.com/wp-content/uploads/2015/02/dafSlide1.jpg">
						<img src="http://www.kyledraving.com/wp-content/uploads/2015/02/DAFweb.png" alt=""></a>
						<figcaption>
							<h3>DAF Enterprises</h3>
							<span>Web/logo Design & Custom Branding</span>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
<a class="fancybox" rel="gallery3" href="http://www.kyledraving.com/wp-content/uploads/2015/02/SRVSlide2.jpg">
<a class="fancybox" rel="gallery3" href="http://www.kyledraving.com/wp-content/uploads/2015/02/SRVSlide1.jpg">
						<img src="http://www.kyledraving.com/wp-content/uploads/2015/02/stoney.png" alt=""></a>
						<figcaption>
							<h3>Stoney Ridge Vineyards</h3>
							<span>Web Design/HTML & CSS WordPress/PHP</span>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
<a class="fancybox" rel="gallery4" href="http://www.kyledraving.com/wp-content/uploads/2015/02/shot-20150213-464-tj0609.jpeg">
<a class="fancybox" rel="gallery4" href="http://www.kyledraving.com/wp-content/uploads/2015/02/shot-20150213-464-i7th6b.jpeg">
<a class="fancybox" rel="gallery4" href="http://www.kyledraving.com/wp-content/uploads/2015/02/shot-20150213-464-16wiex7.jpeg">
						<img src="http://www.kyledraving.com/wp-content/uploads/2015/02/EverWeb-e1423160084342.png" alt="img05"></a>
						<figcaption>
							<h3>Everspring America</h3>
							<span>Web Design WordPress/PHP E-Commerce</span>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
<a class="fancybox" rel="gallery5" href="http://www.kyledraving.com/wp-content/uploads/2015/02/Front.png">
<a class="fancybox" rel="gallery5" href="http://www.kyledraving.com/wp-content/uploads/2015/02/WMCCContact.png">
						<img src="http://www.kyledraving.com/wp-content/uploads/2015/02/WMCCWeb.png" alt="img03"></a>
						<figcaption>
							<h3>WMCC</h3>
							<span>Web Design/HTML & CSS WordPress/PHP</span>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
<a class="fancybox" rel="gallery6" href="http://www.kyledraving.com/wp-content/uploads/2015/02/weeklytimegallery.png">
<a class="fancybox" rel="gallery6" href="http://www.kyledraving.com/wp-content/uploads/2015/02/timesheetswebgallery.png">
						<img src="http://www.kyledraving.com/wp-content/uploads/2015/02/timesheetsweb-e1423160399598.png"></a>
						<figcaption>
							<h3>Time-Sheet Application</h3>
							<span>Plugin Development/PHP</span>
						</figcaption>
					</figure>
				</li>
			</ul>
		<script src="http://www.kyledraving.com/CaptionHoverEffects/js/toucheffects.js"></script>
	</body>
</div>
</div>
<div class="section" id="section4">
 <h2>CONTACT</h2>
	<div id="mailWrapper"
	<?php echo do_shortcode( '[contact-form-7 id="36" title="Contact form 1"]' ); ?>
	</div>
</div>	
</div>
</body>
</html>
<?php get_footer(); ?>
</div>
</div>

