<?php 
$pagetemplate = "contact";
$bannerimg = array("images/banner-collection.jpg","images/banner-collection2.jpg", "images/banner-collection3.jpg");
$bannertaglines = array("Collection 1","Collection 2","Collection 3");
?>
<?php $BaS = $_SERVER['HTTP_USER_AGENT'];?>
<html>
<head>
<meta http-equiv="x-ua-compatible" content="IE=8">
<title>Fairweather</title>
<link rel="stylesheet" href="style.css">
<?php if (strstr($BaS, "MSIE 6") || strstr($BaS, "MSIE 7")){?>
<link rel="stylesheet" href="style-ie7.css">
<?php } ?>
	<style type="text/css">
		


	
	</style>
	<?php
		$links  = array("home" => "index.php", "collections" => "collection.php", "keylooks"=>"keylooks.php", "miscellaneous"=>"Miscellaneous", "storelocator"=>"storelocator.php", "aboutus"=> "aboutus.php", "careers"=>"careers.php", "privacy"=>"privacy.php","french"=>"french","facebook"=>"#","twitter"=>"#","arrivals"=>"arrivals.php","fw-grey"=>"fw-grey.php","signandsave"=>"signupandsave.php","contact"=>"contact.php");
	?>
	<script src="js/jquery.js"></script>
	<?php if (isset($pagetemplate)) if ($pagetemplate != "home" && $pagetemplate != "contact"):?>
	<?php include("js.php"); ?>
<?php endif;?>
</head>
<body style="background:#fff; color: #000; text-align: left" class="stores">
<?php if (isset($pagetemplate)) if ($pagetemplate != "home" && $pagetemplate != "contact"):?>
<a href="javascript:;"><div id="left" class="arrow"></div></a>
<a href="javascript:;"><div id="right" class="arrow"></div></a>
<?php endif;?>


		<div id="wrapper" style="width:450px;">
			<div id="content">
				
				<?php function storeoutput($args=""){
		$array = $args;
		/* $addmap = str_replace(" #", "#", trim($array[4])); */
		if (strstr($array[4], ",")):
			$addmap = explode(",",$array[4]);
			$addmap = trim($addmap[0]);
		else:
			$addmap = trim($array[4]);
		endif;
		$str=	"<strong>". trim($array[3])." - ".trim($array[1])." ".trim($array[2])."</strong><br /><a href='http://maps.google.ca/maps?client=safari&rls=en&oe=UTF-8&redir_esc=&q=".$addmap."%22,%22+".trim($array[5])."%22,%22".trim($array[6])."%22' target='_blank'>".trim($array[4])."</a><br />".trim($array[5]).", ".trim($array[6])." ".trim($array[7])."<br />".trim($array[8])."<br/><br/>";
		echo $str;


		
		}
		
		 function storeoutput_city($args=""){
		$array = $args;
		if (strstr($array[4], ",")):
			$addmap = explode(",",$array[4]);
			$addmap = trim($addmap[0]);
		else:
			$addmap = trim($array[4]);
		endif;
		$str=	"<h2>".trim($array[5])."</h2><br/><strong>". trim($array[3])." - ".trim($array[1])." ".trim($array[2])."</strong><br /><a href='http://maps.google.ca/maps?client=safari&rls=en&oe=UTF-8&redir_esc=&q=".$addmap."%22,%22+".trim($array[5])."%22,%22".$array[6]."%22' target='_blank'>".trim($array[4])."</a><br />".trim($array[5]).", ".trim($array[6])." ".trim($array[7])."<br />".trim($array[8])."<br/><br/>";
		echo $str;


		
		}
		?>			
							
							 	
								<!--
<div id="tagline">
								<h4>Fairweather</h4>
							 		1185 Caledonia Rd.<br/>
									Toronto, ON M6A 2X1<br/>
									<a href="mailto:info@fairweather.ca">info@fairweather.ca</a>
							 	</div>
-->
							 	
							 	<div class="clear"></div>
							
								 				<div id="results"><a name="Alberta"></a>
<h1>Alberta</h1>

<!--
<strong>Deerfoot Mall - Fairweather Women's</strong><br />
<a href="http://maps.google.ca/maps?f=q&source=s_q&hl=en&geocode=&q=901-64th+Avenue+North+East+C16.,+calgary+ab+T2E+7P4&sll=51.054438,-113.976956&sspn=0.009401,0.027702&ie=UTF8&hq=&hnear=901+64+Ave+NE,+Calgary,+Division+No.+6,+Alberta&z=16" target="_blank">901-64th Avenue North East C16</a><br />
Calgary, AB T2E 7P4<br />
403-295-9163<br />

<br />
-->



<h2>Calgary</h2>
<br/>
<strong>Chinook - Fairweather Women's</strong><br />
<a href="https://maps.google.com/maps?q=6455+Macleod+Trail+SW,+Calgary,+AB,+Canada&hl=en&ll=50.998025,-114.072558&spn=0.005625,0.009645&sll=51.046453,-114.069843&sspn=0.011237,0.01929&oq=6455+MacLeod+Trail+South&hnear=6455+Macleod+Trail+SW,+Calgary,+Alberta+T2H+2W1,+Canada&t=m&z=17" target="_blank">6455 MacLeod Trail South</a><br />
Calgary, AB T2H 0K3<br />
403-319-0045<br />

