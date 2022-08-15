<?php 
/*
Template Name: Шаблон главной страницы
*/
get_header('hero'); ?>
<main class="main swiper">
  <div class="swiper-wrapper">
  	<?php /* global $opt_name; 
  	echo '<div>';
  	echo esc_attr($opt_name['title_field'] );
  	echo '</div>';
  	echo esc_attr($opt_name['main_bg']['url']);
  	print_r( $opt_name['main_bg'] );
  	echo '<hr>';
  	print_r( $opt_name['text_field'] );
  	echo '<hr>';
  	print_r( $opt_name['select_field'] ); */?>



    <div class="swiper-slide main__item" style="background: linear-gradient(90deg, rgba(32, 32, 32, 0.64) 0%, rgba(32, 32, 32, 0.16) 100%), url('./img/main_bg.jpg') no-repeat center / cover;">
      <div class="container">
        <h1 class="main__title"><?php echo $opt_name['main_title'] ?></h1>
        <p class="main__description text"><?php echo $opt_name['main_description'] ?></p>
        <button class="main__button button"><span class="button__text">Вход в систему мониторинга</span></button>
      </div>
    </div>
    <div class="swiper-slide main__item" style="background: linear-gradient(90deg, rgba(32, 32, 32, 0.64) 0%, rgba(32, 32, 32, 0.16) 100%), url('./img/main_bg_1.jpg') no-repeat center / cover;">
      <div class="container">
        <h1 class="main__title"><?php echo $opt_name['main_title_1'] ?></h1>
        <p class="main__description main__description_orange text"><?php echo $opt_name['main_description_1'] ?></p>
        <button class="main__button button button_orange"><span class="button__text">Вход в систему мониторинга</span></button>
      </div>
    </div>
  </div>
  <div class="main__arrows container">
    <button class="swiper-button-prev"><svg style="width: 12rem; height: 19rem;"><use xlink:href="#arrow"></use></svg></button>
    <button class="swiper-button-next"><svg style="width: 12rem; height: 19rem; transform: rotate(180deg);"><use xlink:href="#arrow"></use></svg></button>
  </div>
</main>

<section class="partners">
  <div class="container">
    <h2 class="partners__title title">Официальный <span>партнер</span></h2>
    <div class="partners__row">
      <div class="partners__item"><img src="<?php echo $opt_name['partner_image_1']['url'] ?>" width="<?php echo $opt_name['partner_image_1']['width'] ?>" height="<?php echo $opt_name['partner_image_1']['height'] ?>"></div>
      <div class="partners__item"><img src="<?php echo $opt_name['partner_image_2']['url'] ?>" width="<?php echo $opt_name['partner_image_2']['width'] ?>" height="<?php echo $opt_name['partner_image_2']['height'] ?>"></div>
      <div class="partners__item"><img src="<?php echo $opt_name['partner_image_3']['url'] ?>" width="<?php echo $opt_name['partner_image_3']['width'] ?>" height="<?php echo $opt_name['partner_image_3']['height'] ?>"></div>
      <div class="partners__item"><img src="<?php echo $opt_name['partner_image_4']['url'] ?>" width="<?php echo $opt_name['partner_image_4']['width'] ?>" height="<?php echo $opt_name['partner_image_4']['height'] ?>"></div>
    </div>
  </div>
</section>

<section class="about">
  <div class="container">
    <h2 class="about__title title title_white">О компании в цифрах</h2>
    <ul class="about__list">
      <li class="about__item">
        <span class="about__number"><?php echo $opt_name['about_number_1'] ?></span>
        <p class="about__description"><?php echo $opt_name['about_text_1'] ?></p>
      </li>
      <li class="about__item">
        <span class="about__number"><?php echo $opt_name['about_number_2'] ?></span>
        <p class="about__description"><?php echo $opt_name['about_text_2'] ?></p>
      </li>
      <li class="about__item">
        <span class="about__number"><?php echo $opt_name['about_number_3'] ?></span>
        <p class="about__description"><?php echo $opt_name['about_text_3'] ?></p>
      </li>
      <li class="about__item">
        <span class="about__number"><?php echo $opt_name['about_number_4'] ?></span>
        <p class="about__description"><?php echo $opt_name['about_text_4'] ?></p>
      </li>
      <li class="about__item">
        <span class="about__number"><?php echo $opt_name['about_number_5'] ?></span>
        <p class="about__description"><?php echo $opt_name['about_text_5'] ?></p>
      </li>
      <li class="about__item">
        <span class="about__number"><?php echo $opt_name['about_number_6'] ?></span>
        <p class="about__description"><?php echo $opt_name['about_text_6'] ?></p>
      </li>
      <li class="about__item">
        <span class="about__number"><?php echo $opt_name['about_number_7'] ?></span>
        <p class="about__description"><?php echo $opt_name['about_text_7'] ?></p>
      </li>
      <li class="about__item">
        <span class="about__number"><?php echo $opt_name['about_number_8'] ?></span>
        <p class="about__description"><?php echo $opt_name['about_text_8'] ?></p>
      </li>
    </ul>
  </div>
</section>

