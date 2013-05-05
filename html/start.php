<!DOCTYPE HTML>
<html dir="ltr" lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>title</title>
<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/touch-icon.png" />
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<!--[if lt IE 9]>
  <meta http-equiv="Imagetoolbar" content="no" />
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body class="home">
<div id="wrap">
  <section id="description">
    <h1>description</h1>
  </section><!-- #description end -->
  <div id="container">
    <header id="header">
      <h1 id="site-id">
        <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/header/site_id.png" alt="사이트ID" /></a>
      </h1><!-- #site-id end -->
      <div id="utility-group">
        <nav id="utility-nav">
          <ul>
            <li><a href="#">utility-nav_1</a></li>
            <li><a href="#">utility-nav_2</a></li>
            <li><a href="#">utility-nav_3</a></li>
          </ul>
        </nav><!-- #utility-nav end -->
        <div id="header-widget-area">
          <aside class="widget_search">
            <form role="search" id="searchform">
              <div>
                <input type="text" id="s" />
                <input type="submit" id="searchsubmit"/>
              </div>
            </form><!-- #searchform end -->
          </aside><!-- .widget_search end -->
        </div><!-- #header-widget-area end -->
      </div><!-- #utility-group end -->
    </header><!-- #header end -->
    <nav id="global-nav">
      <ul id="menu-global">
        <li id="menu-item-home" class="menu-item current-menu-item"><a href="#">Top Page</a></li>
        <li id="menu-item-about" class="menu-item"><a href="#">회사개요</a></li>
        <li id="menu-item-mall" class="menu-item"><a href="#">Mall 개발 실적</a>
          <ul class="sub-menu">
            <li class="menu-item"><a href="#">Mall 1</a></li>
            <li class="menu-item"><a href="#">Mall 2</a></li>
          </ul>
        </li>
        <li id="menu-item-column" class="menu-item"><a href="#">칼럼</a></li>
        <li id="menu-item-inquiry" class="menu-item"><a href="#">문의</a></li>
      </ul><!-- #menu-global end -->
    </nav><!-- #global-nav end -->
    <section id="branding">
      <img src="<?php bloginfo('template_url'); ?>/images/top/main_image.png" width="950" height="295" alt="" />
    </section><!-- #branding end -->
    <section id="contents-body">
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
              <time class="entry-date" datetime="2012-04-01">entry-date</time>
              <a href="#"><img width="90" height="90" src="<?php bloginfo('template_url'); ?>/images/top/column_image.png" alt="마카로니 스쿠타" /></a>
              <p>텍스트 텍스트 텍스트 텍스트 텍스트 텍스트</p>
              <span class="link-text"><a href="#">계속 읽기</a></span>
            </article>
            <article class="column-article" >
              <h1 class="update-title"><a href="#">column-title_2</a></h1>
              <time class="entry-date" datetime="2012-04-01">entry-date</time>
              <a href="#"><img width="90" height="90" src="<?php bloginfo('template_url'); ?>/images/top/column_image.png" alt="시오도메(汐留) Mall 여름축제 불꽃놀이 대회" /></a>
              <p>텍스트 텍스트 텍스트 텍스트 텍스트 텍스트</p>
              <span class="link-text"><a href="#">계속 읽기</a></span>
            </article>
          </div><!-- .column-group end -->
        </section><!-- #latest-columns end -->
      </section><!-- #contents end -->
      <section id="sidebar">
        <aside class="rss_link">
          <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/btn_rss_feed.png" width="250" height="28" alt="RSS" /></a>
        </aside>
        <div id="primary" class="widget-area">
          <aside id="event-info" class="news-list">
            <h1>이벤트 개최 정보</h1>
            <div class="info-wrap">
              <ul>
                <li>
                  <time class="entry-date" datetime="2012-04-01">entry-date</time>
                  <h2><a href="#">event-info_title_1</a></h2>
                  <a href="#"><img width="61" height="61" src="<?php bloginfo('template_url'); ?>/images/top/post_image.png" alt="'방콕 로열가든 페어' 개최 알림" /></a>
                  <p>텍스트 텍스트 텍스트 텍스트 텍스트 텍스트</p>
                </li>
                <li>
                  <time class="entry-date" datetime="2012-04-01">entry-date</time>
                  <h2><a href="#">event-info_title_2</a></h2>
                  <a href="#"><img width="61" height="61" src="<?php bloginfo('template_url'); ?>/images/top/post_image.png" alt="'시오도메(汐留) 맛기행' 개최 알림" /></a>
                  <p>텍스트 텍스트 텍스트 텍스트 텍스트 텍스트</p>
                </li>
              </ul>
              <span class="link-text"><a href="#">이벤트 개최 정보 목록</a></span>
            </div><!-- .info-wrap end -->
          </aside><!-- #event-info end -->
          <aside id="malls-info" class="news-list">
            <h1>Mall 출점 정보</h1>
            <div class="info-wrap">
              <ul>
                <li>
                  <time class="entry-date" datetime="2012-04-01">entry-date</time>
                  <h2><a href="#">malls-info_title_1</a></h2>
                  <a href="#"><img width="61" height="61" src="<?php bloginfo('template_url'); ?>/images/top/post_image.png" alt="호놀룰루 'Kamehame Mall' 오픈" /></a>
                  <p>텍스트 텍스트 텍스트 텍스트 텍스트 텍스트</p>
                </li>
                <li>
                  <time class="entry-date" datetime="2012-04-01">entry-date</time>
                  <h2><a href="#">malls-info_title_2</a></h2>
                  <a href="#"><img width="61" height="61" src="<?php bloginfo('template_url'); ?>/images/top/post_image.png" alt="샌프란시스코 놉힐 'Golden Gate Mall' 오픈" /></a>
                  <p>텍스트 텍스트 텍스트 텍스트 텍스트 텍스트</p>
                </li>
              </ul>
              <span class="link-text"><a href="#">Mall 출점 정보 목록</a></span>
            </div><!-- #info-wrap end -->
          </aside><!-- #malls-info end -->
          <aside id="information-info" class="news-list">
            <h1>알림</h1>
            <div class="info-wrap">
              <ul>
                <li>
                  <time class="entry-date" datetime="2012-04-01">entry-date</time>
                  <h2><a href="#">information-info_title_1</a></h2>
                  <a href="#"><img width="61" height="61" src="<?php bloginfo('template_url'); ?>/images/top/post_image.png" alt="인재모집 공고" /></a>
                  <p>텍스트 텍스트 텍스트 텍스트 텍스트 텍스트</p>
                </li>
                <li>
                  <time class="entry-date" datetime="2012-04-01">entry-date</time>
                  <h2><a href="#">information-info_title_2</a></h2>
                  <a href="#"><img width="61" height="61" src="<?php bloginfo('template_url'); ?>/images/top/post_image.png"  alt="호놀룰루 지점을 개설했습니다." /></a>
                  <p>텍스트 텍스트 텍스트 텍스트 텍스트 텍스트</p>
                </li>
              </ul>
              <span class="link-text"><a href="#">알림 목록</a></span>
            </div><!-- .info-wrap end -->
          </aside><!-- #information-info end -->
        </div><!-- #primary end -->
      </section><!-- #sidebar end -->
    </section><!-- #contents-body end -->
  </div><!-- #container end -->
  <div id="footer-container">
    <footer id="footer">
      <p id="copyright"><small>Copyright &copy; [ company's name ] All rights reserved.</small></p>
    </footer><!-- #footer end -->
  </div><!-- #footer-container end -->
</div><!-- #wrap end -->
</body>
</html>