<br /><br />

<strong>Market Mall - Fairweather Women's</strong><br />
<a href="https://maps.google.com/maps?q=3625+Shaganappi+Trail+NW,+Calgary,+AB,+Canada&hl=en&sll=50.998025,-114.072558&sspn=0.005625,0.009645&oq=3625+Shaganappi+Trail+N.W.&hnear=3625+Shaganappi+Trail+NW,+Calgary,+Alberta+T3A+0E2,+Canada&t=m&z=16" target="_blank">3625 Shaganappi Trail N.W.</a><br />
Calgary, AB T3A 0E2<br />
403-286-1441<br />

<br /><br />

<strong>Marlborough Mall - Fairweather Women's</strong><br />
<a href="https://maps.google.com/maps?q=Calgary,+AB+T2A+2K2,+Canada&hl=en&ll=51.053764,-113.979549&spn=0.011236,0.01929&sll=51.052548,-113.979327&sspn=0.011236,0.01929&oq=T2A+2K2&hnear=Calgary,+Alberta+T2A+2K2,+Canada&t=m&z=16" target="_blank">3800 Memorial Drive NE, Unit 78C</a><br />
Calgary, AB T2A 2K2<br />
403-204-8270<br />

<br /><br />

<strong>Southcentre Mall - Fairweather Women's</strong><br />
<a href="https://maps.google.com/maps?q=100+Anderson+Road+Southwest,+Calgary,+AB,+Canada&hl=en&sll=51.053764,-113.979549&sspn=0.011236,0.01929&oq=100+Anderson+Road+SW&hnear=100+Anderson+Rd+SW,+Calgary,+Division+No.+6,+Alberta+T2J,+Canada&t=m&z=16" target="_blank">100 Anderson Road S.W.</a><br />
Calgary, AB T2J 3V1<br />
403-271-8960<br />

<br /><br />

<strong>Sunridge Mall - Fairweather Women's</strong><br />
<a href="https://maps.google.com/maps?q=2525+36th+Street+Northeast,+Calgary,+AB,+Canada&hl=en&sll=51.084253,-114.13896&sspn=0.011228,0.01929&oq=2525+-+36th+Street+NE&hnear=2525+36+St+NE,+Calgary,+Division+No.+6,+Alberta,+Canada&t=m&z=16" target="_blank">2525 - 36th Street N.E.</a><br />
Calgary, AB T1Y 5T41<br />
403-264-6056<br />

<br /><br />

<strong>TD Square - Fairweather Women's</strong><br />
<a href="http://maps.google.ca/maps?f=q&source=s_q&hl=en&geocode=&q=280-317+7th+Avenue+S.W,+calgary+ab+T2P+2Y9&sll=50.996067,-114.073148&sspn=0.009413,0.027702&ie=UTF8&hq=&hnear=317+7+Ave+SW,+Calgary,+Division+No.+6,+Alberta&z=16" target="_blank">317 7th Avenue S.W</a><br />
Calgary, AB T2P 2Y9<br />
587-887-1938<br />


<br /><br />

<h2>Edmonton</h2>
<br />

<strong>Edmonton City Centre - Fairweather Women's</strong><br />
<a href="http://maps.google.ca/maps?f=q&source=s_q&hl=en&geocode=&q=102+Edmonton+Center+Edmonton,+AB+T5J+2Y7&sll=49.898214,-97.061377&sspn=0.0098,0.027874&g=1555+Regent+Avenue+West+64A,+Winnipeg,+Manitoba+R2C+4J2&ie=UTF8&hq=102+Edmonton+Center&hnear=Alberta+T5J+2Y7&z=14" target="_blank">10205 - 101st Street</a><br />
Edmonton, AB T5J 2Y7<br />
780-426-4640<br />

<br /><br />

<strong>Londonderry Mall - Fairweather Women's</strong><br />
<a href="http://maps.google.ca/maps?f=q&source=s_q&hl=en&geocode=&q=26+Londonderry+Edmonton,+AB+T5C+3C8&sll=53.601928,-113.461347&sspn=0.008709,0.027874&ie=UTF8&hq=26+Londonderry&hnear=Alberta+T5C+3C8&ll=53.601775,-113.461347&spn=0.008709,0.027874&z=16&iwloc=A" target="_blank">137th Avenue & 66th Street</a><br />
Edmonton, AB T5C 3C8<br />
780-473-6664<br />

<br /><br />


<strong>South Ed. Commons - Fairweather Women's</strong><br />
<a href="http://maps.google.ca/maps?f=q&source=s_q&hl=en&geocode=&q=9707-19th+Ave.+N.W.+Edmonton,+AB+T6N+1N5&sll=53.55452,-113.52252&sspn=0.036151,0.111494&ie=UTF8&hq=&hnear=9707+19+Ave+NW,+Edmonton,+Division+No.+11,+Alberta&z=16" target="_blank">9707-19th Ave. N.W.</a><br />
Edmonton, AB T6N 1N5<br />
780-409-9140<br />

<br /><br />

