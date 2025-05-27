<?php
/**
 * The main template file
 * Template Name: Home
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shivram_group
 */

get_header();
$current_page_id = 21;
?>

<aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
            <?php 
            $home_slider_cpt = new WP_Query(array('post_type' => 'home_slider_cpt'));
            while ($home_slider_cpt->have_posts()) : 
                $home_slider_cpt->the_post();
                $home_slider_image = get_field('home_slider_image', get_the_ID());
            ?>
            <li class="slides-li-bg" style="background-image: url('<?php echo esc_url($home_slider_image); ?>');">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 col-md-pull-4 js-fullheight slider-text">
                            <div class="slider-text-inner">
                                <div class="desc">
                                    <span class="status"><?php echo get_field('home_slider_status', get_the_ID()); ?></span>
                                    <h1><?php echo get_field('home_slider_address_heading', get_the_ID()); ?></h1>
                                    <h2 class="price"><?php echo get_field('home_slider_price', get_the_ID()); ?></h2>
                                    <p><?php echo get_field('home_slider_info_text', get_the_ID()); ?></p>
                                    <?php echo get_field('home_slider_product_details', get_the_ID()); ?>
                                    <a class="btn btn-primary btn-lg" href="#"><?php echo get_field('home_slider_learn_more', get_the_ID()); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <?php endwhile; wp_reset_postdata(); ?>
        </ul>
    </div>
</aside>


<!-- Popular Services -->
<div id="fh5co-features">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box py-5">
                <h3 class="pt-lg-5 pt-sm-3">
                    <?php echo esc_html(get_field('home_popular_services_tittle', $current_page_id)); ?> 
                </h3>
                <p>
                    <?php echo get_field('home_popular_services_text', $current_page_id); ?>
                </p>
                <?php //var_dump(get_the_ID()); ?>
            </div>
        </div>

        <div class="row">
            <?php 
                $home_popular_service = new WP_Query(array('post_type' => 'home_popular_service'));
                while ($home_popular_service->have_posts()) : $home_popular_service->the_post();
            ?>
            <div class="col-md-4 animate-box">
                <div class="feature-left">
                    <span class="icon">
                        <i class="<?php echo get_field('home_popular_services_icon', get_the_ID()) ?>"></i>
                    </span>
                    <div class="feature-copy">
                        <h3><?php echo get_field('home_popular_services_tittle', get_the_ID()) ?></h3>
                        <p><?php echo get_field('home_popular_services_text', get_the_ID()) ?></p>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</div>

<!-- Popular Properties -->
<div id="fh5co-popular-properties" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3 class="pt-lg-5 pt-sm-3">
                    <?php echo get_field('home_popular_properties_tittle', $current_page_id) ?> 
                </h3>
                <p><?php echo get_field('home_popular_properties_text', $current_page_id) ?>
                </p>
            </div>
        </div>
        <div class="row">
            <?php 
                $home_properties_serv = new WP_Query(array('post_type' => 'home_properties_serv'));
                while ($home_properties_serv->have_posts()) : $home_properties_serv->the_post();
                $image_url = get_field('home_properties_image', get_the_ID());
            ?>
            <div class="col-md-4 animate-box">
                <a href="#" class="fh5co-property" style="background-image: url('<?php echo esc_url($image_url); ?>');">
                    <span class="status"><?php echo get_field('home_properties_status', get_the_ID()) ?></span>
                    <div class="prop-details">
                        <span class="price"><?php echo get_field('home_properties_price', get_the_ID()) ?></span>
                        <h3><?php echo get_field('home_properties_desc', get_the_ID()) ?></h3>
                    </div>
                </a>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</div>

