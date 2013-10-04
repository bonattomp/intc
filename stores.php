<?php function storeouput($args=""){
		$array = $args;
		/* $addmap = str_replace(" #", "#", trim($array[4])); */
		if (strstr($array[4], ",")):
			$addmap = explode(",",$array[4]);
			$addmap = trim($addmap[0]);
		else:
			$addmap = trim($array[4]);
		endif;
		$str=	"<strong>". trim($array[3])." - ".trim($array[1])."</strong><p class='location_txt'><a href='http://maps.google.ca/maps?client=safari&rls=en&oe=UTF-8&redir_esc=&q=".$addmap."%22,%22+".trim($array[5])."%22,%22".trim($array[6])."%22' target='_blank'>".trim($array[4])."</a><br />".trim($array[5]).", ".trim($array[6])." ".trim($array[7])."<br />".trim($array[8])."</p><p class='location_boys_txt'>".trim($array[2])."</p><br/><br/>";
		echo $str;


		
		}
		
		 function storeouput_city($args=""){
		$array = $args;
		if (strstr($array[4], ",")):
			$addmap = explode(",",$array[4]);
			$addmap = trim($addmap[0]);
		else:
			$addmap = trim($array[4]);
		endif;
		$str=	"<h2>".trim($array[5])."</h2><br/><strong>". trim($array[3])." - ".trim($array[1])."</strong><p class='location_txt'><a href='http://maps.google.ca/maps?client=safari&rls=en&oe=UTF-8&redir_esc=&q=".$addmap."%22,%22+".trim($array[5])."%22,%22".$array[6]."%22' target='_blank'>".trim($array[4])."</a><br />".trim($array[5]).", ".trim($array[6])." ".trim($array[7])."<br />".trim($array[8])."<p/> <p class='location_boys_txt'>".trim($array[2])."</p><br/><br/>";
		echo $str;


		
		}
		?>			
		

<a name="Alberta"></a>
<h1>Alberta</h1>

<?php 
 $array = array("ALBERTA ","International Clothiers","","Chinook Centre","67-6455 Macleod Trail.S","Calgary"," AB","T2H 0K3","403-319-0045"); storeouput_city($array);
 $array = array("ALBERTA ","International Clothiers","","Sunridge Mall","2525 - 36th Street N.E.","Calgary"," AB","T1Y 5T4","403-264-6056"); storeouput($array);
 $array = array("ALBERTA ","International Clothiers","We carry boys wear size 7-16","Marlborough Mall","3800 Memorial Drive NE, Unit 54","Calgary"," AB","T2A 2K2","403-207-9652"); storeouput($array);
 $array = array("ALBERTA ","International Clothiers","We carry boys wear size 7-16","West Edmonton ","8882 170th Street","Edmonton"," AB","T5T 3J7","403-248-7226"); storeouput_city($array);
 $array = array("ALBERTA ","International Clothiers","We carry boys wear size 7-16","Londonderry Mall","137th Avenue & 66th Street","Edmonton"," AB","T5C 3C8","780-406-9503"); storeouput($array);
 $array = array("ALBERTA ","International Clothiers","We carry boys wear size 7-16","South Ed. Commons","9703-19th Avenue N.W.","Edmonton"," AB","T6N 1N5","780-409-4232"); storeouput($array); 
 $array = array("ALBERTA ","International Clothiers","","Cross Iron Mills","261055 CrossIron Blvd","Rocky View"," AB","T4A 0G3","403-274-1961"); storeouput_city($array);

?>
<hr width="100%" size="1" noshade />


<a name="BC"></a>
<h1>British Columbia</h1>
<?php 
$array = array("BRITISH COLUMBIA ","International Clothiers","","Seven Oaks Shopping Centre","32900 South Fraser Way","Abbotsford"," BC","V2S 5A1","604-557-1259"); storeouput_city($array);
$array = array("BRITISH COLUMBIA ","International Clothiers","","Metropolis @ Metrotown","4700 Kingsway Drive","Burnaby"," BC","V5H 4J2","604-436-5576"); storeouput_city($array);
$array = array("BRITISH COLUMBIA ","International Clothiers","","Central City","2153 Surrey Pl. Mall #382","Surrey"," BC","V3T 2W1","604-581-2505"); storeouput_city($array);
$array = array("BRITISH COLUMBIA ","International Clothiers","","Guildford Town Centre","2577 104Th Ave. Unit 48","Surrey"," BC","V3R 7C1","604-588-0401"); storeouput($array);
$array = array("BRITISH COLUMBIA ","International Clothiers","","Orchard Park","2271 Harvey Avenue, Unit # 0091","Kelowna"," BC","V1Y 6H2","250-762-5633"); storeouput_city($array);
?>
<hr width="100%" size="1" noshade />