<strong>West Edmonton Phase I - Fairweather Women's</strong><br />
<a href="http://maps.google.ca/maps?f=d&source=s_d&saddr=107th+Street,+edmonton,+ab&daddr=&geocode=&hl=&mra=ls&sll=43.786807,-79.546876&sspn=0.010797,0.027702&ie=UTF8&z=11" target="_blank">8882 170th Street</a><br />
Edmonton, AB T5T 3J7<br />
780-444-1993<br />

<br /><br />

<strong>West Edmonton - Fairweather Women's</strong><br />
<a href="http://maps.google.ca/maps?f=d&source=s_d&saddr=107th+Street,+edmonton,+ab&daddr=&geocode=&hl=&mra=ls&sll=43.786807,-79.546876&sspn=0.010797,0.027702&ie=UTF8&z=11" target="_blank">8882 170th Street</a><br />
Edmonton, AB T5T 3J7<br />
780-444-1977<br />

<br /><br />

<?php $array = array("ROCKY VIEW","Fairweather","Women's","Cross Iron Mills","261055 CrossIron Blvd","Rocky View"," AB","T4A 0G3","403-274-1961");
storeoutput_city($array);?>

<br /><br />

<hr width="100%" size="1" noshade />


<a name="BC"></a>
<h1>British Columbia</h1>

<h2>Burnaby</h2>
<br />

<strong>Lougheed Mall - Fairweather Women's/Boy's</strong><br />
<a href="http://maps.google.ca/maps?f=q&source=s_q&hl=en&geocode=&q=247-+9855+Austin+Road+Burnaby,+BC+V3J+1N4&sll=49.228302,-122.999374&sspn=0.009935,0.027874&ie=UTF8&hq=&hnear=9855+Austin+Rd,+Burnaby,+Greater+Vancouver+Regional+District,+British+Columbia&z=16" target="_blank">9855 Austin Road</a><br />
Burnaby, BC V3J 1N4<br />
866-286-9438<br />

<br /><br />

<strong>Metropolis @ Metrotown - Fairweather Women's</strong><br />
<a href="http://maps.google.ca/maps?f=q&source=s_q&hl=en&geocode=&q=2187+-+4700+Kingsway+Drive+Burnaby,+BC+V5H+4G7&sll=49.190851,-122.946623&sspn=0.009943,0.027874&ie=UTF8&hq=&hnear=4700+Kingsway,+Burnaby,+Greater+Vancouver+Regional+District,+British+Columbia&z=16" target="_blank">4700 Kingsway Drive
</a><br />
Burnaby, BC V5H 4G7<br />
866-286-9284<br />

<br /><br />

<h2>Kelowna</h2>
<br />

<strong>Orchard Park - Fairweather Women's</strong><br />
<a href="http://maps.google.ca/maps?f=q&source=s_q&hl=en&geocode=&q=2271+Harvey+Ave.+Kelowna,+BC++V1Y+6H2&sll=42.405486,-82.183781&sspn=0.011233,0.027874&ie=UTF8&hq=&hnear=2271+Harvey+Ave,+Kelowna,+Central+Okanagan+Regional+District,+British+Columbia&z=16" target="_blank">2271 Harvey Ave.</a><br />
Kelowna, BC V1Y 6H2<br />
250-860-6046<br />

<br /><br />

<h2>Langley</h2>
<br />

<strong>Willowbrook Mall - Fairweather Women's</strong><br />
<a href="http://maps.google.ca/maps?hl=en&pq=willowbrook+mall&cp=18&gs_id=9&xhr=t&bav=on.2,or.r_gc.r_pw.r_qf.,cf.osb&biw=1469&bih=883&um=1&ie=UTF-8&q=willowbrook+mall+langley&fb=1&gl=ca&hq=willowbrook+mall&hnear=0x5485cfccc76506e7:0x52d0b66a8f1a6ca9,Langley,+BC&cid=0,0,3840812145807136015&ei=jyCxT8P-FIqt6AHIi-SnCQ&sa=X&oi=local_result&ct=image&resnum=10&sqi=2&ved=0CAgQ_BIwCQ" target="_blank">19705 Fraser Highway</a><br />
Langley, BC V3A 7E9<br />
604-514-3058<br />

<br /><br />


<h2>Port Coquitlam</h2>
<br />

<strong>Coquitlam Centre - Fairweather Women's/Boy's</strong><br />
<a href="http://maps.google.ca/maps?f=q&source=s_q&hl=en&geocode=&q=2929+Barnett+Hwy.+%231406++Port+Coquitlam,+BC+V3B+5R5&sll=49.24903,-122.895598&sspn=0.009931,0.027874&g=247-+9855+Austin+Road+Burnaby,+BC+V3J+1N4&ie=UTF8&hq=&hnear=2929+Barnet+Hwy,+Coquitlam,+Greater+Vancouver+Regional+District,+British+Columbia&z=16" target="_blank">2929 Barnett Highway</a><br />
Port Coquitlam, BC V3B 5R5<br />
604-941-2187<br />

<br /><br />