<!-- Happy Clients -->
<div id="fh5co-testimonial"
    style="background-image:url('http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/img_bg_2.jpg');">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2><?php echo get_field('home_heading_client_testimonials', $current_page_id) ?></h2>
            </div>
        </div>
        <div class="row">
            <?php 
                $home_client_testi = new WP_Query(array('post_type' => 'home_client_testi'));
                while ($home_client_testi->have_posts()) : $home_client_testi->the_post();
            ?>
            <div class="col-md-4">
                <div class="box-testimony animate-box">
                    <blockquote>
                        <span class="quote"><span><i class="icon-quotes-right"></i></span></span>
                        <p><?php echo get_field('home_client_testimonials_desc', get_the_ID()) ?></p>
                        <footer class="mt-2 fw-bold text-end">
                            <?php echo get_field('home_testimonials_client_name', get_the_ID()) ?>
                        </footer>
                    </blockquote>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</div>

<!-- Newest Properties -->
<div id="fh5co-properties" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3 class="pt-lg-5 pt-sm-3">
                    <?php echo get_field('home_heading_newest_properties_tittle', $current_page_id) ?> 
                </h3>
                <p><?php echo get_field('home_heading_newest_properties_text', $current_page_id) ?> </p>
            </div>
        </div>
        <div class="row">
            <?php 
                $home_newest_properti = new WP_Query(array('post_type' => 'home_newest_properti'));
                while ($home_newest_properti->have_posts()) : $home_newest_properti->the_post();
                $home_newest_properties_image = get_field('home_newest_properties_image', get_the_ID());
            ?>
            <div class="col-md-4 animate-box">
                <div class="property">
                    <a href="#" class="fh5co-property"
                        style="background-image: url('<?php echo esc_url($home_newest_properties_image); ?>');">
                        <span class="status"><?php echo get_field('home_newest_properties_status', get_the_ID()) ?></span>
                        <?php echo get_field('home_newest_properties_list_details', get_the_ID()) ?>
                    </a>
                    <div class="property-details">
                        <h3><?php echo get_field('home_newest_properties_property_details', get_the_ID()) ?></h3>
                        <span class="price"><?php echo get_field('home_newest_properties_price', get_the_ID()) ?></span>
                        <p><?php echo get_field('home_newest_properties_desc', get_the_ID()) ?></p>
                        <span class="address"><i class="icon-map"></i> <?php echo get_field('home_newest_properties_address', get_the_ID()) ?></span>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</div>

<!-- Our Agents -->
<div id="fh5co-about" class="fh5co-agent">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>Our Agents</h3>
                <p>Meet our expert real estate professionals who are dedicated to helping you find the perfect residential or commercial space with personalized guidance.</p>
            </div>
        </div>
        <!-- Placeholder for agents - commented block -->
    </div>
</div>

<!-- Recent Blog -->
<div id="fh5co-blog-section" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3 class="pt-lg-5 pt-sm-3"><?php echo get_field('home_recent_blogs', $current_page_id) ?></h3>
                <p><?php echo get_field('home_recent_blogs_text', $current_page_id) ?></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row row-bottom-padded-md">
            <?php 
                $home_recent_blog = new WP_Query(array('post_type' => 'home_recent_blog'));
                while ($home_recent_blog->have_posts()) : $home_recent_blog->the_post();
                $home_recent_blog_image = get_field('home_recent_blog_image', get_the_ID());
            ?>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="fh5co-blog animate-box">
                    <a href="#"><img class="img-responsive" src="<?php echo esc_url($home_recent_blog_image); ?>" alt="Featured Residential Projects"></a>
                    <div class="blog-text">
                        <div class="prod-title">
                            <h3><a href="#"><?php echo get_field('recent_blog_tittle', get_the_ID()) ?></a></h3>
                            <span class="posted_by"><?php echo get_field('recent_blog_posted_by', get_the_ID()) ?></span>
                            <span class="comment"><a href="#"><?php echo get_field('home_recent_blog_comment', get_the_ID()) ?><i class="icon-bubble2"></i></a></span>
                            <p><?php echo get_field('home_recent_blog_text', get_the_ID()) ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</div>

<?php
get_footer();
