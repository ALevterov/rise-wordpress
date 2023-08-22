<?php
/*
Template Name: Cancel Page.
*/
?>
<?php
	$instagram = CFS()->get('instagram', 8);
	$facebook = CFS()->get('facebook', 8);
	$email = CFS()->get('email', 8);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cancel Payment</title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/fonts/fonts.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/stripe-pages/stripe.css">
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
			<h1 class="title">Cancel!</h1>
			<div class="central_block">
				<img src="<?php bloginfo('template_url'); ?>/assets/stripe-pages/cancel.svg" alt="success icon">
				<div class="text">An error occurred during the payment process. Try to make the payment again or email us</div>
				<div class="email"><?=$email?></div>
				<div class="text">You can also contact us on social networks</div>
				<div class="social">
					<a
						class="header__social_item"
						href="<?=$instagram?>"
						target="_blank"
					>
						<svg
							width="28"
							height="29"
							viewBox="0 0 28 29"
							fill="none"
							xmlns="http://www.w3.org/2000/svg"
						>
							<path
								fill-rule="evenodd"
								clip-rule="evenodd"
								d="M9.03817 0.0806423C7.14809 0.148043 6.18092 0.287527 5.20121 0.633807C2.76815 1.49376 1.06787 3.40908 0.431871 6.00636C0.0333389 7.63414 0 8.28783 0 14.4741C0 20.6645 0.0374317 21.4036 0.433491 23.0314C1.09336 25.7433 3.00698 27.7813 5.58141 28.5142C7.18842 28.9716 7.76942 29.0059 13.8131 28.9993C20.5386 28.992 21.4796 28.9171 23.1278 28.2576C24.1686 27.8411 24.838 27.3891 25.6224 26.5731C26.7224 25.4288 27.3594 24.1065 27.7133 22.2327C27.9749 20.8479 28.0831 14.6058 27.9291 9.7922C27.8734 8.054 27.8149 7.32938 27.6729 6.61889C27.3059 4.78192 26.72 3.59344 25.6228 2.46026C24.5301 1.33176 23.3135 0.6846 21.6172 0.329398C20.1798 0.0283469 13.9545 -0.0947061 9.03817 0.0806423ZM22.1938 5.19013C22.856 5.54188 23.185 6.13542 23.1327 6.88407C23.0265 8.40408 21.3289 9.05892 20.2887 7.98112C19.4195 7.08071 19.7169 5.591 20.8605 5.11628C21.2027 4.97423 21.8557 5.01045 22.1938 5.19013ZM15.2151 7.14749C15.9033 7.26312 17.1017 7.72513 17.7409 8.12114C18.4537 8.56282 19.4842 9.60272 19.9863 10.3872C22.6932 14.6159 20.6193 20.3421 15.8793 21.7276C14.9573 21.9972 13.1004 22.0197 12.2358 21.7719C10.9264 21.3966 9.81759 20.7348 8.90627 19.7847C7.58243 18.4043 6.90517 16.8201 6.80515 14.8698C6.72065 13.2228 7.10588 11.7781 8.00117 10.3841C9.05753 8.73932 10.7366 7.56532 12.5767 7.18495C13.265 7.04264 14.4883 7.02532 15.2151 7.14749ZM12.8418 9.84353C10.8528 10.3978 9.48241 12.1332 9.35988 14.2532C9.22729 16.547 10.7567 18.6669 12.9266 19.1968C15.1962 19.751 17.5454 18.4394 18.3558 16.1653C18.6372 15.3757 18.7037 14.2036 18.512 13.414C18.0804 11.6371 16.7882 10.2846 15.0955 9.83796C14.4652 9.67163 13.4497 9.67419 12.8418 9.84353Z"
								fill="white"
							/>
						</svg>
					</a>
					<a
						class="header__social_item"
						href="<?=$facebook?>"
						target="_blank"
					>
						<svg
							width="29"
							height="29"
							viewBox="0 0 29 29"
							fill="none"
							xmlns="http://www.w3.org/2000/svg"
						>
							<path
								fill-rule="evenodd"
								clip-rule="evenodd"
								d="M13.031 0.0447207C7.12513 0.668117 2.16304 4.79844 0.53268 10.448C0.101439 11.9422 -0.00136485 12.7226 1.36148e-05 14.4915C0.00139208 16.2611 0.106373 17.0576 0.53268 18.535C2.02584 23.7089 6.33956 27.6597 11.6493 28.7162C15.7395 29.53 19.8955 28.5789 23.287 26.0528C24.1062 25.4426 25.4659 24.0864 26.0742 23.2727C27.6025 21.2285 28.5476 18.9528 28.9092 16.4466C29.0295 15.6122 29.0305 13.3805 28.9108 12.5363C28.1848 7.41599 24.8513 3.08755 20.1053 1.10295C19.1377 0.698313 18.004 0.370431 16.9269 0.183535C15.9727 0.0180006 13.9625 -0.053615 13.031 0.0447207ZM19.3392 4.72588L19.6112 4.77099V6.35457V7.93816L18.4323 7.93859C17.0945 7.93902 16.7762 8.00166 16.448 8.32918C16.1123 8.66423 16.0571 8.96909 16.0567 10.4907L16.0563 11.8484H17.8039H19.5515L19.5084 12.12C19.4399 12.5527 19.1034 15.1952 19.1034 15.3008C19.1034 15.3772 18.795 15.3966 17.5798 15.3966H16.0563V19.8862V24.3757H14.2062H12.3562V19.8862V15.3966H10.8689H9.3816V13.6225V11.8484H10.8601H12.3385L12.3753 10.0562C12.4071 8.50934 12.4334 8.19138 12.5674 7.7333C13.0715 6.01004 14.2577 4.95629 16.0113 4.6741C16.4042 4.61096 18.8778 4.64941 19.3392 4.72588Z"
								fill="white"
							/>
						</svg>
					</a>
				</div>
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