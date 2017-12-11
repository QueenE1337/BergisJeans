<footer>

	<div id="subFormContainer">
		<h3>Be first - subscribe to our newsletter!</h3>
		<?php
			//Including a widget. In the widget, we include the plugin MailChimp (subscription form). When the user sign up their information, they will be placed in a subscrition list in MailChimp. From there, we can send out mass mails to the subscribed users.
			dynamic_sidebar('subscribe-form'); ?>
	</div>


	<div id="infoContainer">
		<div class="infoBox">

			<h3>Social Media</h3>
			<div id="footerIcons">
				<i class="fa fa-facebook-official" aria-hidden="true"></i>
				<i class="fa fa-instagram" aria-hidden="true"></i>
				<i class="fa fa-youtube-play" aria-hidden="true"></i>
			</div>

		</div>

		<div class="infoBox">
			<h3>Contact</h3>
			<p>info@bergisjeans.se</p>
			<p>0722528052</p>
			<p>www.bergisjeans.se</p>
		</div>
	</div>

</footer>

<p id="copyText"><i>© Copyright Bergis Jeans 2017</i></p>

<?php wp_footer(); ?>


<?php
	/*Code to keep the form from sending the information several times. Borrowed from Ellen Brage.*/
	unset($_POST);
?>


</body>
