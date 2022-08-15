<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
//do_action( 'woocommerce_before_main_content' );

?>

<?php


//do_action( 'woocommerce_catalog' );
/*
	// Выполнение запроса по категориям и атрибутам
	$args = array(
		// Использование аргумента tax_query для установки параметров терминов таксономии
		'tax_query' => array(
		// Использование нескольких таксономий требует параметр relation
		// массив для категории имеющей слаг slug-category-1
		// массив для атрибута pa_attribute-1 имеющим значение attribute-1
		array(
		 'taxonomy' => 'attribute',
		 'field' => 'slug',
		 'terms' => 'hi',
		)
	),
	// Параметры отображения выведенных товаров
	'posts_per_page' => 4, // количество выводимых товаров
	'post_type' => 'product', // тип товара
	'orderby' => 'title', // сортировка
);

$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
global $product;
?>
	<!-- Цикл для вывода выбранных товаров -->
	<figure class="col-sm-3 product">
		<a href="<?php echo get_permalink( $loop->post->ID ) ?>">
		  <?php woocommerce_show_product_sale_flash( $post, $product ); ?>
		  <?php
		  if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
		  else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="250px" height="250px" />';
		  ?>
		</a>
		<figcaption>
			<h3 class="product-title"><?php the_title(); ?></h3>
			<div class="product-price"><?php echo $product->get_price_html(); ?></div>
			<div class="text-center">
				<?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
			</div>
		</figcaption>
	</figure>

	<?php endwhile; ?>
	<!-- Сброс данных запроса -->
	<?php wp_reset_query();




	$args = array(
		'post_type' => 'product',
		'orderby' => 'date',
		'order'   => 'ASC',
		'paginate' => true,
		'posts_per_page' => 20, 
		'tax_query' => array(
			// массив для атрибута pa_attribute-1 имеющим значение attribute-1
			array(
				'taxonomy' => 'company',
				'field' => 'slug',
				'terms' => 'pass',
			),
		),
	);

	$loop = new WP_Query( $args );
	if ( $loop->have_posts() ) {
		while ( $loop->have_posts() ) : $loop->the_post();
			wc_get_template_part( 'content', 'product' );
		endwhile;
	} else {
		echo __( 'Продуктов не найдено' );
	}
	wp_reset_postdata(); */
?>

<header class="woocommerce-products-header">
	<?php /*if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 
	do_action( 'woocommerce_archive_description' ); */
	?>