<a name="Manitoba"></a>
<h1>Manitoba</h1>
<?php 
$array = array("MANITOBA","International Clothiers","","Garden City","2305 McPhillips Street","Winnipeg"," MB","R2V 3E1","204-338-3173"); storeouput_city($array);
$array = array("MANITOBA","International Clothiers","We carry boys wear size 7-16","Kildonan Place","1555 Regent Avenue","Winnipeg"," MB","R2C 4J2","204-654-1621"); storeouput($array);
$array = array("MANITOBA","International Clothiers","","Portage Place","393 Portage Avenue","Winnipeg"," MB","R3B3H6","204-943-9804"); storeouput($array);
$array = array("MANITOBA","International Clothiers","We carry boys wear size 7-16","Polo Park Shopping Centre","1485 Portage Avenue ","Winnipeg"," MB","R3G 0W4","204-788-4881"); storeouput($array);
$array = array("MANITOBA","International Clothiers","","St. Vital Centre","1225 St. Mary's Road","Winnipeg"," MB","R2M 5E2","204-257-2497"); storeouput($array);
?>
<hr width="100%" size="1" noshade />


<a name="NB"></a>
<h1>New Brunswick</h1>
<?php 
$array = array("NEW BRUNSWICK","International Clothiers","","Champlain Place","477 Paul Street","Dieppe"," NB","E1A 4X5","506-854-3378"); storeouput_city($array);
$array = array("NEW BRUNSWICK","International Clothiers","","East Point","15 Fashion Drive","St. John"," NB","E2J 0A7","506-648-9147"); storeouput_city($array);
$array = array("NEW BRUNSWICK","International Clothiers","","Lancaster Mall","621 Fairville Blvd, Unit # B2","St. John"," NB","E2M 4X5","506-653-9806"); storeouput_city($array);
$array = array("NEW BRUNSWICK","International Clothiers","","Regent Mall","1381 Regent Street","Fredericton"," NB","E3C 1A2","506-459-3566"); storeouput_city($array);
?>
<hr width="100%" size="1" noshade />


<a name="NFLD"></a>
<h1>Newfoundland/Labrador</h1>
<?php 
$array = array("NEWFOUNDLAND","International Clothiers","","Avalon Malll","48 Kenmount Road","St.John's"," NF","A1B 1W3","709-739-6737"); storeouput_city($array);
?>
<hr width="100%" size="1" noshade />


<a name="NS"></a>
<h1>Nova Scotia</h1>
<?php 
$array = array("NOVA SCOTIA","International Clothiers","","Bedford Place Mall","1658 Bedford Highway","Bedford"," NS","B4A 2X9","902-832-0321"); storeouput_city($array);
$array = array("NOVA SCOTIA","International Clothiers","","Dartmouth Crossing","93 Hector Gate","Halifax"," NS","B3B 0B8","902-468-7422"); storeouput_city($array);
$array = array("NOVA SCOTIA","International Clothiers","","Mayflower Mall","800 Grand Lake Road","Sydney"," NS","B1P 6S9","902-539-3782"); storeouput_city($array);
$array = array("NOVA SCOTIA","International Clothiers","","Yarmouth","76 Starrs Road","Yarmouth"," NS","B5A 2T5","902-742-6279"); storeouput_city($array);
?>
<br /><br />
<hr width="100%" size="1" noshade />


<a name="Ontario"></a>
<h1>Ontario</h1>
<?php 
$array = array("ONTARIO","International Clothiers","We carry boys wear size 7-16","Durham Regional Centre","40 Kingston Road East","Ajax"," ON","L1Z 1E9","905-686-4636"); storeouput_city($array);

$array = array("ONTARIO","International Clothiers","We carry boys wear size 7-16","Meadowlands Plaza","821 Gold Links Road","Ancaster"," ON","L9K 1L5","905-304-0522"); storeouput_city($array);

$array = array("ONTARIO","International Clothiers","","Georgian Mall","509 Bayfield Street","Barrie"," ON","L4M 4Z8","705-728-8728"); storeouput_city($array);

$array = array("ONTARIO","International Clothiers","We carry boys wear size 7-16","Vaughan Mills","1 Bass Pro Mills Drive","Concord"," ON","L4K 5W4","905-761-9687"); storeouput_city($array);

$array = array("ONTARIO","International Clothiers","We carry boys wear size 7-16","Bramalea City Centre","25 Peel Centre Drive","Brampton"," ON","L6T 3R5","905-790-2700"); storeouput_city($array);
$array = array("ONTARIO","International Clothiers","We carry boys wear size 7-16","Queen St","255 Queen Street East ","Brampton"," ON","L6W 2B8","905-455-7426"); storeouput($array); 
$array = array("ONTARIO","International Clothiers","","Shoppers World","499 Main Street South","Brampton"," ON","L6Y 1N7","905-457-41373"); storeouput($array);

