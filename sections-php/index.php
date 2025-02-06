<?php get_header(); ?>

<main id="content">

<?php if ( is_front_page() ) : ?>

<section class="main__banner">
  <div class="container">
    <div class="banner__left">
      <h2 class="banner__title">Экономия нервов и денег — интернет К-Телеком</h2>
      <ul class="banner__list">
        <li class="banner__list__items">5 тарифов для многоквартирных и 4 для частных домов</li>
        <li class="banner__list__items">безлимит подключенных устройств</li>
        <li class="banner__list__items">комфортная поддержка 24/7</li>
      </ul>
      <a href="#" class="link_">Подробнее</a>
    </div>
    <div class="banner-right">
      
    </div>
  </div>
</section>

<?php endif; ?>

</main>

<?php get_sidebar(); ?>  <?php //Можно убрать, если не нужен сайдбар на лендинге ?>
<?php get_footer(); ?>