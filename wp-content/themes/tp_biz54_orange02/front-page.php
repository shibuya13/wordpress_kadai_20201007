<?php get_header(); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" rel="stylesheet">
</head>
<div id="contents">
<section>
<h2>Pickup News<span>注目ニュース</span></h2>
<?php 
$args = array(
    'post_type' => 'post',
    'category_name'  => 'pickupnews',
    'posts_per_page' => 2,
);
$the_query = new WP_Query($args);
if( $the_query->have_posts() ): ?>
        <?php while($the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="list">
            <div class="text">
                <h4><?php the_title(); ?></h4>
                <p><?php the_content(); ?></p>
                <p class="btn1"><a href="<?php echo get_template_directory_uri(); ?>/">もっとみる</a></p>
            </div>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </section>
    
    <section id="new">
        <h2>更新情報・お知らせ</h2>
        <?php 
$args = array(
    'post_type' => 'post',
    'category_name'  => 'news',
    'posts_per_page' => 5,
);
$the_query = new WP_Query($args);
if( $the_query->have_posts() ): ?>
        <?php while($the_query->have_posts() ) : $the_query->the_post(); ?>
        <!-- <div class="list"> -->
            <!-- <div class="text"> -->
                <dt><?php the_date(); ?></dt>
                <dd><?php the_title(); ?></dd>
            <!-- </div> -->
        <!-- </div> -->
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </section>
    
    
<section id="service">
    <h2>テンプレートのご利用前に必ずお読み下さい</h2>
    <?php 
$args = array(
    'post_type' => 'post',
    'category_name'  => 'service',
    'post_per_page' => 5,
);
$the_query = new WP_Query($args);
if( $the_query->have_posts() ): ?>
        <?php while($the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="list">
            <div class="text">
                <h4><?php the_date(); ?></h4>
                <?php echo $date?>
                <?php $date=the_title(); ?>
                <p><?php the_content(); ?></p>
            </div>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>
</section>
<?php get_footer(); ?>

