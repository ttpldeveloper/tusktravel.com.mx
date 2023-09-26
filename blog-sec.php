<section class="blog_section">
<div class="container">
<h2 class="text-center">Últimos artículos publicados en nuestro Blog</h2>

<p class="text-center home-intro">Viajar con la ayuda de algunos consejos y consejos de viaje lo hace más conveniente y agradable. Encuentre consejos de viaje útiles, guíe y aprenda más sobre los mejores lugares, hoteles, lugares de interés turístico, puntos de venta de comida y muchos más. Explora emocionantes destinos turísticos en la India y en todo el mundo.
</p>
      <div class="row">
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/blog/wp-load.php');
$args = array(
// 'cat' => 3, // Only source posts from a specific category
'posts_per_page' => 4 // Specify how many posts you'd like to display
);
$latest_posts = new WP_Query( $args );
if ( $latest_posts->have_posts() ) {
while ( $latest_posts->have_posts() ) {
$latest_posts->the_post(); ?>
<div class="col-lg-3 col-md-3 col-sm-12 colxs-13">
 
<a target="_blank" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
<?php if ( has_post_thumbnail() ) { ?>
<span class="post_thumbnail"><?php the_post_thumbnail(); ?></span>
<?php } ?>
 <div class="blog_col">
<span class="post_title"><?php the_title(); ?></span>
</a>
<!-- <span class="post_time">Posted on <?php the_time('l jS F, Y') ?></span> -->
<!-- <?php the_excerpt(); ?> -->
<?php 
  $excerpt = get_the_excerpt();
  $excerpt = substr( $excerpt , 0, 140); 
  echo $excerpt;
  ?>
<span class="view_post"><a target="_blank" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Lee mas >> </a></span>
</div>
</div>
<? }
} else {
echo '<p>There are no posts available</p>';
}
wp_reset_postdata();
?>
</div>
<div class="view_all_blog"><a href="https://www.tusktravel.com.mx/blog/" target="_blank">Ver más artículos</a></div>
  </div>
</section>
