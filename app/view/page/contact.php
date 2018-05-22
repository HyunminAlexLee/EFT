
<section id="contact" class="fullscreen">
<a href="/home">Menu<span aria-hidden="true" class="cd-icon"></span></a>
<a href="/aboutMe">about me<span aria-hidden="true" class="cd-icon"></span></a>
<a href="/site">관련사이트<span aria-hidden="true" class="cd-icon"></span></a>
<a href="/home">Menu<span aria-hidden="true" class="cd-icon"></span></a>
	<div class="contact container">
					<header>
						<h2>Say Hello.</h2>
						<p>저에게 문의하실 내용이나 하고싶은 말씀들 메일로 남겨주세요~.</p>
					</header>
					<div class="box container 75%">

					<!-- Contact Form -->
							<form method="post" action="#">
								<div class="row 50%">
									<div class="col-md-12"><input type="text" id="subject" placeholder="Subject" /></div>
									<div class="col-md-12"><input type="text" id="name" placeholder="Name" /></div>
									<div class="col-md-12"><input type="email" id="email" placeholder="Email" /></div>
								</div>
								<div class="row 50%">
									<div class="col-md-12"><textarea id="message" placeholder="Message" rows="6"></textarea></div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<ul class="actions">
											<li><input type="submit" id="submit" value="Send Message" /></li>
										</ul>
									</div>
								</div>
							</form>

					</div>
				</div>
		
</section>

	<script>
	

	$("#submit").click(function(e){
	    e.preventDefault();
	    
	    var allData ={"subject":$("#subject").val(),"name":$("#name").val(),"email":$("#email").val(),"message":$("#message").val()};
	    var url =  "/home/sendMail";
	    //window.open("/worker/ordersHistory");
	    $(function(){
	      $.ajax({
	        url: url,
	        type: 'POST',
	        data: allData,
	        dataType: "json",
	        success: function(oData) {
	          
	        	if(oData.errormsg != null){
	                alert('failed: ' + oData.errormsg);
	            }else{
	            	alert(oData.results);
	            	$("#subject").val('');
	             	$("#name").val('');
	             	$("#email").val('');
	             	$("#message").val('');
	            }
	        }
	      });
	    });
	   
	
});
	</script>