<!-- <h2>Richmond</h2>
<br />
<strong>Richmond Centre - Fairweather Women's</strong><br />
<a href="http://maps.google.ca/maps?f=q&source=s_q&hl=en&geocode=&q=%23115-606+Minoru+Blvd.+Richmond,++BC++V6Y+2V7&sll=49.881811,-119.4356&sspn=0.009803,0.027874&ie=UTF8&hq=&hnear=Minoru+Blvd,+Richmond,+Greater+Vancouver+Regional+District,+British+Columbia&z=15" target="_blank">#115-606 Minoru Blvd.
</a><br />
Richmond, BC V6Y 2V7<br />
604-273-8561<br />

<br /><br /> -->

<h2>Surrey</h2>
<br />
<strong>Central City - Fairweather Women's</strong><br />
<a href="http://maps.google.ca/maps?f=q&source=s_q&hl=en&geocode=&q=10153+King+George+Hwy+%23504,+Surrey,+BC++V3T+2W1&sll=49.191544,-122.806445&sspn=0.019885,0.055747&ie=UTF8&hq=&hnear=10153+King+George+Hwy,+Surrey,+Greater+Vancouver+Regional+District,+British+Columbia&z=16" target="_blank">10153 King George Highway
</a><br />
Surrey, BC V3T 2W1<br />
604-495-7037<br />

<br /><br />
<strong>Guildford Town Centre - Fairweather Women's</strong><br />
<a href="https://maps.google.com/maps?q=10355+152+Street,+Surrey,+BC,+Canada&hl=en&sll=56,-96&sspn=85.534267,158.027344&oq=10355+152&hnear=10355+152+St,+Surrey,+British+Columbia+V3R+7C1,+Canada&t=m&z=16" target="_blank">10355  152th Street, Unit 2185
</a><br />
Surrey, BC V3R 7C1<br />
604-588-0401<br />

<br /><br />

<!--
<h2>Victoria</h2>
<br />
<strong>Victoria Bay Centre - Fairweather Women's</strong><br />
<a href="http://maps.google.ca/maps?f=q&source=s_q&hl=en&geocode=&q=115+Douglas+Street,+Suite+322,+Victoria,+BC++V8W+3M9&sll=49.187011,-122.845552&sspn=0.009943,0.027874&ie=UTF8&hq=&hnear=Douglas+St,+Victoria,+Capital+Regional+District,+British+Columbia&z=15" target="_blank">115 Douglas Street, Suite 322
</a><br />
Victoria, BC V8W 3M9<br />
(250) 380-1227<br />

<br /><br />
-->


<!--
<strong>St. Vital Centre - Fairweather Women's</strong><br />
<a href="http://maps.google.ca/maps?f=q&source=s_q&hl=en&geocode=&q=1225+St.+Mary%27s+Road,+Winnipeg,+Manitoba+R2M+5E2&sll=49.880749,-97.199145&sspn=0.009803,0.027874&ie=UTF8&hq=&hnear=1225+St+Mary%27s+Rd,+Winnipeg,+Division+No.+11,+Manitoba&z=16" target="_blank">1225 St. Mary's Road</a><br />
Winnipeg, MB R2M 5E2<br />
(204) 255-2800<br />

<br /><br />
-->

<hr width="100%" size="1" noshade />

<a name="Manitoba"></a>
<h1>Manitoba</h1>
<h2>Winnipeg</h2>
<br />

<strong>Polo Park Shopping Centre</strong><br />
<a href="https://maps.google.com/maps?q=1485+Portage+Ave,+Winnipeg,+MB,+Canad%C3%A1&hl=en&ie=UTF8&sll=56,-96&sspn=85.534267,158.027344&oq=1485+Portage+Avenue&hnear=1485+Portage+Ave,+Winnipeg,+Division+No.+11,+Manitoba,+Canada&t=m&z=16" target="_blank">1485 Portage Avenue</a><br />
Winnipeg, R3G 0W4<br />
204-775-5361<br />
<br />

<strong>Portage Place</strong><br />
<a href="https://maps.google.com/maps?q=393+Portage+Avenue,+Winnipeg,+MB,+Canada&hl=en&sll=49.881293,-97.199564&sspn=0.011518,0.01929&oq=393+Portage+Avenue&hnear=393+PORTAGE+Ave,+Winnipeg,+Division+No.+11,+Manitoba+R3B+3H6,+Canada&t=m&z=16" target="_blank"> 393 Portage Avenue </a><br />
Winnipeg, R3B 3H6<br />
204-989-0458<br />
<br />

<hr width="100%" size="1" noshade />

<a name="NB"></a>
<h1>New Brunswick</h1>
<h2>Dieppe</h2>
<br />
<strong>Champlain Place - Fairweather Women's</strong><br />
<a href="http://maps.google.ca/maps?f=q&source=s_q&hl=en&geocode=&q=477+Paul+Street+Dieppe,+NB+E1A+4X5&sll=44.684672,-63.559182&sspn=0.010817,0.027874&ie=UTF8&hq=&hnear=477+Paul+St,+Dieppe,+Westmorland+County,+New+Brunswick&z=16" target="_blank">477 Paul Street
</a><br />
Dieppe, NB E1A 4X5<br />
866-288-9582<br />

<br /><br />

