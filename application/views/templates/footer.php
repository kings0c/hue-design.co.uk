<!--JQuery-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!--Fallback to local copy-->
<script>window.jQuery || document.write('<script src="<?php echo $baseurl; ?>js/jquery-1.9.1.min.js"><\/script>')</script>

<!--reCAPTCHA library -->
<script type="text/javascript" src="https://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>

<!--Animation plugin-->
<script type="text/javascript" src="<?php echo $baseurl; ?>js/greensock/TweenMax.min.js"></script>
<script src="<?php echo $baseurl; ?>js/jquery.superscrollorama.js"></script>

<!--FancyBox-->
<script type="text/javascript" src="<?php echo $baseurl; ?>js/jquery.fancybox.pack.js?v=2.1.5"></script>

<!-- IE background-size -->
<script type="text/javascript" src="<?php echo $baseurl; ?>js/jquery.backgroundSize.js"></script>
<script type="text/javascript">
	$(function() {
		$('#section1').css({backgroundSize: "cover"});
	});
</script>

<script type="text/javascript" src="<?php echo $baseurl; ?>js/skrollr.js"></script>

<!--Butter Scroll-->
<!--<script type="text/javascript" src="<?php echo $baseurl; ?>js/butterScroll/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="<?php echo $baseurl; ?>js/butterScroll/jquery.smartresize.js"></script>
<script type="text/javascript" src="<?php echo $baseurl; ?>js/butterScroll/jquery.butterScroll.js"></script>-->

<!-- Document Ready scripts -->
<script type="text/javascript" src="<?php echo $baseurl; ?>js/ready.js"></script>

<!--Modal -->
<script type="text/javascript" src="<?php echo $baseurl; ?>js/jquery-modal-master/jquery.modal.min.js"></script>

<!--reCAPTCHA init -->
<script type="text/javascript">

	$(document).ready(function() {
		$('#contact-form #submit-form').click(function() {
			$('#captcha-form').modal();
			$('#captcha-form').show();

			$('#captcha-form').append("<input type='hidden' name='name' value='" + $('#contact-form #name').val() + "'>");
			$('#captcha-form').append("<input type='hidden' name='phone' value='" + $('#contact-form #phone').val() + "'>");
			$('#captcha-form').append("<input type='hidden' name='email' value='" + $('#contact-form #email').val() + "'>");
			$('#captcha-form').append("<input type='hidden' name='message' value='" + $('#contact-form #message').val() + "'>");

			$('#captcha-form').append("<input id='captcha-submit' type='submit' name='submit' value='Submit'>");

			Recaptcha.create("6LeHrv0SAAAAAIhm0g-pOgf-qDfF_z5c5NfZg0Y5",
			"recaptcha",
			{
			  theme: "red",
			  callback: Recaptcha.focus_response_field
			});

			return false;

		});

		$('#captcha-form').submit(function() {
			$('#captcha-form').append("<input type='hidden' name='recaptcha_challenge_field' value='" + Recaptcha.get_challenge() + "'>");
			$('#captcha-form').append("<input type='hidden' name='recaptcha_response_field' value='" + Recaptcha.get_response() + "'>");
		});
		
		<?php if( isset($_GET['contact']) ) {
			if ($_GET['contact'] == "1") {
				echo "alert('Thank you for your enquiry. We\'ll be in touch as soon as we can.');";
			}
		}
		?>
	});
</script>

<!--Canvas animation-->
<!--<script type="text/javascript" src="<?php echo $baseurl; ?>js/canvas.js"></script>-->

</body>
</html>
