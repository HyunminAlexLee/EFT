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
									x = (progress - 0.5) * 540;

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


		<div id="main">

			<!-- Header -->
				<header class="item" id="header">
					<div class="container">
						<h1 class="title">EFT</h1>
						<p>Emotional Freedom Techniques.</p>
					</div>
					<a href="#one" class="start">Start</a>
				</header>

			<!-- Items -->
				<section class="item" id="one">
					<div class="container">
						<h2 class="title">Who am I?</h2>
						<p>Amet vis lobortis vis blandit adipiscing varius accumsan orci lorem. Metus pellentesque amet faucibus lobortis Arcu donec vitae. Eleifend aliquam lobortis interdum id accumsan metus arcu suscipit enim id varius phasellus.</p>
					</div>
					<a href="#two" class="start">Next</a>
				</section>

				<section class="item" id="two">
					<div class="container">
						<h2 class="title">EFT란 ?</h2>
						<p>EFT는 고통과 질병, 감정적인 어려움을 없애주는 새로운 발견이다. 간단하게 말하자면, 침을 사용하지 않는 독특한 침술이라 할 수 있다. 대신 몸의 경락과 경혈을 손가락으로 두드려 자극한다. 이 과정은 기억하기 쉽고 어느 곳에서나 쉽게 할 수 있다. EFT 발견에 대해 다음과 같이 이야기한다.</p>
					</div>
					<a href="#three" class="start">Next</a>
				</section>

				<section class="item" id="three">
					<div class="container">
						<h2 class="title">EFT Video</h2>
						<div>The MetaPhysical Secret - Law Of Attraction</div>
						<iframe width="854" height="480" src="https://www.youtube.com/embed/-ioKU6Jue_k" frameborder="0" allowfullscreen></iframe>
					</div>
					<a href="#four" class="more">More</a><a href="#four" class="next">Next</a>
				</section>

				<section class="item" id="four">
					<div class="container">
						<h2 class="title">Say Hello.</h2>
						<p>If you have a question, send email to me</p>
					<div class="box container 75%">
					<!-- Contact Form -->
							<form method="post" action="#">
								<div class="row 50%">
									<div class="6u 12u(mobile)"><input type="text" name="name" placeholder="Name" /></div>
									<div class="6u 12u(mobile)"><input type="email" name="email" placeholder="Email" /></div>
								</div>
								<div class="row 50%">
									<div class="12u"><textarea name="message" placeholder="Message" rows="6"></textarea></div>
								</div>
								<br/>
								<div class="row">
									<div class="12u">
										<ul class="actions">
											<li><input type="submit" value="Send Message" /></li>
										</ul>
									</div>
								</div>
							</form>					
					</div>
					
					</div>
					
					
					<a href="#header" class="start">Top</a>
				</section>

	