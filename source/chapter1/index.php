<?php get_header(); ?>
      <section id="contents">
        <section id="malls-pickup">
          <div class="malls-group">
            <article>
              <h1><a href="#">mall-title_1</a></h1>
              <a href="#"><img width="302" height="123" src="<?php bloginfo('template_url'); ?>/images/top/mall_image.png"  alt="mall-title_1" /></a>
              <p>텍스트 텍스트 텍스트 텍스트 텍스트 텍스트</p>
              <div class="continue-button">
                <a href="#">자세히 보기</a>
              </div>
            </article>
            <article>
              <h1><a href="#">mall-title_2</a></h1>
              <a href="#"><img width="302" height="123" src="<?php bloginfo('template_url'); ?>/images/top/mall_image.png" alt="mall-title_2" /></a>
              <p>텍스트 텍스트 텍스트 텍스트 텍스트 텍스트</p>
              <div class="continue-button">
                <a href="#">자세히 보기</a>
              </div>
            </article>
          </div><!-- .malls-group end -->
        </section><!-- #malls-pickup end -->
        <section id="latest-columns">
          <h1 id="latest-columns-title">신규 칼럼</h1>
          <span class="link-text archive-link"><a href="#">칼럼 목록</a></span>
          <div class="column-group head">
            <article class="column-article" >
              <h1 class="update-title"><a href="#">column-title_1</a></h1>
              <time class="entry-date" datetime="2012-01-01">entry-date</time>
              <a href="#"><img width="90" height="90" src="<?php bloginfo('template_url'); ?>/images/top/column_image.png" alt="마카로니 스쿠타" /></a>
              <p>텍스트 텍스트 텍스트 텍스트 텍스트 텍스트</p>
              <span class="link-text"><a href="#">계속 읽기</a></span>
            </article>
            <article class="column-article" >
              <h1 class="update-title"><a href="#">column-title_2</a></h1>
              <time class="entry-date" datetime="2012-01-01">entry-date</time>
              <a href="#"><img width="90" height="90" src="<?php bloginfo('template_url'); ?>/images/top/column_image.png" alt="시오도메(汐留) Mall 여름축제 불꽃놀이 대회" /></a>
              <p>텍스트 텍스트 텍스트 텍스트 텍스트 텍스트</p>
              <span class="link-text"><a href="#">계속 읽기</a></span>
            </article>
          </div><!-- .column-group end -->
        </section><!-- #latest-columns end -->
      </section><!-- #contents end -->
<?php get_sidebar('top'); ?>
<?php get_footer(); ?>
