<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pos-atm
 */

?>

<footer class="footer">
	<div class="footer__row container">
		<a class="footer__logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/logo_white.svg" alt="Логотип"></a>
		<nav class="footer__navigation">
    	<?php wp_nav_menu( array(
    		'theme_location'  => '',
    		'menu'            => '',
    		'container'       => null,
    		'menu_class'      => 'footer__navigation-list',
    		'items_wrap'      => '<ul class = "%2$s">%3$s</ul>',
    	) ); ?>
    </nav>
    <div class="footer__contacts">
      <a class="footer__phone" href="tel:"></a>
      <button class="footer__callback">Обратный звонок</button>
    </div>
  </div>
  <div class="footer__bottom">
    <div class="footer__container container">
      <a class="footer__confidentiality" href="./policy.html">Политика конфиденциальности</a>
      <a class="footer__developer" href="#">
        <span>Сайт разработан студией</span>
        <svg style="width: 80rem; height: 32rem;">
          <use xlink:href="#web-studio"></use>
        </svg>
      </a>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
