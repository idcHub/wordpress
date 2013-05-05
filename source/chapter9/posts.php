        <section class="shops">
          <?php echo get_the_post_thumbnail($post->ID, 'large_thumbnail', array('class' => 'alignleft shop_thumbnail', 'title' => $post->post_title, 'alt' => $post->post_title)); ?>

          <h3><?php echo esc_html($post->post_title); ?></h3>
          <table class="shop_spec">
<?php
  $info_list = array('장소', '시간', '캠페인 정보');
  foreach ($info_list as $info) :
    if (isset($post_custom[$info]) && $post_custom[$info]) :
?>
            <tr>
              <th><?php echo $info; ?></th>
              <td><?php echo nl2br(esc_html($post_custom[$info][0])); ?></td> 
            </tr>
<?php 
    endif;
  endforeach;
?>
          </table>
          <h4 class="shop_content_title"><img src="<?php bloginfo('template_url'); ?>/images/h4_shop_comment.png" alt="COMMENT" width="97" height="35" /></h4>
          <section class="shop_content">
            <?php echo $post->post_content; ?>

          </section>
        </section>
