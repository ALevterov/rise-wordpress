<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rise</title>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/fonts/fonts.css">
		<script src="<?php bloginfo('template_url'); ?>/stripe.js" defer></script>
    <?php wp_head(); ?>
  </head>
	<?php
	$instagram = CFS()->get('instagram');
	$facebook = CFS()->get('facebook');
	$email = CFS()->get('email');
	$city = CFS()->get('city');
	$state = CFS()->get('state');
	$year = CFS()->get('year');
	$month = CFS()->get('month');
	$days = CFS()->get('days');
	$map = CFS()->get('map');
	$where_location = CFS()->get('where_location');

	$why_animated_photos = CFS()->get('why_animated_photos'); 
	$why_carousel = CFS()->get('why_rise_photos_carousel'); 

	$review_carousel = CFS()->get('review_carousel_photos');

	$video1 = CFS()->get('video_1'); 
	$video2 = CFS()->get('video_2'); 

	$speakers = CFS()->get('speakers');

	$program_days = CFS()->get('program_days');

	$ticket_vip_services = CFS()->get('ticket_vip_services');
	$ticket_vip_price = CFS()->get('ticket_vip_price');
	$is_ticket_vip_special = CFS()->get('is_ticket_vip_special');
	$ticket_vip_special_price = CFS()->get('ticket_vip_special_price');
	


	$ticket_standart_services = CFS()->get('ticket_standart_services');
	$ticket_standart_price = CFS()->get('ticket_standart_price');
	$is_ticket_standart_special = CFS()->get('is_ticket_standart_special');
	$ticket_standart_special_price = CFS()->get('ticket_standart_special_price');

	$where_images = CFS()->get('where_images');
	$where_section_bg = CFS()->get('where_section_bg');
	$where_logo = CFS()->get('where_logo');

	$sponsors = CFS()->get('sponsors');

?>
  <body>
    <header class="header" id="header">
      <div class="header__logo">
        <img
          src="<?php bloginfo('template_url'); ?>/assets/images/first-section/logo.svg"
          alt="logo"
          class="header__logo_img"
        />
      </div>
      <nav class="header__nav">
        <ul class="header__nav_list">
          <li class="header__nav_elem">
            <a class="header__nav_link" href="#why">Why RISE</a>
          </li>
          <li class="header__nav_elem">
            <a class="header__nav_link" href="#how">How it was</a>
          </li>
          <li class="header__nav_elem">
            <a class="header__nav_link" href="#speakers">Speakers</a>
          </li>
          <li class="header__nav_elem">
            <a class="header__nav_link" href="#program">Program</a>
          </li>
          <li class="header__nav_elem">
            <a class="header__nav_link" href="#tickets">Tickets</a>
          </li>
          <li class="header__nav_elem">
            <a class="header__nav_link" href="#where">Where</a>
          </li>
          <li class="header__nav_elem">
            <a class="header__nav_link" href="#sponsors">Sponsors</a>
          </li>
        </ul>
      </nav>
      <div class="header__get_ticket">
        <a class="get_ticket_btn" href="#tickets">GET TICKET</a>
      </div>
      <div class="header__social">
        <a
          class="header__social_item"
          href="<?= $instagram?>"
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
          href="<?= $facebook?>"
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
      <img class="header_burger" id="header_burger" src="<?php bloginfo('template_url'); ?>/assets/images/first-section/burger.svg"></img>
    </header>


		<div class="mobile_menu" id="mobile_menu">
			<div class="mobile_menu_content">
				<div class="mobile_menu_blue_circle"></div>
				<div class="mobile_menu_pink_circle"></div>
				<header class="header">
					<div class="header__logo">
						<img
							src="<?php bloginfo('template_url'); ?>/assets/images/first-section/logo.svg"
							alt="logo"
							class="header__logo_img"
						/>
					</div>
					<div class="header__social">
						<a
							class="header__social_item"
							href="<?= $instagram?>"
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
							href="<?= $facebook?>"
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
					<img class="header_burger mobile_menu_close"src="<?php bloginfo('template_url'); ?>/assets/images/first-section/burger.svg"></img>
				</header>
				<div class="mobile_menu_close_btn mobile_menu_close"><img src="<?php bloginfo('template_url'); ?>/assets/images/close.svg" alt="close"></div>
				<h1 class="mobile_menu_title">menu</h1>
				<nav class="mobile_menu_nav">
					<ul class="mobile__nav_list">
						<li class="mobile__nav_elem mobile_menu_close" data-href="why" >
							<a class="mobile__nav_link" href="#why">Why RISE</a>
						</li>
						<li class="mobile__nav_elem mobile_menu_close" data-href="how">
							<a class="mobile__nav_link" href="#how">How it was</a>
						</li>
						<li class="mobile__nav_elem mobile_menu_close" data-href="speakers">
							<a class="mobile__nav_link" href="#speakers">Speakers</a>
						</li>
						<li class="mobile__nav_elem mobile_menu_close" data-href="program">
							<a class="mobile__nav_link" href="#program">Program</a>
						</li>
						<li class="mobile__nav_elem mobile_menu_close" data-href="tickets">
							<a class="mobile__nav_link" href="#tickets">Tickets</a>
						</li>
						<li class="mobile__nav_elem mobile_menu_close" data-href="where">
							<a class="mobile__nav_link" href="#where">Where</a>
						</li>
						<li class="mobile__nav_elem mobile_menu_close" data-href="sponsors">
							<a class="mobile__nav_link" href="#sponsors">Sponsors</a>
						</li>
					</ul>
				</nav>
				<a class="get_ticket_big_btn mobile_menu_close" href="#tickets" data-href="tickets">
					GET TICKET
					<svg
						width="39"
						height="41"
						viewBox="0 0 39 41"
						fill="none"
						xmlns="http://www.w3.org/2000/svg"
					>
						<path
							d="M17.3499 38.8427H37.1885V18.6831M36.898 38.13L1.18851 1.84271"
							stroke="#FDE82B"
							stroke-width="2.54904"
						/>
					</svg>
