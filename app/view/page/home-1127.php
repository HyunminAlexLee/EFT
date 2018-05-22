
<script>

			/* jquery.scrolly v0.1 | (c) n33 | n33.co @n33co | MIT */
			(function(e){var t="click.scrolly";e.fn.scrolly=function(r,i){var s=e(this);return r||(r=1e3),i||(i=0),s.off(t).on(t,function(t){var n,s,o,u=e(this),a=u.attr("href");a.charAt(0)=="#"&&a.length>1&&(n=e(a)).length>0&&(s=n.offset().top,u.hasClass("scrolly-centered")?o=s-(e(window).height()-n.outerHeight())/2:(o=Math.max(s,0),i&&(typeof i=="function"?o-=i():o-=i)),t.preventDefault(),e("body,html").stop().animate({scrollTop:o},r,"swing"))}),s}})(jQuery);

			$(function() {

				$('.item').scrollex({

					// Scroll event: Perform various CSS tweaks based on the user's progress through this element.
						scroll: function(progress) {

							var $this = $(this),
								$container = $this.find('.container'),
								$title = $this.find('.title'),
								$p = $this.find('p'),
								$next = $this.find('.next'),
								$more = $this.find('.more'),
								$start = $this.find('.start'),
								x;

							// Title.

								// Rotation.
									x = (progress - 0.5) * 200;//540;

									$title
										.css('-moz-transform', 'rotateX(' + x + 'deg)')
										.css('-webkit-transform', 'rotateX(' + x + 'deg)')
										.css('-o-transform', 'rotateX(' + x + 'deg)')
										.css('-ms-transform', 'rotateX(' + x + 'deg)')
										.css('transform', 'rotateX(' + x + 'deg)');

								// Opacity.
									if (progress > 0.5)
										x = 1 - progress;
									else
										x = progress;

									x = Math.max(0, Math.min(1, x * 2));

									$title.css('opacity', x);

							// Paragraph.

								// Opacity.
									if (progress > 0.5)
										x = 1 - progress;
									else
										x = progress;

									x = Math.max(0, Math.min(1, x * 2));

									$p.css('opacity', x);

							// Next.

								// Opacity.
									x = 1 - (Math.max(0, progress - 0.5) * 1.5);

									$next.css('opacity', x)

								// Scale.
									x = 1 - (Math.max(0, progress - 0.5));

									$next
										.css('-moz-transform', 'scale(' + x + ')')
										.css('-webkit-transform', 'scale(' + x + ')')
										.css('-o-transform', 'scale(' + x + ')')
										.css('-ms-transform', 'scale(' + x + ')')
										.css('transform', 'scale(' + x + ')');							

								// Scrolly.
									$next.scrolly(1000);
							// More.

								// Opacity.
									x = 1 - (Math.max(0, progress - 0.5) * 1.5);

									$more.css('opacity', x)

								// Scale.
									x = 1 - (Math.max(0, progress - 0.5));

									$more
											.css('-moz-transform', 'scale(' + x + ')')
											.css('-webkit-transform', 'scale(' + x + ')')
											.css('-o-transform', 'scale(' + x + ')')
											.css('-ms-transform', 'scale(' + x + ')')
											.css('transform', 'scale(' + x + ')');							

								// Scrolly.
									$more.scrolly(1000);
										
							// Start.

								// Opacity.
									x = 1 - (Math.max(0, progress - 0.5) * 1.5);

									$start.css('opacity', x)

								// Scale.
									x = 1 - (Math.max(0, progress - 0.5));

									$start
											.css('-moz-transform', 'scale(' + x + ')')
											.css('-webkit-transform', 'scale(' + x + ')')
											.css('-o-transform', 'scale(' + x + ')')
											.css('-ms-transform', 'scale(' + x + ')')
											.css('transform', 'scale(' + x + ')');							

								// Scrolly.
									$start.scrolly(1000);
						}

				});

			});

		</script>


<style>