<h2>Fredericton</h2>
<br />
<strong>Regent Mall - Fairweather Women's/Boy's</strong><br />
<a href="http://maps.google.ca/maps?f=q&source=s_q&hl=en&geocode=&q=1381+Regent+Street+Fredericton,+NB+E3C+1A2&sll=46.264675,-63.147031&sspn=0.010518,0.027874&ie=UTF8&hq=&hnear=1381+Regent+St,+Fredericton,+York+County,+New+Brunswick&z=16" target="_blank">1381 Regent Street
</a><br />
Fredericton, NB E3C 1A2<br />
866-288-9583<br />

<br /><br />

<h2>St. John</h2>
<br />
<strong>East Point - Fairweather Women's</strong><br />
<a href="http://maps.google.ca/maps?f=q&source=s_q&hl=en&geocode=&q=East+Point,+15+Fashion+Drive+Saint+John,+NB+E2J+0A7&sll=44.648001,-63.620125&sspn=0.010823,0.027874&g=7001+Mumford+Road+Halifax,+NS+B3L+2H8&ie=UTF8&hq=East+Point,+15+Fashion+Drive+Saint+John,+NB+E2J+0A7&hnear=7001+Mumford+Rd,+Halifax,+NS&z=14&iwloc=A" target="_blank">15 Fashion Drive
</a><br />
St. John, NB E2J 0A7<br />
866-288-9585<br />

<br /><br />
<strong>Lancaster Mall - Fairweather Women's</strong><br />
<a href="http://maps.google.ca/maps?f=q&source=s_q&hl=en&geocode=&q=621+Fairville+Blvd+Saint+John,+NB+E2M+4X5&sll=44.647525,-63.596336&sspn=0.043294,0.111494&ie=UTF8&hq=&hnear=621+Raynes+Blvd,+St+John,+St+John+County,+New+Brunswick&z=16" target="_blank">621 Fairville Blvd
</a><br />
St. John, NB E2M 4X5<br />
866-288-9721<br />

<br /><br />

<!-- <hr width="100%" size="1" noshade />

<a name="NFLD"></a>
<h1>Newfoundland/Labrador</h1>
<h2>St. John's</h2>
<br />

<strong>Avalon Mall - Fairweather Women's</strong><br />
<a href="http://maps.google.ca/maps?f=q&source=s_q&hl=en&geocode=&q=48+Kenmount+Road,+St.+John%27s,+Nfld+A1B+1W5&sll=45.422416,-75.698354&sspn=0.010678,0.027874&ie=UTF8&hq=48+Kenmount+Road,+St.+John%27s,+Nfld&hnear=Newfoundland+and+Labrador+A1B+1W5&ll=47.559181,-52.753472&spn=0.019809,0.055747&z=15" target="_blank">48 Kenmount Road</a><br />
St. John's, NFLD A1B 1W5<br />
709-726-8206<br

<br /><br /> -->



<hr width="100%" size="1" noshade />

<a name="NS"></a>
<h1>Nova Scotia</h1>
<?php $array = array("NOVA SCOTIA","Fairweather","Women's","Bedford Place Mall","1658 Bedford Highway","Bedford"," NS","B4A 2X9","866-288-9659");
storeoutput_city($array);?>

<?php $array = array("NOVA SCOTIA","Fairweather","Women's","Mic Mac Mall","21 Mic Mac Blvd","Dartmouth"," NS","B3A 4K6","866-288-9571");
storeoutput_city($array);?>

<?php $array = array("NOVA SCOTIA","Fairweather","Women's","Dartmouth Crossing","81 Hector Gate","Halifax"," NS","B3B 0B8","902-463-1053");
storeoutput_city($array);?>

<?php $array = array("NOVA SCOTIA","Fairweather","Women's","Mayflower Mall","800 Grand Lake Road","Sydney"," NS","B1P 6S9","866-288-9655");
storeoutput_city($array);?>


<?php $array = array("NOVA SCOTIA","Fairweather","Women's","Yarmouth","76 Starrs Road","Yarmouth "," NS","B5A 2T5","866-288-9710");
storeoutput_city($array);?>


<hr width="100%" size="1" noshade />

<a name="Ontario"></a>
<h1>Ontario</h1>

<?php $array = array("ONTARIO","Fairweather","Women's","Durham Regional Centre","40 Kingston Road East","Ajax"," ON","L1Z 1E9","905-686-4636");
storeoutput_city($array);?>

<!-- <?php $array = array("ONTARIO","Fairweather","Women's","Meadowlands Plaza","821 Gold Links Road","Ancaster"," ON","L9K 1L5","905-304-0522");
storeoutput_city($array);?> -->
<!-- <?php $array = array("ONTARIO","Fairweather","Women's","Aurora","43 First Commerce Drive","Aurora"," ON","L4G 0G2","905-841-5417");
storeoutput_city($array);?> -->
<?php $array = array("ONTARIO","Fairweather","Women's","Georgian Mall","509 Bayfield Street","Barrie"," ON","L4M 4Z8","705-722-4014");
storeoutput_city($array);?>

<?php $array = array("ONTARIO","Fairweather","Women's","Bramalea City Centre","25 Peel Centre Drive","Brampton"," ON","L6T 3R5","905-793-4697");
storeoutput_city($array);?>