<section class="clients">
  <div class="container">
    <h2 class="clients__title title">Наши <span>клиенты</span></h2>
    <ul class="clients__list">
      <li class="clients__item"><img src="<?php echo $opt_name['clients_1']['url'] ?>" width="<?php echo $opt_name['clients_1']['width'] ?>" height="<?php echo $opt_name['clients_1']['height'] ?>"></li>
      <li class="clients__item"><img src="<?php echo $opt_name['clients_2']['url'] ?>" width="<?php echo $opt_name['clients_2']['width'] ?>" height="<?php echo $opt_name['clients_2']['height'] ?>"></li>
      <li class="clients__item"><img src="<?php echo $opt_name['clients_3']['url'] ?>" width="<?php echo $opt_name['clients_3']['width'] ?>" height="<?php echo $opt_name['clients_3']['height'] ?>"></li>
      <li class="clients__item"><img src="<?php echo $opt_name['clients_4']['url'] ?>" width="<?php echo $opt_name['clients_4']['width'] ?>" height="<?php echo $opt_name['clients_4']['height'] ?>"></li>
      <li class="clients__item"><img src="<?php echo $opt_name['clients_5']['url'] ?>" width="<?php echo $opt_name['clients_5']['width'] ?>" height="<?php echo $opt_name['clients_5']['height'] ?>"></li>
      <li class="clients__item"><img src="<?php echo $opt_name['clients_6']['url'] ?>" width="<?php echo $opt_name['clients_6']['width'] ?>" height="<?php echo $opt_name['clients_6']['height'] ?>"></li>
      <li class="clients__item"><img src="<?php echo $opt_name['clients_7']['url'] ?>" width="<?php echo $opt_name['clients_7']['width'] ?>" height="<?php echo $opt_name['clients_7']['height'] ?>"></li>
      <li class="clients__item"><img src="<?php echo $opt_name['clients_8']['url'] ?>" width="<?php echo $opt_name['clients_8']['width'] ?>" height="<?php echo $opt_name['clients_8']['height'] ?>"></li>
      <li class="clients__item"><img src="<?php echo $opt_name['clients_9']['url'] ?>" width="<?php echo $opt_name['clients_9']['width'] ?>" height="<?php echo $opt_name['clients_9']['height'] ?>"></li>
      <li class="clients__item"><img src="<?php echo $opt_name['clients_10']['url'] ?>" width="<?php echo $opt_name['clients_10']['width'] ?>" height="<?php echo $opt_name['clients_10']['height'] ?>"></li>
      <li class="clients__item"><img src="<?php echo $opt_name['clients_11']['url'] ?>" width="<?php echo $opt_name['clients_11']['width'] ?>" height="<?php echo $opt_name['clients_11']['height'] ?>"></li>
      <li class="clients__item"><img src="<?php echo $opt_name['clients_12']['url'] ?>" width="<?php echo $opt_name['clients_12']['width'] ?>" height="<?php echo $opt_name['clients_12']['height'] ?>"></li>
      <li class="clients__item"><img src="<?php echo $opt_name['clients_13']['url'] ?>" width="<?php echo $opt_name['clients_13']['width'] ?>" height="<?php echo $opt_name['clients_13']['height'] ?>"></li>
      <li class="clients__item"><img src="<?php echo $opt_name['clients_14']['url'] ?>" width="<?php echo $opt_name['clients_14']['width'] ?>" height="<?php echo $opt_name['clients_14']['height'] ?>"></li>
      <li class="clients__button">
        <button class="clients__button-inner button">
          <span class="button__text">Вход в систему мониторинга</span>
        </button>
      </li>
    </ul>
  </div>
</section>

<section class="contacts">
  <h2 class="contacts__title title">Контактная <span>информация</span></h2>
  <div class="contacts__map" id="map">
    <div class="contacts__info">
      <ul class="contacts__list">
        <li class="contacts__item">
          <h3 class="contacts__item-name">Адрес головного офиса</h3>
          <p class="contacts__item-text"><?php echo esc_attr($opt_name['address']); ?></p>
        </li>
        <li class="contacts__item">
          <h3 class="contacts__item-name">Телефон</h3>
          <a class="contacts__item-link" href="tel:<?php echo esc_attr($opt_name['address']); ?>"><?php echo esc_attr($opt_name['phone_href']); ?></a>
        </li>
        <li class="contacts__item">
          <h3 class="contacts__item-name">Почта</h3>
          <a class="contacts__item-link" href="mailto:<?php echo esc_attr($opt_name['email']); ?>"><?php echo esc_attr($opt_name['email']); ?></a>
        </li>
        <li class="contacts__item">
          <h3 class="contacts__item-name">Режим работы</h3>
          <p class="contacts__item-text"><?php echo esc_attr($opt_name['working-time']); ?></p>
        </li>
        <li class="contacts__social">
          <ul class="contacts__social-list">
            <li class="contacts__social-item">
              <a class="contacts__social-link" href="<?php echo esc_attr($opt_name['telegram']); ?>">
                <svg style="width: 21rem; height: 18rem;">
                  <use xlink:href="#telegram"></use>
                </svg>
              </a>
            </li>
            <li class="contacts__social-item">
              <a class="contacts__social-link" href="<?php echo esc_attr($opt_name['vk']); ?>">
                <svg style="width: 23rem; height: 15rem;">
                  <use xlink:href="#vk"></use>
                </svg>
              </a>
            </li>
            <li class="contacts__social-item">
              <a class="contacts__social-link" href="<?php echo esc_attr($opt_name['instagram']); ?>">
                <svg style="width: 24rem; height: 24rem;">
                  <use xlink:href="#instagram"></use>
                </svg>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</section>

<?php get_footer();
