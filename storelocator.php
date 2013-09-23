<?php 
$pagetemplate = "contact";
$pagetitle = "Store Locator";
$pagemetadesc = "Store locations across Canada. Fairweather is a leading Canadian specialty retailer offering contemporary women's fashion apparel and accessories since 1867. Suits, dresses, skirts, blouses, pants and accessories at unbeatable savings.";
$pagemetakeywords = "womens wear, casual womens wear, suits, womens' athletic wear, womens' outerwear, womens clothing sale";
include("header.php"); ?>
			<div id="content">
				
					<div id="bannerwrap">
					<div id="bannerinnerwrap">
						
							<div id="banner" class="store sub">
							<div id="bannerstore">
								<div id="savingsbanner">
							 		<h2>Store Locator</h2>
							 		<div class="clear"></div>
							 	</div>
							 	
								<!--
<div id="tagline">
								<h4>Fairweather</h4>
							 		1185 Caledonia Rd.<br/>
									Toronto, ON M6A 2X1<br/>
									<a href="mailto:info@fairweather.ca">info@fairweather.ca</a>
							 	</div>
-->
							 	
							 	<div class="clear"></div>
								<div class="postdata">
									<h2 class="entry-heading" style="font-size:28px; color: #000">
									Select A Province
								 	</h2>
								 	<p id="storeprov"><a href="stores.php#Alberta">Alberta</a><br/>
	<a href="stores.php#BC">British Columbia</a><br/>
	<a href="stores.php#Manitoba">Manitoba</a><br/>
	<a href="stores.php#NB">New Brunswick</a><br/>
	<!-- <a href="stores.php#NFLD">Newfoundland/Labrador</a><br/> -->
	<a href="stores.php#NS">Nova Scotia</a><br/>
	<a href="stores.php#Ontario">Ontario</a><br/>
	<a href="stores.php#PEI">Prince Edward Island</a><br/>
	<!-- <a href="stores.php#Quebec">Quebec</a><br/> -->
	<a href="stores.php#Saskatchewan">Saskatchewan</a><br/>
</p>
							 	
								 	<script>
  /* attach a submit handler to the form */

  $('.postdata a').fancybox({
  		'width'				: 675,
		'height'			: '90%',
		'type'				: 'iframe'
  	
  });

</script>

							 	</div>
								</div>
							</div>
						
				</div>
				</div>
			</div>
			<div id="primary" style="display:none">
			 	<div id="arrivals">
			 		<div class="wrap"><a href="<?php echo $links["arrivals"];?>"><h2>Arrivals<br/><span>View</span> <span class="black">&gt;</span></h2></a></div>
			 	</div>
			 	<div id="fw-grey">
			 		<div class="wrap">
			 			<!-- <a href="<?php /// echo $links["fw-grey"];?>"></a> -->
			 		</div>
			 	</div>
			 	<div id="signandsave">
			 		<div class="wrap last">
			 			<a href="<?php echo $links["signandsave"];?>"><h2><span>Sign Up<br/>&amp; Save</span><br/>10% Off</h2></a>
			 		</div>
			 	</div>
			 	<div id="one">
			 		<div class="wrap">
			 		</div>
			 	</div>
			 	<div id="two">
			 		<div class="wrap">
			 		</div>
			 	</div>
			 	<div id="three">
			 		<div class="wrap last">
			 		</div>
			 	</div>
			 	<div id="four">
			 		<div class="wrap">
			 		</div>
			 	</div>
			 	<div id="five">
			 		<div class="wrap">
			 		</div>
			 	</div>
			 	<div id="six">
			 		<div class="wrap last">
			 		</div>
			 	</div>
			</div>	
<?php include("footer.php");?>