<?php
/*
Template Name: Success Page.
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Success Payment</title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/fonts/fonts.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/stripe-pages/stripe.css">
	<link rel="icon" href="">
	<?php wp_head(); ?>
</head>
<body>
		<div class="page">
			<div class="wrapper">
			<img class="palm" src="<?php bloginfo('template_url'); ?>/assets/stripe-pages/palm.png" alt="palm">
			<img class="palm-mobile" src="<?php bloginfo('template_url'); ?>/assets/stripe-pages/palm-mobile.png" alt="palm">
			<img class="ellipse" src="<?php bloginfo('template_url'); ?>/assets/stripe-pages/Ellipse.png" alt="ellispe">
			<a href="https://rise-conference.com" class="return_link">
				Back to the site
			</a>
			<img
          src="<?php bloginfo('template_url'); ?>/assets/stripe-pages/logo.svg"
          alt="logo"
          class="logo-mobile"
      />
			<h1 class="title">Success!</h1>
			<div class="central_block">
				<img src="<?php bloginfo('template_url'); ?>/assets/stripe-pages/success.svg" alt="success icon">
				<div class="text">Your payment has passed. Thanks for the purchase.</div>
			</div>
			<div class="bottom_block">
			<img
          src="<?php bloginfo('template_url'); ?>/assets/stripe-pages/logo.svg"
          alt="logo"
          class="logo"
        />
				<a href="https://rise-conference.com" class="return_link-mobile">
					Back to the site
				</a>
			</div>
			</div>
		</div>
</body>
</html>