/*
			 * If developing a full page background the styles from .video-background will be required.
			 * The classname itself is unimportant.
			 *
			 */
.video-background {
	position: absolute;
	top: 0;	
	left: 0;
	overflow: hidden;
	width: 100%;
	z-index: 0;	
}

.video-background video {
	min-width: 100%;
}

#page {
	position: relative;
	z-index: 1;
	width: 100%;
	color: #FFF;
	background: transparent url(themes/background.png) repeat top left;
	border-radius: 5px;
	margin: 0 auto;
	margin-bottom: 100;
}


</style>

<!-- Header -->
<header class="item" id="header">

	<div class="container">

		<h1 class="title1">EFT</h1>
		<p>Emotional Freedom Techniques.</p>
	</div>
	<a href="#one" class="start">Start</a>
</header>

<!-- Items -->

<section class="item" id="two">
	<div class="container">
		<h2 class="title">EFT란 ?</h2>
		<p>EFT는 고통과 질병, 감정적인 어려움을 없애주는 새로운 발견이다. 간단하게 말하자면, 침을 사용하지 않는 독특한
			침술이라 할 수 있다. 대신 몸의 경락과 경혈을 손가락으로 두드려 자극한다. 이 과정은 기억하기 쉽고 어느 곳에서나 쉽게 할
			수 있다. EFT 발견에 대해 다음과 같이 이야기한다.more</p>
	</div>
	<a href="#three" class="start">Next</a>
</section>

<section class="item" id="three">
	<div class="container">
		<h2 class="title">EFT Video</h2>
		<div>The MetaPhysical Secret - Law Of Attraction</div>
		<div id="page">
			<div id="page-group">
				<div id="header" class="header" role="banner"></div>
				<div id="content">
					<div id="main" role="main"></div>
					<div id="aside" class="aside" role="complementary"></div>
				</div>
			</div>
			<div id="footer" class="footer" role="contentinfo"></div>
		</div>
	</div>

	<a href="#four" class="more">More</a><a href="#four" class="next">Next</a>
</section>

<section class="item" id="four">
	<div class="container">
		<h2 class="title">Say Hello.</h2>
		<p>If you have a question, send email to me</p>
		<div class="box container 75%">
			<!-- Contact Form -->

			<div class="row 50%">
				<div class="6u 12u(mobile)">
					<input type="text" id="subject" placeholder="Subject" />
				</div>
				<div class="6u 12u(mobile)">
					<input type="text" id="name" placeholder="Name" />
				</div>
				<div class="6u 12u(mobile)">
					<input type="email" id="email" placeholder="Email" />
				</div>
			</div>
			<div class="row 50%">
				<div class="6u 12u(mobile)">&nbsp;</div>
				<div class="12u">
					<textarea id="message" placeholder="Message" rows="6"></textarea>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="12u">
					<ul class="actions">
						<li><input type="submit" id="submit" value="Send Message" /></li>
					</ul>
				</div>
			</div>

		</div>

	</div>


	<a href="#header" class="start">Top</a>
	
	<a href="home/submenu" >sadasfasfasdfsfd</a>
</section>

<script>
$(document).on('click','#submit', function(e){
    e.preventDefault();

    var allData ={"subject":$("#subject").val(),"name":$("#name").val(),"email":$("#email").val(),"message":$("#message").val()};
    var url =  "home/sendMail";
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
           
             
            }
        }
      });
    });
   
});


$(document).ready(function() {
	
	
	$('#three').prepend('<div class="video-background"></div>');
	$('.video-background').videobackground({
		videoSource: [['images/video/TheMetaPhysicalSecret.mp4', 'video/mp4'],
			['images/video/big-buck-bunny.webm', 'video/webm'], 
			['images/video/big-buck-bunny.ogv', 'video/ogg']], 
		controlPosition: '#main',
		poster: 'images/video/big-buck-bunny.jpg',
		loadedCallback: function() {
			$(this).videobackground('mute');
		}
	});
});

</script>
