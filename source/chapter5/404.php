<!DOCTYPE HTML>
<html dir="ltr" lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>페이지가 존재하지 않습니다. | <?php bloginfo('name'); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/css/404.css" />
</head>
<body>
  <div id="outside">
    <div id="wrapper_page">
      <h1>404 File not found</h1>
      <h2>웹 페이지를 찾을 수 없습니다.</h2>

      <div id="content">
        <h3>가능성이 높은 원인</h3>
        <ul>
          <li>주소에 오타가 있을 수 있습니다.</li>
          <li>클릭한 링크가 만료된 것일 수도 있습니다.</li>
        </ul>
        <h3>가능한 해결 방법</h3>

        <ul>
          <li>주소를 다시 입력하십시오.</li>
          <li><a href="javascript:history.back();">이전 페이지로 돌아갑니다.</a></li>
          <li><a href="<?php echo home_url('/'); ?>">기본 사이트</a>에서 원하는 정보를 찾습니다.</li>
        </ul>
      </div>
    </div>

  </div>
</body>
</html>