<!-- <?php $array = array("ONTARIO","Fairweather","Women's","Queen St","255 Queen Street East","Brampton"," ON","L6Y 1M7","905-455-7426");
storeoutput($array);?> -->

<?php $array = array("ONTARIO","Fairweather","Women's","Shoppers World","499 Main Street. S","Brampton"," ON","L6Y 1N7","905-453-8333");
storeoutput($array);?>


<?php $array = array("ONTARIO","Fairweather","Women's","Burlington Mall","777 Guelph Line","Burlington"," ON","L7R 3N2","905-632-6633");
storeoutput_city($array);?>
<?php $array = array("ONTARIO","Fairweather","Women's","Cambridge Centre","355 Hespeler Road, Unit 118 & 120","Cambridge"," ON","N1R 6B3","226-566-1576");
storeoutput_city($array); ?>

<?php $array = array("ONTARIO","Fairweather","Women's/Boy's","Downtown Chatham Centre","100 King Street West","Chatham"," ON","N7M 6A9","519-352-1708");
storeoutput_city($array);?>




<?php $array = array("ONTARIO","Fairweather","Women's","Cookstown Outlet Mall","3311 County Road 89","Cookstown"," ON","L0L 1L0","705-458-247");
storeoutput_city($array)?>



<?php $array = array("ONTARIO","Fairweather","Women's","Woodbine Centre","500 Rexdale Blvd.","Etobicoke"," ON","M9W 6K5","416-674-5602");
storeoutput_city($array); ?>

<?php $array = array("ONTARIO","Fairweather","Women's","Stone Road Mall","435 Stone Road","Guelph"," ON","N1G 2X6","519-836-3312");
storeoutput_city($array);?>


<?php $array = array("ONTARIO","Fairweather","Women's","Hamilton City Centre","77 James Street North","Hamilton"," ON","L8R 2K5","905-570-0515");
storeoutput_city($array);?>



<?php $array = array("ONTARIO","Fairweather","Women's","Limeridge Mall","999 Upper Wentworth Street","Hamilton"," ON","L9A 4X5","905-388-4376");
storeoutput($array);?>



<?php $array = array("ONTARIO","Fairweather","Women's","Sunrise Centre","1400 Ottawa Street South","Kitchener"," ON","N2E 4E2","519-745-2929");
storeoutput_city($array);?>


<?php $array = array("ONTARIO","Fairweather","Women's","Lindsay Square","401 Kent Street West","Lindsay"," ON","K9V 4Z1","866-299-2305");
storeoutput_city($array);?>



<?php $array = array("ONTARIO","Fairweather","Women's","Citi Plaza","355 Wellington Street","London"," ON","N6A3N7","519-850-7896");
storeoutput_city($array);?>
<?php $array = array("ONTARIO","Fairweather","Women's","White Oaks Mall","1105 Wellington Road","London"," ON","N6E 1V4","519-686-7421");
storeoutput($array);?>

<?php $array = array("ONTARIO","Fairweather","Women's","Markville Shopping Centre","5000 Highway # 7","Markham "," ON","L3R 4M9","905-513-6700");
storeoutput_city($array);?>

<?php $array = array("ONTARIO","Fairweather","Women's","Milton Mall","55 Ontario Street South, Unit #4","Milton"," ON","L9T 2M3","289-627-1657");
storeoutput_city($array);?>

<?php $array = array("ONTARIO","Fairweather","Women's","Dixie Outlet","1250 S. Service Road","Mississauga"," ON","L5E1V4","905-278-6630");
storeoutput_city($array);?>
<?php $array = array("ONTARIO","Fairweather","Women's","Erin Mills Town Centre","5100 Erin Mills Parkway","Mississauga"," ON","L5M 4Z5","905-569-3763");
storeoutput($array);?>
<?php $array = array("ONTARIO","Fairweather","Women's","Heartland Centre","5935 Mavis Road","Mississauga"," ON","L5R 3T7","905-502-9090");
storeoutput($array);?>
<?php $array = array("ONTARIO","Fairweather","Women's","Square One Shopping Centre","100 City Center Drive","Mississauga"," ON","L5B 2C9","905-275-1515");
storeoutput($array);?>




<?php $array = array("ONTARIO","Fairweather","Women's/Boy's","Merivale Mall","1622 Merivale Road","Nepean"," ON","K2G 4A1","613-226-7505");
storeoutput_city($array);?>


<?php $array = array("ONTARIO","Fairweather","Women's","Upper Canada Mall","17600 Yonge Street North","Newmarket"," ON","L3Y 4Z1","905-836-8550");
storeoutput_city($array);?>


<?php $array = array("ONTARIO","Fairweather","Women's","Niagara Power Centre","6940-7190 Morrison Street","Niagara Falls"," ON","L2E 7K5","905-354-3095");
storeoutput_city($array);?>


<?php $array = array("ONTARIO","Fairweather","Women's/Boy's","Centre Point Mall","6464 Yonge Street","North York"," ON","M2M 3X4","416-222-0519");
storeoutput_city($array);?>
<?php $array = array("ONTARIO","Fairweather","Women's","North York Sheridan Mall","1700 Wilson Avenue","North York"," ON","M3L 1B2","416-247-8356");
storeoutput($array);?>


