<?php 


$i = 0;
$slidetaglines = "";
$slides = "";

foreach($bannerimg as $slide):
	$slides.= $slide.'","';
	$slidetaglines.= $bannertaglines[$i].'","';
	echo "<img src='".$slide."' style='display:none'>";
	$i++;
endforeach;
$slides = substr($slides, 0, -2); 
$slidetaglines = substr($slidetaglines, 0, -2); 
?>
<form id="home-carouselform" style="display:none;">
				<input type="hidden" name="lastslide" id="home-carouselform-prev" value="<?php echo $offset["prev"];?>">
				<input type="hidden" name="offset" id="home-carouselform-offset" value="<?php echo $offset["offset"];?>">
				<input type="hidden" name="nextslide" id="home-carouselform-next" value="<?php echo $offset["next"];?>">
				<input type="hidden" name="numberofslides" id="home-numberofslides" value="<?php echo $offset["nos"];?>">
			</form>
<?php if (sizeof($bannerimg) > 1):?>
<script type="text/javascript">

$(function(){	
		

 
		
				var slides = [<?php echo '"'.$slides;?>];
				var slidetaglines = [<?php echo '"'.$slidetaglines;?>];
						var offset = <?php echo $offset["offset"];?>;
			var nextoffset = <?php echo $offset["next"];?>;
			var prevoffset = <?php echo $offset["prev"];?>; 
			var maxoffset = <?php echo $offset["prev"];?>;
			$("#right").live('click', function(){	
				$("#banner").addClass('clicked');
				if (offset == maxoffset){
					offset = 0;
					nextoffset = 1;
					prevoffset = maxoffset;
				} else {
					offset = offset + 1;
					if(offset < maxoffset){
						nextoffset = offset + 1;
					} else {
					 	nextoffset = 0;
					}
					prevoffset = offset - 1;
				}
				$("#home-carouselform-offset").val(offset);
				$("#home-carouselform-next").val(nextoffset);
				$("#home-carouselform-prev").val(prevoffset);
				
				$("#bannerinnerwrap").hide();
				$("#bannerwrap a").attr("title",slidetaglines[offset]);
				/* $("#home-carousel-main-wrap").attr('href',''+slidelinks[offset]+''); */
				$("#bannerwrap #banner").css('background-image','url('+slides[offset]+')');
				$("#bannerinnerwrap").fadeTo('1000', '1');
				
				
				
			});
			$("#left").live('click', function(){
				$("#banner").addClass('clicked');
				if (offset == 0){
					offset = maxoffset;
					nextoffset = 0;
					prevoffset = maxoffset - 1;
				} else {
					offset = offset - 1;
					if(offset > 0){
						prevoffset = offset - 1;
					} else {
					 	prevoffset = maxoffset;
					}
					nextoffset = offset + 1;
				}
				$("#home-carouselform-offset").val(offset);
				$("#home-carouselform-next").val(nextoffset);
				$("#home-carouselform-prev").val(prevoffset);
				
				$("#bannerinnerwrap").hide();
				$("#bannerwrap a").attr("title",slidetaglines[offset]);
				/* $("#home-carousel-main-wrap").attr('href',''+slidelinks[offset]+''); */
				$("#bannerwrap #banner").css('background-image','url('+slides[offset]+')');
				$("#bannerinnerwrap").fadeTo('1000', '1');
		
			});
			
			var itemData = [1,2,3,4];
			 
			var i = 0;
			function idTimer(list, i) {
			  if (!(i >= 0)) {
			     i= 0;
			  }
			  setTimeout((function(msg){
			    i++;
			    return function(){
			     
			     
			        idTimer(list, i);
			      
			      $(showhidenext);
			    }
			  })(list[i]), 7000);
			}
			idTimer(itemData); 
			function showhidenext(){
				if($("#banner").hasClass("clicked")){
		} else {
			
								if (offset == maxoffset){
					offset = 0;
					nextoffset = 1;
					prevoffset = maxoffset;
				} else {
					offset = offset + 1;
					if(offset < maxoffset){
						nextoffset = offset + 1;
					} else {
					 	nextoffset = 0;
					}
					prevoffset = offset - 1;
				}
				$("#home-carouselform-offset").val(offset);
				$("#home-carouselform-next").val(nextoffset);
				$("#home-carouselform-prev").val(prevoffset);
				
				$("#bannerinnerwrap").hide();
				$("#bannerwrap a").attr("title",slidetaglines[offset]);
				/* $("#home-carousel-main-wrap").attr('href',''+slidelinks[offset]+''); */
				$("#bannerwrap #banner").css('background-image','url('+slides[offset]+')');
				$("#bannerinnerwrap").fadeTo('1000', '1');

							
				
					}
			}
			$("#bannerwrap a").attr("title",slidetaglines[offset]);
			$("#bannerwrap #banner").css('background-image','url('+slides[offset]+')');
});
</script>
<?php endif;?>