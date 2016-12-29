<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>My Taste Club</title>


<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

<style type="text/css">
body{ font-family: 'Open Sans', sans-serif; font-size: 14px; color: #242733; height: 100%;  }	
.container{ max-width: 1000px; }
img{ max-width: 100%; }
header{ padding-top: 20px; position: relative; }
.logo_row a{ display: block; padding: 40px 0px;  }
.searh_holder input[type=text]{ font-size: 12px;  padding: 5px 10px; width: 200px; margin-left: 10px; }
.searh_holder{ padding-top:25px; }
nav{ background: #e2d7c4; position: relative; text-align: right; }
nav ul{ margin: 0px; padding: 0px; }
nav ul li{ display: inline-block; zoom:1; *display: inline; text-align: center; margin-right: -4px; }
nav ul li:last-child{ margin-right: 0px; }
nav ul li a{ font-size: 11px; text-align: center; display: block; padding: 15px 10px; color: #242733; font-weight: 800; }
nav ul li a:hover{ text-decoration: none; }
nav ul li a i{ color: #c5af89; }
nav ul li:first-child a{ font-size: 11px; color: #FFF; background: #c5af89; padding: 5px 10px; text-align: center; }
nav ul li:first-child i{ color: #FFF; }

a{ color: #c5af89; } a:hover{ color: #91794e; text-decoration: none; }

.basket_holder{ padding-top: 40px; }
.basket_holder a i{ font-size: 16px; margin-left: 10px; }
.heritage_menu { background: #f4a814; color: #FFF; }
.heritage_menu i, .video_360_menu i{ color:#FFF; }
.video_360_menu{ background: #f36f21; color: #FFF; }
.web_summary_holder{ background: #ebebec; border-bottom: 5px solid #242733; }
.web_summary_holder h1{ margin: 0px; font-size: 45px; margin-bottom: 5px; font-weight: 800; }
.web_summary_holder{ padding: 20px; }
.web_summary_holder p{ font-size: 20px; margin: 0px; font-weight: 300; }
.main_sliding_hero{ height: 30%; background: #000; position: relative; }
.main_slider{ position: relative; height: 100%; }
.container-fluid, .container{ position: relative; height: 100%; }
.slide_details{ background: #FFF; padding: 20px; position: relative;  }
.slide_details h2{ margin: 0px; font-weight: 800; font-size: 20px; }
.slide_details p{ margin: 0px; }
.slide_details span{ text-transform: uppercase; font-weight: 800; color: #FFF; position: absolute; left: 0; top: 0px; padding: 10px 20px; background: #c5af89; z-index: 99; margin-top: -40px; margin-left: 20px; }
.slide_details span:after{ background: url(images/arrow.png); content: " "; position: absolute; margin-left: auto; margin-right: auto; left: 0; right: 0; bottom:0;  width: 19px; height: 9px; margin-bottom: -8px;  }
.slide_readmore{ background: #cc1736; color: #FFF; display:block; padding: 5px 20px; }
.slide_readmore:hover{ color: #FFF; }
.slide_thumbnail{ padding: 0px 5px; padding-right: 0px; }
.slide_thumbnail ul{ margin: 0px; padding: 0px; }
.slide_thumbnail ul li{ list-style: none; }
.slide_thumbnail  ul li a{ display: block; height: 128px; }
.main_sliding_hero .col-md-9{  padding-right: 0px; }
.main_sliding_hero .col-md-3{ padding-left: 0px; }

.slide_thumbnail ul li a{ opacity: 0.5;
    filter: alpha(opacity=50); }
.slide_thumbnail ul li.slide_active a{ opacity: 1;
    filter: alpha(opacity=100); }

</style>
</head>

<body>


<div class="container-fluid">
	<div class="container">
		
		<header>
			<div class="top_marketing">
				<div class="market_slider">
					<div>
						<img src="images/sample-banner/1.jpg">
					</div>
					<div>
						<img src="images/sample-banner/1.jpg">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 logo_row">
					<a href=""><img src="images/logo.png" title="My Taste Club" alt="My Taste Club"></a>
				</div>
				<div class="col-md-6">
					<div class="searh_holder" align="right">
					<strong>Hungry?</strong> <input type="text" name="s" placeholder="Search my taste club dubai">
					</div>
					<div class="basket_holder" align="right">
						<a href="">
							My Basket
							<i class="fa fa-shopping-basket" aria-hidden="true"></i>
						</a>
					</div>
				</div>
			</div>

			<nav>
				<ul>
					<li><a href="">NEW TASTES <i class="fa fa-angle-double-down" aria-hidden="true"></i></a></li>
					<li><a href="">TASTE: TOP FIVE <i class="fa fa-angle-double-down" aria-hidden="true"></i></a></li>
					<li><a href="">MADE UP <i class="fa fa-angle-double-down" aria-hidden="true"></i></a></li>
					<li><a href="">AFTER DARK <i class="fa fa-angle-double-down" aria-hidden="true"></i></a></li>
					<li><a href="">TASTE: SLOW COOKED <i class="fa fa-angle-double-down" aria-hidden="true"></i></a></li>
					<li><a href="" >HERITAGE <i class="fa fa-angle-double-down" aria-hidden="true"></i></a></li>
					<li><a href="">VIDEO 360 <i class="fa fa-angle-double-down" aria-hidden="true"></i></a></li>
					<li><a href="" class="heritage_menu">CLUB DISCOUNTS <i class="fa fa-angle-double-down" aria-hidden="true"></i></a></li>
					<li><a href="" class="video_360_menu">CLUB SHOPPER <i class="fa fa-angle-double-down" aria-hidden="true"></i></a></li>						    
				</ul>
			</nav>

		</header>

		<div class="web_summary_holder" align="center">
			<h1>The ultimate Dubai dining guide				
			</h1>
			<p>Discover the best DXB places to eat, meet the chefs and find the hidden gems</p>
		</div>

		<!-- slider -->
		<div class="main_sliding_hero"> 
			<div class="row">
				<div class="col-md-9">
					<div class="main_slider">
						<?php for($cnt = 1; $cnt <=4; $cnt++): ?>
						<div> 
							<img src="images/sample-banner/hero1.jpg" title="" align="">
							<div class="slide_details">
								<span>Blog <?php echo $cnt; ?></span>
								<h2>Top five dishes in Dubai you just have to try <?php echo $cnt; ?></h2>
								<p>You haven't dined until you have dined out on these top gourmet delights</p>
							</div>
							<a href="" class="slide_readmore">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
						<?php endfor; ?>
						
					</div>
				</div>
				<div class="col-md-3">
					<div class="slide_thumbnail">
						<ul>
							<?php for($cnt = 1; $cnt <=4; $cnt++): ?>
							<li class="thumbnail_<?php echo $cnt; ?> <?php echo ($cnt == 1)? 'slide_active' : NULL; ?>">
								<a class="trigger_thumbnail" id="trigger_thumb_<?php echo $cnt; ?>" href="javascript:void(0);" style="background: url(images/<?php echo $cnt; ?>.jpg) center center no-repeat;"></a>
							</li>
							<?php endfor; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- end of slider -->

		<div id="check_count"></div>

	</div>
</div>





<link href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="js/owl.carousel.2.0.0/assets/owl.carousel.css">
<script src="js/owl.carousel.2.0.0/owl.carousel.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	
	$('.market_slider').owlCarousel({
	    autoplay:true,
	    margin:0,
	    nav:false,
	    smartSpeed:1000,
	    loop:true,
	    dots:false,
	    autoplayHoverPause:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
	});

	var mainhero = $('.main_slider').owlCarousel({
	    autoplay:true,
	    margin:0,
	    nav:false,
	    smartSpeed:1000,
	    loop:true,
	    dots:false,
	    autoplayHoverPause:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
	});


	var current = 1;
	var isclick = 0;
	mainhero.on('changed.owl.carousel',function(e){
		if(current < e.item.count){
			current+=1;
		}else{
			current = 1;
		}		
		if(isclick == 0){
			$('.slide_thumbnail').find('li').removeClass('slide_active');
			$('.thumbnail_'+current).addClass('slide_active');
		}
		isclick = 0;
	});
	$('.trigger_thumbnail').click(function(){
		isclick++;
		$('.slide_thumbnail').find('li').removeClass('slide_active');
		var getid = $(this).attr('id');
		var theidex = getid.split("_");
		theindex = parseInt(theidex[2]);
		$('.thumbnail_'+theindex).addClass('slide_active');
		theindex-=1;
		current = theindex;
		mainhero.autoplay = false;
		mainhero.trigger("to.owl.carousel", [theindex, 500, true]);
	});


});	
</script>

</body>
</html>