</header>
<section class="shop">
  <div class="shop__heading container">
    <h1 class="shop__title title_1">Интернет магазин</h1>
    <nav class="shop__navigation">
      <ul class="shop__navigation-list">
        <li class="shop__navigation-item"><a class="shop__navigation-link" href="#details">Запчасти для банкоматов</a></li>
        <li class="shop__navigation-item"><a class="shop__navigation-link" href="#details">POS-терминалы</a></li>
        <li class="shop__navigation-item"><a class="shop__navigation-link" href="#details">Расходные материалы (чековая лента)</a></li>
      </ul>
    </nav>
  </div>
  <div class="shop__category">
    <div class="container">
      <div class="shop__category-heading">
        <h2 class="shop__category-title">Запчасти для банкоматов</h2>
        <button class="shop__filters-button">Фильтры<span class="shop__filters-button-number">1</span></button>
      </div>
      <div class="shop__filters">
        <div class="shop__filters-item">
        	<div>
        		<label>
        			<input type="radio" name="Производители" value="verifone" checked>
        			<span>VeriFone</span>
        		</label>
        		<label>
        			<input type="radio" name="Производители" value="pass">
        			<span>Pass</span>
        		</label>
        	</div>
        </div>
      </div>
      <div class="shop__category-row">
        <div class="shop__sorting">
          <label class="shop__sorting-item"><input class="shop__sorting-radio" type="radio" name="Сортировка" value="Сначала дешевле" checked><span class="shop__sorting-text">Сначала дешевле</span></label>
          <label class="shop__sorting-item"><input class="shop__sorting-radio" type="radio" name="Сортировка" value="Сначала дороже" checked><span class="shop__sorting-text">Сначала дороже</span></label>
        </div>
        <button class="shop__reset">Сбросить фильтры</button>
      </div>
      <ul class="shop__category-list">
        <li class="shop__product">
          <img class="shop__product-image" src="./img/product.jpg" alt="Изображение товара" width="289" height="289">
          <div class="shop__product-info">
            <h3 class="shop__product-title">VeriFone VX 520 CTLS Ethernet (стационарный, подключение по локальной сети)</h3>
            <div class="shop__product-price">
              <span>18 000 ₽</span>
              <span class="shop__product-old">23 000 ₽</span>
            </div>
            <div class="shop__product-row">
              <div class="shop__quantity">
                <button class="shop__quantity-button">
                  <svg style="width: 13rem; height: 2rem;">
                    <use xlink:href="#minus"></use>
                  </svg>
                </button>
                <input class="shop__quantity-number" type="number" name="Количество" value="1">
                <button class="shop__quantity-button">
                  <svg style="width: 13rem; height: 13rem;">
                    <use xlink:href="#plus"></use>
                  </svg>
                </button>
              </div>
              <button class="shop__cart">В корзину</button>
            </div>
          </div>
        </li>
        <li class="shop__product">
          <img class="shop__product-image" src="./img/product.jpg" alt="Изображение товара" width="289" height="289">
          <div class="shop__product-info">
            <h3 class="shop__product-title">VeriFone VX 520 CTLS Ethernet (стационарный, подключение по локальной сети)</h3>
            <div class="shop__product-price">
              <span>18 000 ₽</span>
              <span class="shop__product-old">23 000 ₽</span>
            </div>
            <div class="shop__product-row">
              <div class="shop__quantity">
                <button class="shop__quantity-button">
                  <svg style="width: 13rem; height: 2rem;">
                    <use xlink:href="#minus"></use>
                  </svg>
                </button>
                <input class="shop__quantity-number" type="number" name="Количество" value="1">
                <button class="shop__quantity-button">
                  <svg style="width: 13rem; height: 13rem;">
                    <use xlink:href="#plus"></use>
                  </svg>
                </button>
              </div>
              <button class="shop__cart">В корзину</button>
            </div>
          </div>
        </li>
        <li class="shop__product">
          <img class="shop__product-image" src="./img/product.jpg" alt="Изображение товара" width="289" height="289">
          <div class="shop__product-info">
            <h3 class="shop__product-title">VeriFone VX 520 CTLS Ethernet (стационарный, подключение по локальной сети)</h3>
            <div class="shop__product-price">
              <span>18 000 ₽</span>
              <span class="shop__product-old">23 000 ₽</span>
            </div>
            <div class="shop__product-row">
              <div class="shop__quantity">
                <button class="shop__quantity-button">
                  <svg style="width: 13rem; height: 2rem;">
                    <use xlink:href="#minus"></use>
                  </svg>
                </button>
                <input class="shop__quantity-number" type="number" name="Количество" value="1">
                <button class="shop__quantity-button">
                  <svg style="width: 13rem; height: 13rem;">
                    <use xlink:href="#plus"></use>
                  </svg>
                </button>
              </div>
              <button class="shop__cart">В корзину</button>
            </div>
          </div>
        </li>
        <li class="shop__product">
          <img class="shop__product-image" src="./img/product.jpg" alt="Изображение товара" width="289" height="289">
          <div class="shop__product-info">
            <h3 class="shop__product-title">VeriFone VX 520 CTLS Ethernet (стационарный, подключение по локальной сети)</h3>
            <div class="shop__product-price">
              <span>18 000 ₽</span>
              <span class="shop__product-old">23 000 ₽</span>
            </div>
            <div class="shop__product-row">
              <div class="shop__quantity">
                <button class="shop__quantity-button">
                  <svg style="width: 13rem; height: 2rem;">
                    <use xlink:href="#minus"></use>
                  </svg>
                </button>
                <input class="shop__quantity-number" type="number" name="Количество" value="1">
                <button class="shop__quantity-button">
                  <svg style="width: 13rem; height: 13rem;">
                    <use xlink:href="#plus"></use>
                  </svg>
                </button>
              </div>
              <button class="shop__cart">В корзину</button>
            </div>
          </div>
        </li>
        <li class="shop__product">
          <img class="shop__product-image" src="./img/product.jpg" alt="Изображение товара" width="289" height="289">
          <div class="shop__product-info">
            <h3 class="shop__product-title">VeriFone VX 520 CTLS Ethernet (стационарный, подключение по локальной сети)</h3>
            <div class="shop__product-price">
              <span>18 000 ₽</span>
              <span class="shop__product-old">23 000 ₽</span>
            </div>
            <div class="shop__product-row">
              <div class="shop__quantity">
                <button class="shop__quantity-button">
                  <svg style="width: 13rem; height: 2rem;">
                    <use xlink:href="#minus"></use>
                  </svg>
                </button>
                <input class="shop__quantity-number" type="number" name="Количество" value="1">
                <button class="shop__quantity-button">
                  <svg style="width: 13rem; height: 13rem;">
                    <use xlink:href="#plus"></use>
                  </svg>
                </button>
              </div>
              <button class="shop__cart">В корзину</button>
            </div>
          </div>
        </li>
        <li class="shop__product">
          <img class="shop__product-image" src="./img/product.jpg" alt="Изображение товара" width="289" height="289">
          <div class="shop__product-info">
            <h3 class="shop__product-title">VeriFone VX 520 CTLS Ethernet (стационарный, подключение по локальной сети)</h3>
            <div class="shop__product-price">
              <span>18 000 ₽</span>
              <span class="shop__product-old">23 000 ₽</span>
            </div>
            <div class="shop__product-row">
              <div class="shop__quantity">
                <button class="shop__quantity-button">
                  <svg style="width: 13rem; height: 2rem;">
                    <use xlink:href="#minus"></use>
                  </svg>
                </button>
                <input class="shop__quantity-number" type="number" name="Количество" value="1">
                <button class="shop__quantity-button">
                  <svg style="width: 13rem; height: 13rem;">
                    <use xlink:href="#plus"></use>
                  </svg>
                </button>
              </div>
              <button class="shop__cart">В корзину</button>
            </div>
          </div>
        </li>
        <li class="shop__product">
          <img class="shop__product-image" src="./img/product.jpg" alt="Изображение товара" width="289" height="289">
          <div class="shop__product-info">
            <h3 class="shop__product-title">VeriFone VX 520 CTLS Ethernet (стационарный, подключение по локальной сети)</h3>
            <div class="shop__product-price">
              <span>18 000 ₽</span>
              <span class="shop__product-old">23 000 ₽</span>
            </div>
            <div class="shop__product-row">
              <div class="shop__quantity">
                <button class="shop__quantity-button">
                  <svg style="width: 13rem; height: 2rem;">
                    <use xlink:href="#minus"></use>
                  </svg>
                </button>
                <input class="shop__quantity-number" type="number" name="Количество" value="1">
                <button class="shop__quantity-button">
                  <svg style="width: 13rem; height: 13rem;">
                    <use xlink:href="#plus"></use>
                  </svg>
                </button>
              </div>
              <button class="shop__cart">В корзину</button>
            </div>
          </div>
        </li>
        <li class="shop__product">
          <img class="shop__product-image" src="./img/product.jpg" alt="Изображение товара" width="289" height="289">
          <div class="shop__product-info">
            <h3 class="shop__product-title">VeriFone VX 520 CTLS Ethernet (стационарный, подключение по локальной сети)</h3>
            <div class="shop__product-price">
              <span>18 000 ₽</span>
              <span class="shop__product-old">23 000 ₽</span>
            </div>
            <div class="shop__product-row">
              <div class="shop__quantity">
                <button class="shop__quantity-button">
                  <svg style="width: 13rem; height: 2rem;">
                    <use xlink:href="#minus"></use>
                  </svg>
                </button>
                <input class="shop__quantity-number" type="number" name="Количество" value="1">
                <button class="shop__quantity-button">
                  <svg style="width: 13rem; height: 13rem;">
                    <use xlink:href="#plus"></use>
                  </svg>
                </button>
              </div>
              <button class="shop__cart">В корзину</button>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>
<?php 
	//function php_func(){
		//echo do_shortcode('[product_category category="katgoriya-2" paginate="true" attribute="attribute" terms="hi" orderby="meta_value_num"]');
	//}
?>
<!-- <button onclick="clickMe()">Click</button> -->

<div id="shop-category-items" class="shop__category-list-wrapper"></div>

<?php /*
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 
do_action( 'woocommerce_sidebar' ); */
?>
<script>
	function clickMe(){
		const productsWrapper = document.getElementById('shop-category-items');
		productsWrapper.innerHTML = `<?php echo php_func(); ?>`;
	}
</script>
<?php 
get_footer( 'shop' );
