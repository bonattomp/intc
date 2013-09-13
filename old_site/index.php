<?php 
$pagetemplate="home";
$carousel =true;
$pagemetadesc = "International Clothiers is Canada's premiere destination for men's, young men's and boys fashions. Offering quality designer menswear since 1986, our fashions are exclusively designed to offer style, quality and value for your money. From business to casual from formal wear to weekend wear, International Clothiers can dress you right for any occasion at unbeatable prices. Store locations across Canada.";
$pagemetakeywords = "menswear, suits, mens clothing, boys clothing, young mens suits, Canadian menswear stores, mens sportswear sale, suit sale, clothing sale";

/* Start - Banner Carousel Images */
$bannerimg = array("int-summer2013-promo.jpg");
/* End - Banner Carousel Images */

$offset = array("next"=>0,"prev"=>sizeof($bannerimg)-1,"nos"=>sizeof($bannerimg),"offset"=>0);
include('header.php');?>
<style>
#homebanner-bottom{
	top:	583px;
}
#homebanner-contentbottom{
	bottom: -380px;
}
#homebanner{
	height: 744px;
}

<?php $BaS = $_SERVER["HTTP_USER_AGENT"];?>
<?php if (strstr($BaS, "MSIE 7")):?>
	#homebanner{
	height: 751px;
}
<?php endif;?>
</style>
				<div class="home">
								<!--
		<div class="arrow" id="left"></div>
						<div class="arrow" id="right"></div>
-->
<div id="bannerwrap" style="height: 409px;">
						
					<div id="bannerinnerwrap" style="height: 409px;">
					<!-- <a href="<?php echo $links["coupons"];?>" id="homepagelink" style="height: 409px;"> -->	<div class="" id="banner" style="background:url(2013images/<?php echo $bannerimg[0];?>) top; height:409px; width: 723px; float: left;"></div>
					<a href="<?php echo $links["signupandsave"];?>" target="_blank"><div style="float:right; height: 409px; width: 260px; border-left: 1px solid #fff; background:url(/2013images/int-summer2013-sb.jpg) top #000 no-repeat;"></div></a>
							<div class="clear"></div><!-- </a> -->
						
							
				</div>
				</div>
						<!--
<div id="homebanner" style="background:url(<?php //echo $bannerimg[0]; ?>) no-repeat; height: 539px">
								<a href="<?php //echo $links["promotions"];?>" id="homepagelink"></a>
								<!--
<div id="homebanner-bottom">
								</div></div>
-->
														
						

					<div id="homebanner-contentbottom-jpg" style="background:url(/2012images/sept14-homebottom.jpg) center; background-position:-1px 0;">
									<a href="<?php echo $links["promotions"];?>">
									<div class="block" style="width:267px;">
										<!--
<h2>Sign Up<br/>&amp; Save</h2>
										<h4>Receive a special 10% off coupon</h4>
-->
									</div>
									</a>
									<a href="<?php echo $links["coupons"];?>">
									<div class="block center" style="background: none; width: 271px; margin:0; border:0">
								
									</div>
									</a>
									<a href="<?php echo $links["collections"];?>">
									<div class="block right"  style="width:266px;">
										<!--
<h2>Featured<br/>Collections</h2>
										<h4>View Now</h4>
-->
									</div>
									</a>
								</div>
				</div>
<?php include('footer.php');?>