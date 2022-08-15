<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pos-atm
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="page">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <svg style="display: none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		<symbol viewBox="0 0 18 18" id="basket"><path d="M6.47662 0.580606C6.54001 0.618846 6.5953 0.669292 6.63934 0.729062C6.68337 0.788833 6.71528 0.856757 6.73325 0.928954C6.75122 1.00115 6.75489 1.07621 6.74406 1.14984C6.73323 1.22346 6.70811 1.29422 6.67013 1.35807L3.80587 6.16676H14.1941L11.3287 1.35807C11.2521 1.22912 11.2294 1.07477 11.2657 0.928964C11.302 0.783162 11.3942 0.657854 11.5222 0.580606C11.6502 0.503358 11.8035 0.480498 11.9482 0.517055C12.0929 0.553611 12.2173 0.64659 12.294 0.775538L15.5059 6.16676H17.4375C17.5867 6.16676 17.7298 6.22646 17.8352 6.33273C17.9407 6.439 18 6.58313 18 6.73342V7.86675C18 8.01703 17.9407 8.16117 17.8352 8.26744C17.7298 8.37371 17.5867 8.43341 17.4375 8.43341H0.5625C0.413316 8.43341 0.270242 8.37371 0.164752 8.26744C0.0592632 8.16117 0 8.01703 0 7.86675V6.73342C0 6.58313 0.0592632 6.439 0.164752 6.33273C0.270242 6.22646 0.413316 6.16676 0.5625 6.16676H2.49412L5.70375 0.775538C5.74171 0.711679 5.79178 0.65598 5.85112 0.611622C5.91045 0.567264 5.97787 0.535115 6.04954 0.517013C6.12121 0.498911 6.19571 0.495211 6.2688 0.506122C6.34189 0.517033 6.41212 0.542343 6.4755 0.580606H6.47662ZM3.81825 16.3667L2.15325 9.56673H1.062L2.77763 16.8495C2.82205 17.0349 2.92709 17.1998 3.07584 17.3178C3.2246 17.4358 3.40842 17.5 3.59775 17.5H14.4045C14.594 17.5002 14.7781 17.4362 14.9271 17.3182C15.0761 17.2002 15.1813 17.0351 15.2257 16.8495L16.938 9.56673H15.8445L14.1806 16.3667H3.81938H3.81825Z"/></symbol><symbol viewBox="0 0 13 20" id="arrow"><path fill-rule="evenodd" clip-rule="evenodd" d="M12.5618 0.647498C12.0048 0.117501 11.1018 0.117501 10.5449 0.647498L0.979492 9.75L10.5449 18.8525C11.1018 19.3825 12.0048 19.3825 12.5618 18.8525C13.1187 18.3225 13.1187 17.4632 12.5618 16.9332L5.01328 9.75L12.5618 2.56679C13.1187 2.03679 13.1187 1.1775 12.5618 0.647498Z"/></symbol><symbol viewBox="0 0 24 24" id="instagram"><path d="M6.66667 0C2.99067 0 0 2.99067 0 6.66667V17.3333C0 21.0093 2.99067 24 6.66667 24H17.3333C21.0093 24 24 21.0093 24 17.3333V6.66667C24 2.99067 21.0093 0 17.3333 0H6.66667ZM6.66667 2.66667H17.3333C19.5387 2.66667 21.3333 4.46133 21.3333 6.66667V17.3333C21.3333 19.5387 19.5387 21.3333 17.3333 21.3333H6.66667C4.46133 21.3333 2.66667 19.5387 2.66667 17.3333V6.66667C2.66667 4.46133 4.46133 2.66667 6.66667 2.66667ZM18.6667 4C18.313 4 17.9739 4.14048 17.7239 4.39052C17.4738 4.64057 17.3333 4.97971 17.3333 5.33333C17.3333 5.68696 17.4738 6.02609 17.7239 6.27614C17.9739 6.52619 18.313 6.66667 18.6667 6.66667C19.0203 6.66667 19.3594 6.52619 19.6095 6.27614C19.8595 6.02609 20 5.68696 20 5.33333C20 4.97971 19.8595 4.64057 19.6095 4.39052C19.3594 4.14048 19.0203 4 18.6667 4ZM12 5.33333C8.324 5.33333 5.33333 8.324 5.33333 12C5.33333 15.676 8.324 18.6667 12 18.6667C15.676 18.6667 18.6667 15.676 18.6667 12C18.6667 8.324 15.676 5.33333 12 5.33333ZM12 8C14.2053 8 16 9.79467 16 12C16 14.2053 14.2053 16 12 16C9.79467 16 8 14.2053 8 12C8 9.79467 9.79467 8 12 8Z"/></symbol><symbol viewBox="0 0 21 18" id="telegram"><path d="M1.28746 7.83905C1.28746 7.83905 10.5753 3.88768 13.7965 2.49635C15.0312 1.93981 19.2188 0.15891 19.2188 0.15891C19.2188 0.15891 21.1515 -0.620235 20.9905 1.27197C20.9368 2.05112 20.5073 4.77813 20.0778 7.72775C19.4336 11.9017 18.7356 16.4653 18.7356 16.4653C18.7356 16.4653 18.6283 17.7453 17.7156 17.9679C16.8029 18.1906 15.2997 17.1888 15.0312 16.9662C14.8165 16.7992 11.0047 14.2948 9.60889 13.0705C9.23308 12.7365 8.80359 12.0687 9.66258 11.2896C11.5953 9.453 13.9038 7.17122 15.2997 5.72423C15.9439 5.05639 16.5882 3.4981 13.9038 5.39031C10.0921 8.11732 6.334 10.6774 6.334 10.6774C6.334 10.6774 5.47502 11.2339 3.86442 10.733C2.25382 10.2321 0.374783 9.56431 0.374783 9.56431C0.374783 9.56431 -0.913697 8.72951 1.28746 7.83905Z"/></symbol><symbol viewBox="0 0 23 15" id="vk"><path d="M0.853372 0C0.123245 0 0 0.373437 0 0.773438C0 1.49544 0.573945 5.393 3.71291 9.875C5.98761 13.127 8.98615 15 11.6403 15C13.2481 15 13.4144 14.5723 13.4144 13.9062V10.9336C13.4144 10.1316 13.5914 10 14.1031 10C14.4691 10 15.211 10.25 16.6482 12C18.3059 14.018 18.6059 15 19.5564 15H22.0679C22.6505 15 22.9864 14.746 22.9999 14.25C23.0018 14.124 22.984 13.9802 22.9437 13.8242C22.7578 13.2482 21.9075 11.842 20.844 10.5C20.2537 9.756 19.6731 9.01909 19.4067 8.62109C19.2247 8.35909 19.1558 8.176 19.1634 8C19.1711 7.816 19.2631 7.63662 19.403 7.39062C19.3781 7.39062 22.62 2.64297 22.9362 1.04297C22.9803 0.890969 23.0019 0.749 22.9961 0.625C22.9808 0.263 22.7417 0 22.1802 0H19.6725C19.0401 0 18.7464 0.398781 18.5758 0.800781C18.5758 0.800781 17.0143 4.159 15.211 6.375C14.6265 7.015 14.3295 7 14.0133 7C13.8446 7 13.4144 6.78722 13.4144 6.19922V1.01562C13.4144 0.321625 13.2511 0 12.7145 0H8.26049C7.86955 0 7.66537 0.318625 7.66537 0.640625C7.66537 1.30663 8.52581 1.46984 8.62354 3.33984V6.96094C8.62354 7.84094 8.47937 8 8.16317 8C7.3104 8 5.63129 4.99841 4.5064 1.06641C4.26303 0.292406 4.01968 0 3.38729 0H0.853372Z"/></symbol><symbol viewBox="0 0 80 32" id="web-studio"><svg><path d="M31.7984 25.7734C33.6211 25.7734 35.0481 25.3752 36.0794 24.5788C37.1197 23.7825 37.6398 22.6842 37.6398 21.284C37.6398 20.5489 37.4842 19.9276 37.173 19.4201C36.8707 18.9125 36.3639 18.4749 35.6526 18.1074C34.9414 17.7311 33.9811 17.3898 32.772 17.0835C31.6428 16.8035 30.7893 16.5628 30.2114 16.3615C29.6423 16.1515 29.2556 15.9415 29.0511 15.7315C28.8466 15.5127 28.7443 15.2458 28.7443 14.9307C28.7443 14.3882 29.0066 13.9637 29.5312 13.6574C30.0558 13.3424 30.7404 13.2024 31.585 13.2374C32.4652 13.2724 33.1809 13.4912 33.7322 13.8937C34.2834 14.2875 34.7129 14.7774 34.8107 15.4513C34.8107 15.4513 35.5591 15.6408 36.3549 15.4952C37.2223 15.3365 37.5598 14.9832 37.5598 14.9832C37.3997 13.7231 36.7729 12.7167 35.6793 11.9641C34.5857 11.2028 33.2121 10.8221 31.5583 10.8221C29.8691 10.8221 28.5132 11.2115 27.4907 11.9904C26.4682 12.7605 25.957 13.7887 25.957 15.0751C25.957 15.7665 26.1082 16.3572 26.4105 16.8472C26.7216 17.3285 27.2373 17.7486 27.9575 18.1074C28.6865 18.4662 29.669 18.8075 30.9049 19.1313C32.034 19.4288 32.8742 19.6782 33.4254 19.8795C33.9767 20.0808 34.3368 20.2952 34.5057 20.5227C34.6835 20.7415 34.7724 21.0303 34.7724 21.3891C34.7724 22.0016 34.5235 22.4829 34.0256 22.833C33.5366 23.183 32.8564 23.3581 31.9851 23.3581C31.0249 23.3581 30.2202 23.148 29.5712 22.728C28.931 22.3079 28.4024 21.7008 28.2246 20.9569C28.2246 20.9569 27.6833 20.6905 26.7811 20.7793C25.9534 20.8608 25.4902 21.4153 25.4902 21.4153C25.7392 22.798 26.4149 23.87 27.5174 24.6313C28.6199 25.3927 30.0469 25.7734 31.7984 25.7734Z" fill="white"/><path d="M48.8326 25.3927C48.8326 25.3927 49.0655 24.953 49.0655 24.2426C49.0655 23.4434 48.8326 23.0693 48.8326 23.0693C47.8902 23.2093 47.0678 23.2399 46.3654 23.1612C45.6719 23.0736 45.1651 22.763 44.845 22.2292C44.6761 21.9404 44.5827 21.586 44.565 21.1659C44.5561 20.7458 44.5516 20.2514 44.5516 19.6826V13.4212H48.8326C48.8326 13.4212 48.9752 13.2065 48.9752 12.3433C48.9752 11.48 48.8326 11.2159 48.8326 11.2159H44.5516V7.27788C44.5516 7.27788 44.2838 7.104 43.1513 7.104C42.1185 7.104 41.751 7.27788 41.751 7.27788V11.2159H38.9903C38.9903 11.2159 38.8706 11.4552 38.8706 12.3185C38.8706 13.2313 38.9903 13.4212 38.9903 13.4212H41.751V19.8139C41.751 20.584 41.7599 21.2753 41.7776 21.8879C41.8043 22.4917 41.9732 23.0868 42.2844 23.6731C42.6401 24.3294 43.1602 24.8107 43.8448 25.117C44.5294 25.4233 45.3074 25.5896 46.1787 25.6158C47.05 25.6421 47.9346 25.5677 48.8326 25.3927Z" fill="white"/><path d="M57.5803 25.7865C58.9762 25.7865 60.2432 25.4408 61.3812 24.7495C62.5193 24.0494 63.3684 23.0649 63.9285 21.796C63.9285 21.796 63.5007 21.4009 62.5985 21.1345C61.4231 20.7875 61.1945 20.9427 61.1945 20.9427C60.4655 22.4479 59.2163 23.2005 57.447 23.2005C56.2378 23.2005 55.2865 22.8417 54.593 22.1241C53.8995 21.4066 53.4949 20.3914 53.3793 19.0788H64.1152C64.213 17.381 64.0085 15.9152 63.5017 14.6813C62.9949 13.4474 62.2259 12.4979 61.1945 11.8328C60.1632 11.159 58.914 10.8221 57.447 10.8221C56.0422 10.8221 54.8108 11.1327 53.7528 11.7541C52.6947 12.3754 51.8679 13.2549 51.2722 14.3925C50.6854 15.5302 50.392 16.8735 50.392 18.4224C50.392 19.8839 50.6898 21.1703 51.2855 22.2817C51.8901 23.3843 52.7303 24.2463 53.8061 24.8676C54.8908 25.4802 56.1489 25.7865 57.5803 25.7865ZM57.5537 13.2505C59.732 13.2505 60.9678 14.48 61.2612 16.9391H53.446C53.6238 15.7402 54.0551 14.8257 54.7397 14.1956C55.4243 13.5656 56.3623 13.2505 57.5537 13.2505Z" fill="white"/><path d="M66.7033 31.6935C66.7033 31.6935 66.8668 31.9999 68.0907 31.9999C69.3147 31.9999 69.504 31.6935 69.504 31.6935V24.3951C70.0108 24.8414 70.5931 25.1827 71.2511 25.4189C71.9179 25.664 72.6603 25.7865 73.4783 25.7865C74.8208 25.7865 75.9766 25.4583 76.9458 24.802C77.9238 24.1369 78.6751 23.2399 79.1996 22.111C79.7331 20.9821 79.9998 19.7088 79.9998 18.2912C79.9998 16.8647 79.7331 15.5914 79.1996 14.4713C78.6662 13.3424 77.906 12.4542 76.9191 11.8066C75.9411 11.1502 74.7763 10.8221 73.4249 10.8221C72.5358 10.8221 71.7356 10.9709 71.0244 11.2684C70.3131 11.5572 69.6996 11.9641 69.1839 12.4892V11.2159C69.1839 11.2159 68.5771 10.8653 67.9103 10.8653C67.2435 10.8653 66.7033 11.2159 66.7033 11.2159V31.6935ZM73.0915 23.3055C71.7223 23.3055 70.7265 22.8374 70.1041 21.901C69.4907 20.9646 69.1839 19.7613 69.1839 18.2912C69.1839 16.821 69.4907 15.6221 70.1041 14.6945C70.7176 13.7668 71.6823 13.303 72.9982 13.303C73.9228 13.303 74.683 13.5262 75.2787 13.9725C75.8744 14.4188 76.3145 15.0182 76.599 15.7708C76.8924 16.5234 77.0391 17.3635 77.0391 18.2912C77.0391 19.2275 76.8969 20.0764 76.6123 20.8377C76.3278 21.5903 75.8922 22.1898 75.3054 22.6361C74.7275 23.0824 73.9895 23.3055 73.0915 23.3055Z" fill="white"/><path d="M0 25.317C0 25.317 0.619115 25.7522 1.94577 25.7522C3.27242 25.7522 3.83844 25.317 3.83844 25.317C3.83844 25.317 4.08867 22.1574 5.69575 20.4572C8.47665 17.5153 13.3556 17.5275 16.1498 20.4572C17.7675 22.1533 18.0424 25.317 18.0424 25.317C18.0424 25.317 18.75 25.7522 20.0767 25.7522C21.3318 25.7522 21.8809 25.317 21.8809 25.317L13.6026 0.246014C13.6026 0.246014 12.559 0 10.8962 0C9.23348 0 8.2783 0.246014 8.2783 0.246014L0 25.317ZM6.82783 16.2462L10.8962 3.88478L15.0177 16.2462C15.0177 16.2462 13.3108 15.306 10.7901 15.306C8.00415 15.306 6.82783 16.2462 6.82783 16.2462Z"/></svg></symbol><symbol viewBox="0 0 14 14" id="plus"><path fill-rule="evenodd" clip-rule="evenodd" d="M7 0.5C7.49515 0.5 7.89655 0.9014 7.89655 1.39655V6.10345H12.6034C13.0986 6.10345 13.5 6.50485 13.5 7C13.5 7.49515 13.0986 7.89655 12.6034 7.89655H7.89655V12.6034C7.89655 13.0986 7.49515 13.5 7 13.5C6.50485 13.5 6.10345 13.0986 6.10345 12.6034V7.89655H1.39655C0.9014 7.89655 0.5 7.49515 0.5 7C0.5 6.50485 0.9014 6.10345 1.39655 6.10345H6.10345V1.39655C6.10345 0.9014 6.50485 0.5 7 0.5Z"/></symbol><symbol viewBox="0 0 14 2" id="minus"><path d="M6.10345 0H12.6034C13.0986 0 13.5 0.447715 13.5 1C13.5 1.55228 13.0986 2 12.6034 2H6.10345H1.39655C0.9014 2 0.5 1.55228 0.5 1C0.5 0.447715 0.9014 0 1.39655 0H6.10345Z"/></symbol>
	</svg>
		<header class="header">
			<div class="header__container container">
			  <a class="header__logo" href="<?php echo home_url(); ?>"><img class="header__logo-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/logo.svg" width="106" height="81" alt=""></a>
			  <button class="header__geolocation"><img class="header__geolocation-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/geolocation.svg" alt="">Урало-Поволжье</button>
			  <a class="header__sign" href="#">Вход в систему мониторинга</a>
			  <div class="header__contacts">
			    <div class="header__contacts-inner">
			    	<?php global $opt_name; ?>
			    	<a class="header__phone" href="tel:<?php echo esc_attr($opt_name['phone_href']); ?>"><?php echo esc_attr($opt_name['phone']); ?></a>
			      <button class="header__callback">Обратный звонок</button>
			    </div>
			  </div>
			  <nav class="header__navigation">
			    <button class="header__burger">Меню</button>
			    <ul class="header__navigation-list">
			      <li class="header__close">
			        <button class="header__close-button"><span class="sr-only">Закрыть меню</span></button>
			      </li>
			      <li class="header__navigation-contacts">
			        <a class="header__phone" href="tel:88002343475">8 800 234 34 75</a>
			        <button class="header__callback">Обратный звонок</button>
			      </li>
			      <li class="header__navigation-sign"><a class="header__sign" href="#">Вход в систему мониторинга</a></li>
			      <?php wp_nav_menu( array(
			      	'theme_location'  => '',
			      	'menu'            => '',
			      	'container'       => null,
			      	'menu_id'         => '',
			      	'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
			      	'depth'           => 0,
			      	'walker'          => '',
			      ) ); ?>
			    </ul>
			  </nav>
			  <?php pos_atm_woocommerce_cart_link(); ?>
			</div>
		</header>
