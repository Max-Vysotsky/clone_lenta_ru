<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lenta_ru
 */

get_header('single');
?>


<div class="main__wrap">
<?php  get_sidebar(); ?>
<div class="main__right">
<div class="wrap">
      <header class="main__header">
          <a class="logo" href="/">
              <svg viewBox="0 0 252 42" id="ui-logo">
                  <path d="M32.638 29.52c0-6.113 6.43-6.358 14.1-6.358h1.055v-6.55h-1.425c-7.608 0-12.434-.552-12.434-4.752 0-3.643 2.968-4.759 6.868-4.759 5.115 0 7.88 1.092 10.02 2.594V1.791C48.72.803 45.443 0 40.803 0c-8.663 0-15.525 3.336-15.525 11.486 0 3.274 1.666 7.414 6.368 8.278-4.887.804-7.793 5.188-7.793 9.757C23.852 38.664 31.46 42 40.802 42c6.676 0 11.193-.926 14.161-2.968v-8.29c-2.116 2.244-6.985 4.157-12.433 4.157-4.363 0-9.892-1.362-9.892-5.378zM129.63.927H86.15V24.4L59.48 0h-.369v41.074h8.626v-22.61L94.401 42h.375V8.027h12.994v33.047h8.62V8.027h13.24V.926zM8.748 1.05H0v39.9h22.815v-7.673H8.748V1.05zm202.515 15.59c0-10.068-6.409-15.59-17.08-15.59H181.48v39.9h8.636v-8.715h4.066c1.174 0 2.343-.06 3.395-.25l7.953 8.965h10.173l-10.42-12.091c3.82-2.889 5.979-7.307 5.979-12.22zm-17.942 8.532h-3.204V8.107h3.266c6.17 0 9.25 3.133 9.25 8.532 0 4.79-3.204 8.533-9.312 8.533zm-21.664 7.378a4.674 4.674 0 0 0-4.694 4.695c0 2.634 2.099 4.755 4.694 4.755 2.54 0 4.64-2.121 4.64-4.755 0-2.622-2.1-4.695-4.64-4.695zm71.647-31.5v21.092c0 8.804-3.384 12.778-8.918 12.778-5.715 0-8.944-3.974-8.944-12.778V1.05h-8.701v19.179c0 13.365 4.784 21.771 17.645 21.771C247.252 42 252 33.41 252 20.229V1.05h-8.696zM142.47 0h-.37l-20.766 40.95h9.267l3.028-6.652h17.738l3.219 6.652h9.267L142.469 0zm-5.746 27.524l5.561-12.068 5.808 12.068h-11.37z" fill-rule="evenodd"></path>
              </svg>
          </a>
          <span class="current_time"><?php echo __(current_time('d M  H:i'),'lenta_ru'); ?></span>
      </header>
      <main class="main__box">
          <div class="main__lenta lenta">
              <div class="lenta__left">
                <?php $i = 0; ?>
                <?php if ( have_posts() ) { while ( have_posts() )
                  { the_post(); ?>
                  <?php if($i % 10 == 0 && $i != 0)
                  {
                    echo ' </div>
              <div class="lenta__right">';
                  } 
                  ?>
                  <article class="news-item reset-margin">
                      <a href="<?php the_permalink(); ?>" class="news-item__links">
                          <span class="news-item__article"><?php the_title() ?></span>
                      </a>
                      <hr>
                      <span>
                        <?php the_content(); ?>
                      </span>
                  </article>

                  <?php
                  $i++;
                } }?>
                <?php comments_template(); ?>
              </div>
          </div>
          <div class="main__box-right">
               <?php dynamic_sidebar('sidebar-2'); ?>
              <div class="advertising">
                  here your advertising
              </div>
          </div>
      </main>
</div>
<?php 
get_footer(); ?>