<?php $array = array("ONTARIO","Fairweather","Women's","Oshawa Shopping Centre","419 King Street West ","Oshawa"," ON","L1J 2K5","905-725-6537");
storeoutput_city($array);?>

<?php $array = array("ONTARIO","Fairweather","Women's","OSHAWA SOUTH","560 Laval Drive","Oshawa"," ON","L1J 6L8","905-728-0523");
storeoutput($array);?>


<?php $array = array("ONTARIO","Fairweather","Women's/Boy's","Bayshore Shopping Centre","100 Bayshore Drive","Ottawa"," ON","K2B 8C1","613-828-9105");
storeoutput_city($array);?>


<?php $array = array("ONTARIO","Fairweather","Women's","Billings Bridge Plaza","2261 Riverside Drive East","Ottawa"," ON","K1H 8K2","613-733-7335");
storeoutput($array);?>

<?php $array = array("ONTARIO","Fairweather","Women's/Boy's","Rideau Centre","50 Rideau Street","Ottawa"," ON","K1N 9J7","613-230-7901");
storeoutput($array);?>

<?php $array = array("ONTARIO","Fairweather","Women's","Sparks Street Mall","240 Sparks Street","Ottawa"," ON","K1P 6C9","613-238-2858");
storeoutput($array);?>

<?php $array = array("ONTARIO","Fairweather","Women's/Boy's","St. Laurent Shopping Centre","1200 St. Laurent Blvd.","Ottawa"," ON","K1K 3B8","613-745-9861");
storeoutput($array);?>



<?php $array = array("ONTARIO","Fairweather","Women's","Pickering Town Centre","1355 Kingston Road","Pickering"," ON","L1V 1B8","905-831-5689");
storeoutput($array);?>

<!-- // <?php $array = array("ONTARIO","Fairweather","Women's","Shops at Pickering","1755 Pickering Parkway","Pickering"," ON","L1V 6K5","905-428-2924");
// storeoutput($array);?> -->

<?php $array = array("ONTARIO","Fairweather","Women's","Scarborough","300 Borough Drive","Scarborough"," ON","M1P 4P5","416-296-5877");
storeoutput($array);?>


<?php $array = array("ONTARIO","Fairweather","Women's/Boy's","Station Mall","293 Bay Street","Sault Ste. Marie"," ON","P6A 1X3","705-759-1468");
storeoutput_city($array);
?>


<?php $array = array("ONTARIO","Fairweather","Women's","Pen Centre","221 Glendale Avenue","St. Catherines"," ON","L2T 2K9","905-688-0154");
storeoutput_city($array);?>

<?php $array = array("ONTARIO","Fairweather","Women's","Eastgate Square","75 Centennial Parkway North","Stoney Creek"," ON","L8E 2P2","289-965-8374");
storeoutput_city($array);?>

<!-- // <?php $array = array("ONTARIO","Fairweather","Women's","Southridge Mall","1933 Regent Street South","Sudbury"," ON","P3E 5R2","705-522-9057");
// storeoutput_city($array);?> -->


<?php $array = array("ONTARIO","Fairweather","Women's","Intercity Shopping Plaza","1000 Fort William Road","Thunderbay"," ON","P7B 6B9","855-598-7674");
storeoutput_city($array);?>



<?php $array = array("ONTARIO","Fairweather","Women's","Dufferin Mall","900 Dufferin Street ","Toronto"," ON","M6H 4B1","416-530-8076");
storeoutput_city($array);?>

<?php $array = array("ONTARIO","Fairweather","Women's","Gerrard Square","1000 Gerrard Street East","Toronto"," ON","M4M 3G6","416-778-8349");
storeoutput($array);?>

<?php $array = array("ONTARIO","Fairweather","Women's","Orfus Road","125 Orfus Road","Toronto"," ON","M6A 1M4","416-785-9177");
storeoutput($array);?>

<?php $array = array("ONTARIO","Fairweather","Women's","Parkway Mall","85 Ellesmere Road","Toronto"," ON","M1R 4B9","647-478-4981");
storeoutput($array);?>

<?php $array = array("ONTARIO","Fairweather","Women's","Yorkdale Shopping Centre","3401 Dufferin Street","Toronto"," ON","M6A 2T9","416-787-2665");
storeoutput($array);?>
<?php $array = array("ONTARIO","Fairweather","Women's","Vaughan Mills","1 Bass Pro Mills Drive","Vaughan"," ON","L4k 5W4","905-669-4554");
storeoutput_city($array);?>
<?php $array = array("ONTARIO","Fairweather","Women's","Conestoga Mall","550 King Street North","Waterloo"," ON","N2L 5W6","519-886-5460");
storeoutput_city($array);?></h2>

<?php $array = array("ONTARIO","Fairweather","Women's","Fairview Mall","1800 Sheppard Avenue East","Willowdale"," ON","M2J 5A7","416-496-1865");
storeoutput_city($array);?>

<?php $array = array("ONTARIO","Fairweather","Women's/Boy's","Devonshire Mall","3100 Howard Avenue","Windsor"," ON","N8X 3Y8","519-969-7425");
storeoutput_city($array);?>







