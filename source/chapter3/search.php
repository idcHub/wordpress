<?php get_header(); ?>
      <section id="contents">
        <header class="page-header">
           <h1 class="page-title">'<?php the_search_query(); ?>' 검색 결과</h1>
        </header>
        <div class="posts">
<?php
if (have_posts() && get_search_query()) :
  while (have_posts()) :
    the_post();
    get_template_part('content-archive');
  endwhile;
  if (function_exists('page_navi')) :
    page_navi('elm_class=page-nav&edge_type=span');
  endif;
else :
?>
          <p>해당하는 포스트가 없습니다.</p>
<?php
endif;
?>
        </div>
<?php get_template_part('back_to_top'); ?>
      </section><!-- #contents end -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>