</a>
			</div>
		</div>

		<div class="popup_images" id="popup_images">
			<div class="popup_images_content">
				<svg class="popup_images_close" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1 1L16.8771 17M17 1L1.12291 17" stroke="white" stroke-width="2" stroke-linecap="round"/>
					</svg>
					
				<div class="images_carousel_wrapper">
						<svg class="images_carousel_btn_prev" width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M0.461098 6.5389C0.163469 6.24128 0.163469 5.75873 0.461098 5.4611L5.31122 0.610978C5.60885 0.313351 6.09139 0.31335 6.38902 0.610978C6.68665 0.908605 6.68665 1.39115 6.38902 1.68878L2.0778 6L6.38902 10.3112C6.68665 10.6088 6.68665 11.0914 6.38902 11.389C6.0914 11.6867 5.60885 11.6867 5.31122 11.389L0.461098 6.5389ZM20 6.76212L1 6.76212L1 5.23788L20 5.23788L20 6.76212Z" fill="white"/>
						</svg>
						<svg class="images_carousel_btn_next" width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M19.5389 6.5389C19.8365 6.24128 19.8365 5.75873 19.5389 5.4611L14.6888 0.610978C14.3912 0.313351 13.9086 0.31335 13.611 0.610978C13.3133 0.908605 13.3133 1.39115 13.611 1.68878L17.9222 6L13.611 10.3112C13.3133 10.6088 13.3133 11.0914 13.611 11.389C13.9086 11.6867 14.3912 11.6867 14.6888 11.389L19.5389 6.5389ZM-6.66269e-08 6.76212L19 6.76212L19 5.23788L6.66269e-08 5.23788L-6.66269e-08 6.76212Z" fill="white"/>
						</svg>
					<div class="owl-carousel owl-theme images_carousel" id="images-carousel">
						<?php
							foreach($where_images as $image) {
						?>
						<img class="images_carousel_item" src="<?=$image['where_image_big']?>" alt="image" />
						<?php
							}
						?>
					</div>
				</div>
			</div>
		</div>

    <section
      id="first"
      class="section_first"
      style="
        background-image: url('<?php bloginfo('template_url'); ?>/assets/images/first-section/first-background.webp');
      "
    >
      <div class="container section_first__container">
        <div class="section_first__content">
          <div class="section_first__content_top">
            <div class="content_top_wrapper">
              <div class="content_top_wrapper_item"><?=$city?></div>
              <div class="content_top_wrapper_item"><?=$state?></div>
              <div class="content_top_wrapper_item"><?=$days?> <?=$month?>, <?=$year?></div>
            </div>
          </div>
          <div class="section_first__content_middle">
            <h1 class="section_first_main_title">RISE</h1>
            <span class="section_first_subscription"
              >AMAZON SELLERS CONFERENCE</span
            >
          </div>
        </div>
      </div>
      <div class="section_first__bottom">
        <div class="section_first__content_bottom">
          <a class="get_ticket_big_btn" href="#tickets">
            GET TICKET
            <svg
              width="39"
              height="41"
              viewBox="0 0 39 41"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M17.3499 38.8427H37.1885V18.6831M36.898 38.13L1.18851 1.84271"
                stroke="#FDE82B"
                stroke-width="2.54904"
              />
            </svg>
						</a>
        </div>
        <div class="running_string__container">
          <div class="running_string__wrapper">
            <div class="running_string__inner">
              <div class="running_string__item">where people rise</div>
              <div class="running_string__item">knowledge</div>
              <div class="running_string__item">insights</div>
              <div class="running_string__item">networking</div>
              <div class="running_string__item">where people rise</div>
              <div class="running_string__item">knowledge</div>
              <div class="running_string__item">insights</div>
              <div class="running_string__item">networking</div>
              <div class="running_string__item">where people rise</div>
              <div class="running_string__item">knowledge</div>
              <div class="running_string__item">insights</div>
              <div class="running_string__item">networking</div>
              <div class="running_string__item">where people rise</div>
              <div class="running_string__item">knowledge</div>
              <div class="running_string__item">insights</div>
              <div class="running_string__item">networking</div>
            </div>
            <div class="running_string__inner_clone">
              <div class="running_string__item">where people rise</div>
              <div class="running_string__item">knowledge</div>
              <div class="running_string__item">insights</div>
              <div class="running_string__item">networking</div>
              <div class="running_string__item">where people rise</div>
              <div class="running_string__item">knowledge</div>
              <div class="running_string__item">insights</div>
              <div class="running_string__item">networking</div>
              <div class="running_string__item">where people rise</div>
              <div class="running_string__item">knowledge</div>
              <div class="running_string__item">insights</div>
              <div class="running_string__item">networking</div>
              <div class="running_string__item">where people rise</div>
              <div class="running_string__item">knowledge</div>
              <div class="running_string__item">insights</div>
              <div class="running_string__item">networking</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="why" class="section_why">
      <img
        class="section_why__ellipse_left"
        src="<?php bloginfo('template_url'); ?>/assets/images/why-section/ellipse-left.webp"
        alt="ellipse"
      />
      <img
        class="section_why__ellipse_right"
        src="<?php bloginfo('template_url'); ?>/assets/images/why-section/ellipse-right.webp"
        alt="ellipse"
      />
      <img
        class="section_why_ellipse_blue"
        src="<?php bloginfo('template_url'); ?>/assets/images/why-section/ellipse-right.png"
        alt="ellipse"
      />
			<img
			class="section_why_mobile_palm"
			src="<?php bloginfo('template_url'); ?>/assets/images/why-section/palm-mobile.png"
			alt="palm"
			/>
      <h3 class="section_why_title">Why RISE</h3>
      <div class="section_why_cases_wrapper">
        <div class="section_why_cases_container">
          <div class="section_why_cases_text">
            <h3 class="section_why_cases_text_title">
              Stay Ahead of the Curve:
            </h3>
            <div class="section_why_cases_text_text">
              In today's fast-paced world, businesses face constant disruption.
              At RISE, we bring you the latest insights, trends, and tactics
              that will keep you ahead of the game. Don't wait for opportunities
              to pass you by – seize them with confidence, armed with insider
              secrets that only a select few possess.
            </div>
          </div>
          <div class="section_why_cases_image_container">
            <img
              class="dynamic_images"
              src="<?=$why_animated_photos[0]['photo']?>"
              alt="img"
              class="section_why_cases_img"
            />
            <img
              class="dynamic_images"
              src="<?=$why_animated_photos[1]['photo']?>"
              alt="img"
              class="section_why_cases_img"
            />
            <img
              class="dynamic_images"
              src="<?=$why_animated_photos[2]['photo']?>"
              alt="img"
              class="section_why_cases_img"
            />
          </div>
        </div>
        <div class="section_why_cases_container">
          <div class="section_why_cases_text">
            <h3 class="section_why_cases_text_title">LEARN FROM THE BEST:</h3>
            <div class="section_why_cases_text_text">
              Get ready to be captivated by their stories, as these remarkable
              individuals share their personal journeys, strategies, and
              hard-earned wisdom. They will reveal the tried-and-tested methods
              that propelled them to 7, 8, and 9-figure revenues, giving you the
              inside track to achieving phenomenal growth.
            </div>
          </div>
          <div class="section_why_cases_image_container">
            <img
              class="dynamic_images"
              src="<?=$why_animated_photos[3]['photo']?>"
              alt="img"
              class="section_why_cases_img"
            />
            <img
              class="dynamic_images"
              src="<?=$why_animated_photos[4]['photo']?>"
              alt="img"
              class="section_why_cases_img"
            />
            <img
              class="dynamic_images"
              src="<?=$why_animated_photos[5]['photo']?>"
              alt="img"
              class="section_why_cases_img"
            />
          </div>
        </div>
        <div class="section_why_cases_container">
          <div class="section_why_cases_text">
            <h3 class="section_why_cases_text_title">JOIN COMMUNITY:</h3>
            <div class="section_why_cases_text_text">
              RISE is more than just a conference; it's a close-knit Amazon
              family. Immerse yourself in a vibrant community of like-minded
              sellers, entrepreneurs, and professionals. Network with top
              performers, forge valuable partnerships, and build lifelong
              connections. Together, we RISE.
            </div>
          </div>
          <div class="section_why_cases_image_container">
            <img
              class="dynamic_images"
              src="<?=$why_animated_photos[6]['photo']?>"
              alt="img"
              class="section_why_cases_img"
            />
            <img
              class="dynamic_images"
              src="<?=$why_animated_photos[7]['photo']?>"
              alt="img"
              class="section_why_cases_img"
            />
            <img
              class="dynamic_images"
              src="<?=$why_animated_photos[8]['photo']?>"
              alt="img"
              class="section_why_cases_img"
            />
          </div>
        </div>
      </div>
      <div class="container">
        <div class="section_why_ready_text">
          <span>Ready to Rise? </span>
          Reserve your spot today!
        </div>
        <div class="section_why_event">
          <div class="section_why_event_item">
            <div class="section_why_event_item_logo">
              <img src="<?php bloginfo('template_url'); ?>/assets/images/why-section/block-logo.svg" alt="" />
            </div>
            <div class="section_why_event_item_text">
              AMAZON <br />
              SELLERS <br />
              CONFERENCE <br />
            </div>
          </div>
          <a class="section_why_event_item" href="#tickets">
            GET TICKET
            <img
              class="section_why_event_item_arrow"
              src="<?php bloginfo('template_url'); ?>/assets/images/why-section/arrow.svg"
              alt="arrow"
            />
						</a>
          <div class="section_why_event_item">
					<?=$city?>, <?=$state?> <br />
					<?=$days?> <?=$month?>, <?=$year?>
          </div>
        </div>
        <div class="section_why_carousel_container">
          <button class="why_carousel_btn_prev">
            <svg
              width="77"
              height="24"
              viewBox="0 0 77 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M0.939339 10.9393C0.353554 11.5251 0.353554 12.4749 0.939339 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51471C13.1924 2.92893 13.1924 1.97918 12.6066 1.39339C12.0208 0.807606 11.0711 0.807606 10.4853 1.39339L0.939339 10.9393ZM77 10.5L2 10.5L2 13.5L77 13.5L77 10.5Z"
                fill="white"
              />
            </svg>
          </button>
          <button class="why_carousel_btn_next">
            <svg
              width="77"
              height="24"
              viewBox="0 0 77 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M76.0607 13.0607C76.6464 12.4749 76.6464 11.5251 76.0607 10.9393L66.5147 1.3934C65.9289 0.807611 64.9792 0.807611 64.3934 1.3934C63.8076 1.97919 63.8076 2.92893 64.3934 3.51472L72.8787 12L64.3934 20.4853C63.8076 21.0711 63.8076 22.0208 64.3934 22.6066C64.9792 23.1924 65.9289 23.1924 66.5147 22.6066L76.0607 13.0607ZM0 13.5H75V10.5H0V13.5Z"
                fill="white"
              />
            </svg>
          </button>
          <div class="owl-carousel owl-theme why-carousel" id="why-carousel">
						<?php
							foreach($why_carousel as $image) {
							?>
            <img
              src="<?=$image['photo']?>"
              alt="image"
            />
						<?php
							}
							?>
          </div>
					<div class="mobile_event_block">
							<a class="mobile_event_item_first" href="#tickets">
								GET TICKET
								<img
									class="mobile_event_item_arrow"
									src="<?php bloginfo('template_url'); ?>/assets/images/why-section/arrow.svg"
									alt="arrow"
								/>
						</a>
							<div class="mobile_event_item_second">
								<?= $city?>, <?= $state?> <br>
								<?= $days?> <?= $month?>, <?= $year?>
							</div>
							<div class="mobile_event_item_third">
								This is where champions are made. 
							</div>
					</div>
        </div>
      </div>
    </section>
    <section id="how" class="section_how">
      <img
        class="section_how_palm"
        src="<?php bloginfo('template_url'); ?>/assets/images/how-section/palm.webp"
        alt="palm"
      />
			<img
			class="section_how_palm_mobile"
			src="<?php bloginfo('template_url'); ?>/assets/images/how-section/palm-mobile.png"
			alt="palm"
			/>
      <img
        class="section_how_ellipse_pink"
        src="<?php bloginfo('template_url'); ?>/assets/images/how-section/ellipse-pink.webp"
        alt="ellipse"
      />
      <div class="container how_section_container">
        <h1 class="how_section_title">
          DISCOVER WHAT OUR RECENT EVENT ATTENDEES HAVE TO SAY
        </h1>
        <div class="how_carousel_container">
          <img
            class="how_carousel_blur_bg"
            src="<?php bloginfo('template_url'); ?>/assets/images/how-section/carousel-bg.png"
            alt=""
          />
          <button class="how_carousel_btn_prev">
            <svg
              width="77"
              height="24"
              viewBox="0 0 77 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M0.939339 10.9393C0.353554 11.5251 0.353554 12.4749 0.939339 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51471C13.1924 2.92893 13.1924 1.97918 12.6066 1.39339C12.0208 0.807606 11.0711 0.807606 10.4853 1.39339L0.939339 10.9393ZM77 10.5L2 10.5L2 13.5L77 13.5L77 10.5Z"
                fill="white"
              />
            </svg>
						<svg class="mobile_arrow" width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M0.461098 6.5389C0.163469 6.24128 0.163469 5.75873 0.461098 5.4611L5.31122 0.610978C5.60885 0.313351 6.09139 0.31335 6.38902 0.610978C6.68665 0.908605 6.68665 1.39115 6.38902 1.68878L2.0778 6L6.38902 10.3112C6.68665 10.6088 6.68665 11.0914 6.38902 11.389C6.0914 11.6867 5.60885 11.6867 5.31122 11.389L0.461098 6.5389ZM20 6.76212L1 6.76212L1 5.23788L20 5.23788L20 6.76212Z" fill="white"/>
							</svg>			
          </button>
          <button class="how_carousel_btn_next">
            <svg
              width="77"
              height="24"
              viewBox="0 0 77 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M76.0607 13.0607C76.6464 12.4749 76.6464 11.5251 76.0607 10.9393L66.5147 1.3934C65.9289 0.807611 64.9792 0.807611 64.3934 1.3934C63.8076 1.97919 63.8076 2.92893 64.3934 3.51472L72.8787 12L64.3934 20.4853C63.8076 21.0711 63.8076 22.0208 64.3934 22.6066C64.9792 23.1924 65.9289 23.1924 66.5147 22.6066L76.0607 13.0607ZM0 13.5H75V10.5H0V13.5Z"
                fill="white"
              />
            </svg>
						<svg class="mobile_arrow" width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M19.5389 6.5389C19.8365 6.24128 19.8365 5.75873 19.5389 5.4611L14.6888 0.610978C14.3912 0.313351 13.9086 0.31335 13.611 0.610978C13.3133 0.908605 13.3133 1.39115 13.611 1.68878L17.9222 6L13.611 10.3112C13.3133 10.6088 13.3133 11.0914 13.611 11.389C13.9086 11.6867 14.3912 11.6867 14.6888 11.389L19.5389 6.5389ZM-6.66269e-08 6.76212L19 6.76212L19 5.23788L6.66269e-08 5.23788L-6.66269e-08 6.76212Z" fill="white"/>
							</svg>
							
          </button>
          <div class="how_carousel_wrapper">
            <div class="owl-carousel owl-theme how_carousel" id="how-carousel">
							<?php 
							foreach($review_carousel as $review) {
							?>
              <img
                class="how_carousel_item"
                src="<?= $review['photo']?>"
              />
							<?php
							}
							?>
            </div>
          </div>
        </div>
      </div>
      <div class="how_image_wrapper">
        <img
          class="how_palm_bottom"
          src="<?php bloginfo('template_url'); ?>/assets/images/how-section/palm-bottom.png"
          alt="palm"
        />
        <img
          class="how_image_wrapper_bg"
          src="<?php bloginfo('template_url'); ?>/assets/images/how-section/image-bg.webp"
          alt="bg"
        />
        <div class="container">
          <h1 class="how_section_title">
            DIVE INTO THE IMMERSIVE EXPERIENCE OF PAST RISE CONFERENCES
          </h1>
          <div class="how_videos">
            <?=$video1?>
            <?=$video2?>
          </div>
        </div>
      </div>
    </section>
    <section id="speakers" class="section_speakers">
      <img
        class="section_speakers_bg"
        src="<?php bloginfo('template_url'); ?>/assets/images/speakers-section/bg.webp"
        alt="background"
      />
      <img
        class="speakers_bottom_palm"
        src="<?php bloginfo('template_url'); ?>/assets/images/program-section/palm.webp"
        alt="palm"
      />
      <h1 class="section_speakers_title">RISE SPEAKERS <?= $year?></h1>
      <div class="container">
        <div class="speakers_undertitle">
          RISE Conference is not just an event; it's an immersive experience
          that will leave an indelible mark on your entrepreneurial journey.
          Join us as we bring together the brightest minds in the industry, all
          in one place, to inspire, empower, and elevate each other.
        </div>
        <div class="section_speakers_carousel_container">
          <button class="speakers_carousel_btn_prev">
            <svg
              width="77"
              height="24"
              viewBox="0 0 77 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M0.939339 10.9393C0.353554 11.5251 0.353554 12.4749 0.939339 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51471C13.1924 2.92893 13.1924 1.97918 12.6066 1.39339C12.0208 0.807606 11.0711 0.807606 10.4853 1.39339L0.939339 10.9393ZM77 10.5L2 10.5L2 13.5L77 13.5L77 10.5Z"
                fill="white"
              />
            </svg>
          </button>
          <button class="speakers_carousel_btn_next">
            <svg
              width="77"
              height="24"
              viewBox="0 0 77 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M76.0607 13.0607C76.6464 12.4749 76.6464 11.5251 76.0607 10.9393L66.5147 1.3934C65.9289 0.807611 64.9792 0.807611 64.3934 1.3934C63.8076 1.97919 63.8076 2.92893 64.3934 3.51472L72.8787 12L64.3934 20.4853C63.8076 21.0711 63.8076 22.0208 64.3934 22.6066C64.9792 23.1924 65.9289 23.1924 66.5147 22.6066L76.0607 13.0607ZM0 13.5H75V10.5H0V13.5Z"
                fill="white"
              />
            </svg>
          </button>
          <div
            class="owl-carousel owl-theme speakers-carousel"
            id="speakers-carousel"
						data-length="<?=count($speakers)?>"
          >
						<?php
							foreach($speakers as $speaker) {
						?>
            <div class="speakers_carousel_item">
              <div class="speakers_carousel_item_img_container">
                <img
                  src="<?=$speaker['speaker_photo']?>"
                  alt="speaker"
                  class="speakers_carousel_item_img"
                />
              </div>
              <div class="speakers_carousel_item_name"><?=$speaker['speaker_name']?></div>
              <ul class="speakers_carousel_item_list">
								<?php
									foreach($speaker['speaker_achievements'] as $achievement) { 
								?>
                <li><?=$achievement['speaker_achievement']?></li>
								<?php
									}
								?>
              </ul>
              <div class="speakers_carousel_item_line"></div>
            </div>
						<?php
							}
						?>
          </div>
        </div>
				<div class="mobile_event_block">
					<a class="mobile_event_item_first" href="#tickets">
						GET TICKET
						<img
							class="mobile_event_item_arrow"
							src="<?php bloginfo('template_url'); ?>/assets/images/why-section/arrow.svg"
							alt="arrow"
						/>
						</a>
					<div class="mobile_event_item_second">
					<?=$city?>, <?=$state?> <br />
					<?=$days?> <?=$month?>, <?=$year?>
					</div>
					<div class="mobile_event_item_third">
						This is where champions are made. 
					</div>
				</div>
        <div class="section_why_event">
          <div class="section_why_event_item">
            <div class="section_why_event_item_logo">
              <img src="<?php bloginfo('template_url'); ?>/assets/images/why-section/block-logo.svg" alt="" />
            </div>
            <div class="section_why_event_item_text">
              AMAZON <br />
              SELLERS <br />
              CONFERENCE <br />
            </div>
          </div>
          <a class="section_why_event_item" href="#tickets">
            GET TICKET
            <img
              class="section_why_event_item_arrow"
              src="<?php bloginfo('template_url'); ?>/assets/images/why-section/arrow.svg"
              alt="arrow"
            />
						</a>
          <div class="section_why_event_item">
					<?=$city?>, <?=$state?> <br />
					<?=$days?> <?=$month?>, <?=$year?>
          </div>
        </div>
      </div>
    </section>
    <section id="program" class="section_program">
      <img
        src="<?php bloginfo('template_url'); ?>/assets/images/program-section/bg.webp"
        alt="bg"
        class="section_program_bg"
      />
      <div class="container">
        <h1 class="section_program_title">PROGRAM TO RISE</h1>
        <div class="section_program_undertitle">
          Our program goes above and beyond mere learning from the best. Prepare
          for a dynamic blend of insightful sessions and dedicated networking
          time, creating the perfect environment to forge invaluable connections
          and exchange experiences with fellow Amazon sellers. Experience the
          powerful synergy of knowledge and meaningful connections, all
          meticulously woven into one exceptional program.
        </div>
      </div>
			<div class="section_program_program">
				<?php
				foreach($program_days as $day) {
				?>
				<div class="program_item">
					<h3 class="program_item_date"><?=$day['program_date']?></h3>
					<div class="program_item_body">
						<?php 
							foreach($day['program_actions'] as $action) {
						?>
						<div class="program_item_action">
							<div class="program_body_date">
								<div><?=$action['action_start_time']?></div>
								<div>-</div>
								<div><?=$action['action_end_time']?></div>
							</div>
							<div class="program_body_events">
								<?=$action['action_events']?>
							</div>
							<div class="program_body_devider"></div>
						</div>
						<?php
							}
						?>
					</div>
				</div>
				<?php
				} 
				?>
			</div>
			<div class="container">
				<div class="section_why_event">
          <div class="section_why_event_item">
            <div class="section_why_event_item_logo">
              <img src="<?php bloginfo('template_url'); ?>/assets/images/why-section/block-logo.svg" alt="" />
            </div>
            <div class="section_why_event_item_text">
              AMAZON <br />
              SELLERS <br />
              CONFERENCE <br />
            </div>
          </div>
          <a class="section_why_event_item" href="#tickets">
            GET TICKET
            <img
              class="section_why_event_item_arrow"
              src="<?php bloginfo('template_url'); ?>/assets/images/why-section/arrow.svg"
              alt="arrow"
            />
					</a>
          <div class="section_why_event_item">
					<?=$city?>, <?=$state?> <br />
					<?=$days?> <?=$month?>, <?=$year?>
          </div>
        </div>
			</div>
    </section>
    <section id="tickets" class="section_tickets">
      <img
        class="section_tickets_palm"
        src="<?php bloginfo('template_url'); ?>/assets/images/tickets-section/palm.webp"
        alt="palm"
      />
      <div class="container">
				<h1 class="section_tickets_title">TICKET TO RISE</h1>
        <div class="tickets_container">
          <div class="tickets_item">
            <div class="tickets_item_title">STANDART</div>
            <div class="tickets_item_services">
						<?php
								foreach($ticket_standart_services as $service) { 
							?>
              <p><?=$service['ticket_standart_service']?></p>
							<?php
								}
							?>
            </div>
            <div class="tickets_item_bottom">
              <div class="tickets_item_bottom_price">
								<?php
									if($is_ticket_standart_special) {
								?>
									<div class="special">
										<div class="blue_text">special price till 09/10</div>
										<div class="old-price"><?=$ticket_standart_price?></div>
										<div class="new-price"><?=$ticket_standart_special_price?></div>
									</div>
								<?php
									}
								?>
								<?php 
									if(!$is_ticket_standart_special) {
								?>
                price
                <span><?=$ticket_standart_price?></span>
								<?php
								}
								?>
              </div>
              <div class="tickets_item_bottom_buy" id="standart-ticket">
                BUY TICKET
                <img
                  class="tickets_item_arrow"
                  src="<?php bloginfo('template_url'); ?>/assets/images/why-section/arrow.svg"
                  alt="arrow"
                />
              </div>
            </div>
          </div>
          <div class="tickets_item">
            <div class="tickets_item_title">vip</div>
            <div class="tickets_item_services">
							<?php
								foreach($ticket_vip_services as  $service) { 
							?>
              <p><?=$service['ticket_vip_service']?></p>
							<?php
								}
							?>
            </div>
            <div class="tickets_item_bottom">
              <div class="tickets_item_bottom_price">
							<?php
									if($is_ticket_vip_special) {
								?>
									<div class="special">
										<div class="blue_text">special price till 09/10</div>
										<div class="old-price"><?=$ticket_vip_price?></div>
										<div class="new-price"><?=$ticket_vip_special_price?></div>
									</div>
								<?php
									}
								?>
								<?php 
								if(!$is_ticket_vip_special) {
								?>
                price
                <span><?=$ticket_vip_special_price?></span>
								<?php
								}
								?>
              </div>
              <div class="tickets_item_bottom_buy" id="vip-ticket">
                BUY TICKET
                <img
                  class="tickets_item_arrow"
                  src="<?php bloginfo('template_url'); ?>/assets/images/why-section/arrow.svg"
                  alt="arrow"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="where" class="section_where">
      <img
        src="<?php bloginfo('template_url'); ?>/assets/images/where-section/palm.webp"
        alt="palm"
        class="section_where_palm"
      />
      <div
        class="section_where_content"
        style="background-image: url(<?=$where_section_bg?>)"
      >
        <div class="container">
          <h1 class="section_where_title">WHERE TO RISE</h1>
          <div class="section_where_left_main">
            <div class="section_where_left" style="background-image: url(<?=$where_section_bg?>)">
              <div class="section_where_left_top">
                <img
                  class="section_where_edition"
                  src="<?=$where_logo?>"
                  alt="edition"
                />
                <div class="section_where_left_subscription">
                  <?=$where_location?>
                </div>
              </div>
              <div class="section_where_left_bottom">
								<?php
									$index = 1; 
									foreach($where_images as $image) {
								?>
                <img class="clickable_image" data-index="<?=$index?>" src="<?=$image['where_image_small']?>" alt="image" />
								<?php
								$index++;
									}
								?>
              </div>
            </div>
            <div class="section_where_right">
              <div class="section_where_right_map">
                <?=$map?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="sponsors" class="section_sponsors">
      <div class="container">
        <h1 class="section_sponsors_title">SPONSORS</h1>
        <div class="sponsors_container">
          <div class="sponsor_item">
						<div class="coming_soon">coming soon</div>
            <div class="sponsor_item_name">Sponsor #1</div>
          </div>
          <div class="sponsor_item">
						<div class="coming_soon">coming soon</div>
            <div class="sponsor_item_name">Sponsor #2</div>
          </div>
          <div class="sponsor_item">
						<div class="coming_soon">coming soon</div>
            <div class="sponsor_item_name">Sponsor #3</div>
          </div>
          <div class="sponsor_item">
						<div class="coming_soon">coming soon</div>
            <div class="sponsor_item_name">Sponsor #4</div>
          </div>
        </div>
      </div>
    </section>
    <section
      id="questions"
      class="section_questions"
      style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/question-section/bg.webp')"
    >
      <img
        class="section_questions_palm"
        src="<?php bloginfo('template_url'); ?>/assets/images/question-section/palm.webp"
        alt="palm"
      />
      <img
        class="section_questions_ellipse_blue"
        src="<?php bloginfo('template_url'); ?>/assets/images/question-section/blik.webp"
        alt="ellipse"
      />
      <h1 class="section_questions_title">Have questions? Contact Us</h1>
      <div class="section_questions_center">
        <div class="section_questions_email"><?=$email?></div>
        <div class="section_questions_social">
          <a href="<?= $instagram?>">
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
          <a href="<?= $facebook?>">
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
        <img
          class="section_questions_logo"
          src="<?php bloginfo('template_url'); ?>/assets/images/question-section/logo.svg"
          alt="logo"
        />
      </div>
    </section>
		<?php wp_footer(); ?>
  </body>
</html>
