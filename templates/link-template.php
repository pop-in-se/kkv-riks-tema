<?php 
$link = get_field('link');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="knapp" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>

<?php 
$link2 = get_field('link_2');
if( $link2 ): 
    $link2_url = $link2['url'];
    $link2_title = $link2['title'];
    $link2_target = $link2['target'] ? $link2['target'] : '_self';
    ?>
    <a class="knapp" href="<?php echo esc_url( $link2_url ); ?>" target="<?php echo esc_attr( $link2_target ); ?>"><?php echo esc_html( $link2_title ); ?></a>
<?php endif; ?>

<?php 
$link3 = get_field('link_3');
if( $link3 ): 
    $link3_url = $link3['url'];
    $link3_title = $link3['title'];
    $link3_target = $link3['target'] ? $link3['target'] : '_self';
    ?>
    <a class="knapp" href="<?php echo esc_url( $link3_url ); ?>" target="<?php echo esc_attr( $link3_target ); ?>"><?php echo esc_html( $link3_title ); ?></a>
<?php endif; ?>

<?php 
$link4 = get_field('link_4');
if( $link4 ): 
    $link4_url = $link4['url'];
    $link4_title = $link4['title'];
    $link4_target = $link4['target'] ? $link4['target'] : '_self';
    ?>
    <a class="knapp" href="<?php echo esc_url( $link4_url ); ?>" target="<?php echo esc_attr( $link4_target ); ?>"><?php echo esc_html( $link4_title ); ?></a>
<?php endif; ?>