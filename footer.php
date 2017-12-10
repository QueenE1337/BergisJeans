<footer>


	<div id="infoLeft">

		<h3>Social Media:</h3> <br>
		<div id="footerIcons">
			<i class="fa fa-facebook-official" aria-hidden="true"></i>
			<i class="fa fa-instagram" aria-hidden="true"></i>
			<i class="fa fa-youtube-play" aria-hidden="true"></i>
		</div>

	</div>

	<div id="infoCenter">
		<h3>Subscribe to our newsletter:</h3> <br>
		<?php
			//Including a widget. In the widget, we include the plugin MailChimp (subscription form). When the user sign up their information, they will be placed in a subscrition list in MailChimp. From there, we can send out mass mails to the subscribed users.
			dynamic_sidebar('subscribe-form');
		?>
	</div>

	<div id="infoRight">
		<?php dynamic_sidebar('footer-contact'); ?>
	</div>


	<p id="copyText"><i>© Copyright Bergis Jeans 2017</i></p>

</footer>

<?php wp_footer(); ?>


<?php
	/*Code to keep the form from sending the information several times. Borrowed from Ellen Brage.*/
	unset($_POST);
?>


</body>