<br /><br />
<hr width="100%" size="1" noshade />
<a name="PEI"></a>
<h1>Prince Edward Island</h1>
<h2>Charlottetown</h2>
<br />

<strong>Charlottetown Mall  - Fairweather Women's</strong><br />
<a href="http://maps.google.ca/maps?f=q&source=s_q&hl=en&geocode=&q=670+University+Ave-Unit+%23104%2F105+Charlottetown,PEI+C1E+1H6&sll=46.09438,-64.757001&sspn=0.01055,0.027874&ie=UTF8&hq=&hnear=670+University+Ave+%23104,+Charlottetown,+Queens+County,+Prince+Edward+Island&z=16" target="_blank">670 University Ave</a><br />
Charlottetown, PEI C1E 1H6<br />
902-892-3518<br />

<br /><br />
<hr width="100%" size="1" noshade />
<a name="Quebec"></a>
<h1>Quebec</h1>
<h2>Brossard</h2>
<br />
<strong>Quartier Dix30 Brossard - GLAM Women's/Boy's</strong><br />
<a href="http://maps.google.ca/maps?client=safari&rls=en&oe=UTF-8&redir_esc=&q=9415+boul.+Leduc+Unit+40+Brossard+Quebec&um=1&ie=UTF-8&hq=&hnear=0x4cc90f48fd45d8cb:0x78b829e44de428da,9415+Boulevard+Leduc+%2340,+Brossard,+QC+J4Y+0B6&gl=ca&ei=LPqzT4WCMa7H6AHYl8iVCQ&sa=X&oi=geocode_result&ct=title&resnum=1&ved=0CB4Q8gEwAA" target="_blank">9415 boul. Leduc Unit 40</a><br />
Brossard, QC J4Y 0A5<br />
450-656-9097

<br /><br />
<h2>Joliette</h2>
<br />
<strong>Galeries Joliette - Fairweather Women's</strong><br />
<a href="http://maps.google.ca/maps?client=safari&rls=en&oe=UTF-8&redir_esc=&q=1075+Boul.+Firestone,+Joliette+Quebec&um=1&ie=UTF-8&hq=&hnear=0x4cc8bda20bda0f9b:0x25643ab6c5f2fc42,1075+Boulevard+Firestone,+Joliette,+QC+J6E+2W4&gl=ca&ei=9vqzT8ngH9GA6QHFyJjVDw&sa=X&oi=geocode_result&ct=title&resnum=1&ved=0CAsQ8gEwAA" target="_blank">1075 Boul. Firestone</a><br />
Joliette, QC J6E 6X6<br />
450-752-0075
<br /><br />
<h2>
<?php $array = array("QUEBEC","Fairweather","Women's","Carrefour Angrignon","7077 boul. Newman","Lasalle"," QC","H8N 1X1","514-363-2366");
storeoutput_city($array);?>



<?php $array = array("QUEBEC","Fairweather","Women's","Le Boulevard","4280 Jean-Talon Street East","Montreal"," QC","H1S 1J7","514-725-0973");
storeoutput_city($array);?>
<?php $array = array("QUEBEC","Fairweather","Women's","Place Versailles","7275 Rue Sherbrooke est","Montreal"," QC","H1N 1E9","514-355-5321"); storeoutput($array);?>
<?php $array = array("QUEBEC","Fairweather","Women's","Fairview Pointe Claire","6801 Autoroute Transcanadienne","Pointe-Claire"," QC","H9R 5X4","514-694-9099");
storeoutput_city($array);?><?php $array = array("QUEBEC","Fairweather","Women's","Promenades Beauport","3333 Rue de Carrefour, Unit #A-90","Quebec City"," QC","G1C 5R9","418-661-9202");
storeoutput_city($array);?><?php $array = array("QUEBEC","Fairweather","Women's","Place Vertu","3131 Cote Vertu, Local C29","Ville St. Laurent"," QC","H4R 1Y8","514-333-6624");
storeoutput_city($array);?><hr width="100%" size="1" noshade />

<a name="Saskatchewan"></a>
<h1>Saskatchewan</h1>
<h2>Prince Albert</h2>
<br />
<strong>Gateway North Plaza - Fairweather Women's</strong><br />
<a href="http://maps.google.ca/maps?q=1403+Central+Avenue+prince+albert+saskatchewan&um=1&ie=UTF-8&hq=&hnear=0x53017a8850431a0d:0x4c4ccb49f4166543,1403+Central+Ave,+Prince+Albert,+SK+S6V+4W1&gl=ca&ei=lCexT_C5GMix6QHewNiXCQ&sa=X&oi=geocode_result&ct=image&resnum=1&ved=0CB8Q8gEwAA" target="_blank">1403 Central Avenue</a><br />
Prince Albert, SK S6V 7J4<br />
306-922-8839<br />

<br /><br /></div>			 	
								 	<script>
  /* attach a submit handler to the form */
/*
  $('.postdata a').click(function() {
  		$("#results").fadeIn("fast");
  });
*/
</script>

							 	</div>

							</div>
						
		
				
				
</body>
</html>