$array = array("ONTARIO","International Clothiers","","East York Town Centre","45 Overlea Blvd","East York","ON","M4H 1C3","416-422-58834"); storeouput_city($array);

$array = array("ONTARIO","International Clothiers","We carry boys wear size 7-16","Eastgate Square","75 Centennial Parkway North","Hamilton"," ON","L8E 2P2","905-573-7480"); storeouput_city($array); 
$array = array("ONTARIO","International Clothiers","We carry boys wear size 7-16","Jackson Square","2 King Street West","Hamilton"," ON","L8P 1A1",""); storeouput($array);
$array = array("ONTARIO","International Clothiers","","Limeridge Mall","999 Upper Wentworth","Hamilton"," ON","L9A 4X5","905-389-8759"); storeouput($array);

$array = array("ONTARIO","International Clothiers","We carry boys wear size 7-16","Sunrise Centre","1400 Ottawa Street South ","Kitchener"," ON","N2E 4E2","519-742-2692"); storeouput_city($array);

$array = array("ONTARIO","International Clothiers","We carry boys wear size 7-16","White Oaks Mall","1105 Wellington Road","London"," ON","N6E 1V4","519-649-5200"); storeouput_city($array);

$array = array("ONTARIO","International Clothiers","We carry boys wear size 7-16","Dixie Outlet","1250 South Service Road","Mississauga"," ON","L5E1V4","905-278-2596"); storeouput_city($array);  
$array = array("ONTARIO","International Clothiers","We carry boys wear size 7-16","Heartland Centre","5935 Mavis Road","Mississauga"," ON","L5R 3T7","905-502-9090"); storeouput($array); 
$array = array("ONTARIO","International Clothiers","We carry boys wear size 7-16","Square One Shopping Centre","100 City Center Drive","Mississauga"," ON","L5B 2C9","905-277-3206"); storeouput($array); 

$array = array("ONTARIO","International Clothiers","We carry boys wear size 7-16","Finch","1235 Finch Avenue","North York"," ON","M3J 2G4","416-635-1235"); storeouput_city($array); 
$array = array("ONTARIO","International Clothiers","We carry boys wear size 7-16","Orfus Road","111 Orfus Roade","North York"," ON","M6A 1M4","416-785-1771"); storeouput($array);
$array = array("ONTARIO","International Clothiers","","North York Sheridan Mall","1700 Wilson Avenue","North York"," ON","M3L 1B2","416-241-8400"); storeouput($array); 

$array = array("ONTARIO","International Clothiers","","Orangeville","85-115 Fifth Avenue","Orangeville"," ON","L9W 5B7","519-943-0187"); storeouput_city($array);

$array = array("ONTARIO","International Clothiers","","Orillia Square","1029 Brodie Drive, Unit #30","Orillia"," ON","L3V 6H4","705-326-8437"); storeouput_city($array);

$array = array("ONTARIO","International Clothiers","","Oshawa Shopping Centre","419 King Street West ","Oshawa"," ON","L1J 2K5","905-723-5842"); storeouput_city($array); 
$array = array("ONTARIO","International Clothiers","","Oshawa South","580 Laval Drive","Oshawa"," ON","L1J 6L8","905-728-5842"); storeouput($array); 

$array = array("ONTARIO","International Clothiers","","Pembroke Mall","100 Pembroke Street East","Pembroke"," ON","K8A 6Y7","855-429-1683"); storeouput_city($array);

$array = array("ONTARIO","International Clothiers","","Parkway mall","85 Ellesmere Road","Scarborough"," ON","M1R4B9","647-478-4981"); storeouput_city($array);
$array = array("ONTARIO","International Clothiers","","Cedarbrae Mall","3495 Lawrence Ave East","Scarborough"," ON","M1H 1B3","416-438-4775"); storeouput($array); 
$array = array("ONTARIO","International Clothiers","We carry boys wear size 7-16","Scarborough Town Centre","300 Borough Drive","Scarborough"," ON","M1P 4P5","416-296-1632");storeouput($array); 
$array = array("ONTARIO","International Clothiers","","Woodside Square","1571 Sandhurst Circle","Scarborough"," ON","M1V 1V2","416-291-0779"); storeouput($array);

$array = array("ONTARIO","International Clothiers","","Pen Centre","221 Glendale Avenue","Saint Catharines"," ON","L2T 2K9","905-704-1011"); storeouput_city($array);

$array = array("ONTARIO","International Clothiers","","New Sudbury Centre","1349 Lasalle Blvd.","Sudbury"," ON","P3A 1Z2","705-521-1074"); storeouput_city($array); 

$array = array("ONTARIO","International Clothiers","","Intercity Mall","1000 Fort William Road","Thunder Bay "," ON","P7B 6B9","807-625-5535"); storeouput_city($array);

