<footer>


	<div id="infoLeft">
		<?php dynamic_sidebar('footer-socialmedia'); ?>
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
