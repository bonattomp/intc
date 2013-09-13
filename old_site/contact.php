<?php 
$pagetemplate = "contact";
$pagetitle = "Contact";
$pagemetadesc = "International Clothiers is Canada's premiere destination for men's, young men's and boys fashions. Offering quality designer menswear since 1986, our fashions are exclusively designed to offer style, quality and value for your money. From business to casual from formal wear to weekend wear, International Clothiers can dress you right for any occasion at unbeatable prices. Store locations across Canada.";
$pagemetakeywords = "menswear, suits, mens clothing, boys clothing, young mens suits, Canadian menswear stores, mens sportswear sale, suit sale, clothing sale";
$bannerimg = array("2011images/collection1.jpg","2011images/collection2.jpg", "2011images/collection3.jpg", "2011images/collection4.jpg");
$bannertaglines = array('Cigliano',"Vroom & Dressmann",'Mecca Clothing Company','Faux Leather Jackets from $29.99');


include('header.php');?>
				<div class="contact">
				
						<div id="bannerwrap">
						
					<div id="bannerinnerwrap" style="display: block; opacity: 1;">
						
							<div style="background-repeat:no-repeat;" class="" id="banner">
							<div class="content">
							 <h3>Contact Us</h3>
<div class="postdata">
									<div style="display:none" id="ajaxloader"><img src="2011images/contact-redblackpreloader.gif"></div>
								
								 	<form method="post" id="searchform">
								 		<div style="display:none" id="error"></div>
								 		<div class="top clear">
								 			<div class="fieldwrap">
								 			<h4>Name</h4>
								 			<input type="text" class="text" name="c_name">
								 			</div><div class="fieldwrap">
								 			<h4>Email</h4>
								 			<input type="text" class="text" name="c_email">
											</div><div class="fieldwrap">
											<h4>Message</h4>
								 			<textarea rows="3" class="text messagebox" name="c_message"></textarea>
											</div>
								 		</div>
								 			<div id="result"></div>
								 		<div class="bottom">
								 			<input type="image" id="send" src="2011images/send-butwhite.gif" value="send">
								 			<!-- <input type="submit" value="Search" /> -->

								 		</div>
								 		
								 	</form>
								 	
								 	<script>
								 	

  /* attach a submit handler to the form */
  $('#send').click(function() {
  	/* $('#searchform').submit(); */
  	name = $("#searchform").find( 'input[name="c_name"]' ).val();
  	email = $("#searchform").find( 'input[name="c_email"]' ).val();
  	message = $("#searchform").find( '.messagebox' ).val();
  	var emailat = email.split("@"); 
  	var emaildomaindot = emailat[1]; 
  	//alert(email + " " + emaildomaindot);
  /* 	var emaildomaindot = emailat.split("."); */
  /*
	
  	var myError2 = emaildomaindot[emaildomaindot.length-1]; 
  
*/
  	if (name != "" && email != "" && message != "" && email.indexOf( "@" ) !== -1 && emaildomaindot.indexOf( "." ) !== -1){
  		$("#ajaxloader").fadeIn('fast');
  		$("#searchform .top").fadeOut('fast');
  		$("#searchform .bottom").fadeOut('fast');
  		$("#error").html("");
  		$.post("2011includes/send.php", $("#searchform").serialize(), function(data) {
  		 $("#ajaxloader").hide();
 		  $("#error").html(data);
 		   		  $("#error").fadeIn();
 		  
 		 
 		});
 	} else {
 		$("#error").html("Please complete all fields");
 		$("#error").fadeIn();
 	}
  });
  $("#searchform").submit(function(event) {

    /* stop form from submitting normally */
    event.preventDefault(); 
        
    
  });
</script>
							 	</div>
</div>

<!-- /Content -->

							</div>
					
							
				</div>
				</div>
				</div>
<?php include('footer.php');?>