$array = array("ONTARIO","International Clothiers","","Dufferin Mall","900 Dufferin Street ","Toronto"," ON","M6H 4A9","416-538-6122"); storeouput_city($array); 
$array = array("ONTARIO","International Clothiers","We carry boys wear size 7-16","Gerrard Square","1000 Gerrard Street East","Toronto"," ON","M4M 3G6","416-461-8967"); storeouput($array); 

$array = array("ONTARIO","International Clothiers","","Devonshire Mall","3100 Howard Avenue","Windsor"," ON","N8X 3Y8","519-969-7425"); storeouput_city($array);
$array = array("ONTARIO","International Clothiers","We carry boys wear size 7-16","Tecumseh Mall","7654 Tecumseh Road","Windsor"," ON","N8T 1E9","519-988-1211"); storeouput($array);

$array = array("ONTARIO","International Clothiers","We carry boys wear size 7-16","Piazza Del Sole - Woodbridge","200 Winflower Gate ","Woodbridge"," ON","L4L 1X0","905-265-9834"); storeouput_city($array);
?>
<br /><br />
<hr width="100%" size="1" noshade />


<a name="PEI"></a>
<h1>Prince Edward Island</h1>
<?php 
$array = array("PRINCE EDWARD ISLAND","International Clothiers","","Charlottetown Mall","670 University Ave","Charlottetown"," PEI","C1E 1H6","902-892-3357"); storeouput_city($array);
?>
<br /><br />
<hr width="100%" size="1" noshade />


<a name="Quebec"></a>
<h1>Quebec</h1>
<?php

$array = array("QUEBEC","International Clothiers","","Promanades De L'Outaouais","Unit H3","Gatineau"," QC","J8T 6G3","819-568-7129"); storeouput_city($array);
 
$array = array("QUEBEC","INC COMPAGNIE","","Galeries Joliette","1075 Firestone Blvd","Joliette"," QC","J6E 6X6","450-752-0075"); storeouput_city($array);
 
$array = array("QUEBEC","INC COMPAGNIE","","Carrefour Angrignon","7077 Newman Blvd","Lasalle"," QC","H8N 1X2","514-363-2366"); storeouput_city($array);
  
$array = array("QUEBEC","INC COMPAGNIE","","Centre Laval","1600 Le Corbusier Blvd.","Laval"," QC","H7S 1Y9","450-973-1611"); storeouput_city($array);
 
$array = array("QUEBEC","INC COMPAGNIE","","Place Versailles","7275 Rue Sherbrooke Est","Montreal"," QC","H1N 1E9","514-355-5321"); storeouput_city($array);
$array = array("QUEBEC","Petrocelle","","Place Versailles","7275 Rue Sherbrooke est","Montreal"," QC","H1N 1E9","514-354-9264"); storeouput($array);
 
$array = array("QUEBEC","INC COMPAGNIE","","Fairview Pointe Claire","6801 Autoroute Transcanadienne","Pointe-Claire"," QC","H9R 1C4","514-694-9099"); storeouput_city($array);

$array = array("QUEBEC","INC COMPAGNIE","","Place Laurier","2700 Laurier Blvd","Quebec City"," QC","G1V 4J9","418-652-9009"); storeouput_city($array); 
$array = array("QUEBEC","INC COMPAGNIE","","Promenades Beauport","3333 Rue de Carrefour","Quebec City"," QC","G1C 5R9","418-661-9202"); storeouput($array);
 
$array = array("QUEBEC","INC COMPAGNIE","","Le Boulevard","4280 Jean-Talon Street East","Saint-Leonard"," QC","H1S 1J7","514-725-0973"); storeouput_city($array);
 
$array = array("QUEBEC","INC COMPAGNIE","","Sherbrooke","930-13E Avenue Nord","Sherbrooke"," QC","J1E 3J77","819-348-15677"); storeouput_city($array);

$array = array("QUEBEC","INC COMPAGNIE","","Place Vertu","3131 Cote Vertu","Saint Laurent"," QC","H4R 1Y8","514-333-6624"); storeouput_city($array);
?>


<a name="Saskatchewan"></a>
<h1>Saskatchewan</h1>
<?php
$array = array("SASKATCHEWAN","International Clothiers","","Gateway North Plaza","1403 Central Avenue","Prince Albert"," SK","S6V 7J4","306-922-5490"); storeouput_city($array);

$array = array("SASKATCHEWAN","International Clothiers","","Golden Mile Shopping Centre","3806 Albert Street","Regina"," SK","S4S 3R2","306-949-4776"); storeouput_city($array);

$array = array("SASKATCHEWAN","International Clothiers","","Victoria Square","2223 Victoria Avenue East","Regina"," SK","S4N 6E4","306-584-9439"); storeouput_city($array);
?>
